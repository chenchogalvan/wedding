<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\PagesControler;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $date = Carbon::now();
    $sCeremony = Carbon::now();
    $pCeremony = "Dirección, #123, Ciudad, Estado";
    $sReception = Carbon::now();
    $pReception = "Dirección, #123, Ciudad, Estado";


    return view('landing', compact('date', 'sCeremony', 'pCeremony', 'sReception', 'pReception'));
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->prefix('/dashboard')->group(function () {

    Route::get('/', [PagesControler::class, 'index'])->name('dashboard');

    Route::prefix('/guest')->controller(GuestController::class)->group(function () {
        Route::get('/list','index')->name('guests.index');
        Route::get('/add', 'addGuest')->name('guests.add');
        Route::post('/save', 'saveGuest')->name('guests.save');
        Route::get('/send/{guest}', 'sendGuest')->name('guests.send');
        Route::get('/send-all/{guest}', 'sendAllGuest')->name('guests.send.all');
        Route::get('/export', 'export')->name('guests.export');

    });


});


Route::get('/email', function(){
    return view('emails.invitacion');
});

Route::get('/invitados/{token}',[GuestController::class, 'confirmInvitation'])->name('guest.confirm.token');
