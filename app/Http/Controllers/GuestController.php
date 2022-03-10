<?php

namespace App\Http\Controllers;

use App\Exports\GuestsExport;
use App\Http\Requests\GuestRequest;
use App\Mail\InvitationEmail;
use App\Models\Guest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class GuestController extends Controller
{
    public function __construct(Guest $guest) {
        $this->guest = $guest;
    }
    public function index()
    {
        $guests = $this->guest->all();
        return view('guest.index', compact('guests'));
    }

    public function addGuest()
    {
        return view('guest.add');
    }

    public function saveGuest(GuestRequest $request)
    {

        $validate = $request->validated();



        if ($validate) {
            $token = Str::random(30);
            // $this->guest->checkToken($token)->count();

            $guest = $this->guest;
            $guest->user_id         = Auth::user()->id;
            $guest->name            = $request->get('name');
            $guest->last_name       = $request->get('last_name');
            $guest->email           = $request->get('email');
            $guest->phone           = $request->get('phone');
            $guest->inviteds        = $request->get('inviteds');
            $guest->token           = $token;
            $guest->save();

            if ($request->has('send')) {
                $this->sendGuest($guest);
                return redirect()->back()->with('success', 'Los datos se guardaron y el correo se envió correctamente');
            }

           return redirect()->back()->with('success', 'Los datos se guardaron correctamente');
        }
    }


    public function sendGuest(Guest $guest)
    {
        //Se obtienen los datos del usuario
        //Se envia el mensaje

        // return $guest;

        //Se actualiza invitation y fecha
        $guest->invitation = 1;
        $guest->invitation_date = Carbon::now();
        $guest->save();

        $url = config('app.url').'/invitados/'.$guest->token;

        //Se envia el correo
        Mail::to($guest->email)->send(new InvitationEmail($guest, $url));

        return redirect()->back()->with('success', 'Invitación enviada con éxito a <b>'.$guest->name.'</b> al correo <b>'.$guest->email.'</b>.');

    }

    public function sendAllGuest($id)
    {
        $user = User::find($id);
        $guests = $user->guests;

        $invitados = 0;

        foreach ($guests as $key => $value) {
            // echo $guests[$key].'<br>';
            $guest = $guests[$key];
            $guest->invitation = 1;
            $guest->invitation_date = Carbon::now();
            $guest->save();

            $url = config('app.url').'/invitados/'.$guest->token;
            // //Se envia el correo
            Mail::to($guest->email)->send(new InvitationEmail($guest, $url));

            $invitados = $invitados + 1;
        }
        return redirect()->back()->with('success', 'Se enviaron '. $invitados.' correos en total.');
    }


    public function export()
    {
        return Excel::download(new GuestsExport, 'users.xlsx');
    }


    public function confirmInvitation($token)
    {
        $guest = $this->guest->where('token', $token)->first();
        if ($guest->confirmed == 0) {
            $guest->confirmed = 1;
            $guest->confirmation_date = Carbon::now();
            $guest->save();
            return 'se confirmó la invitación';
        } else {
           return 'YA estaba confirmada la invitación';
        }




    }
}
