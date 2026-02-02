<?php

namespace App\Http\Controllers;

use App\Models\Rsvp;
use Illuminate\Http\Request;

class RsvpController extends Controller
{
    public function index(Request $request)
    {
        if (! $request->session()->get('rsvp_admin')) {
            return view('rsvps-login');
        }

        $rsvps = Rsvp::latest()->get();

        return view('rsvps', [
            'rsvps' => $rsvps,
        ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'code' => ['required'],
        ]);

        if ($request->input('code') !== '0821') {
            return back()->withErrors(['code' => 'Invalid code.']);
        }

        $request->session()->put('rsvp_admin', true);

        return redirect()->route('rsvp.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'answer' => ['required', 'in:yes,no'],
        ]);

        Rsvp::create([
            'answer' => $data['answer'],
            'user_agent' => $request->userAgent(),
            'ip_address' => $request->ip(),
        ]);

        return redirect()->route('rsvp.thankyou');
    }

    public function thankYou()
    {
        return view('thank-you');
    }
}
