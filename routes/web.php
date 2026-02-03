<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'Dinner&Coffee',]);
});

Route::post('/rsvp', [RsvpController::class, 'store'])->name('rsvp.store');
Route::get('/thank-you', [RsvpController::class, 'thankYou'])->name('rsvp.thankyou');
Route::get('/rsvps', [RsvpController::class, 'index'])->name('rsvp.index');
Route::post('/rsvps/login', [RsvpController::class, 'login'])->name('rsvp.login');
Route::get('/favicon.ico', fn () => response('', 204));
