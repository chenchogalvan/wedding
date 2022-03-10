<?php

namespace App\Exports;

use App\Models\Guest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class GuestsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $user = User::find(Auth::user()->id);
        $guests = $user->guests;
        return $guests;
    }
}
