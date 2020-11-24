<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contactUs () {
        return view('contatti');
    }

    function contactSave (Request $request) {
        $dentist = $request -> input('dentist');
        $date = $request -> input('date');
        $hour = $request -> input('hour');
        $name = $request -> input('name');
        $email = $request -> input('email');
        $message = $request -> input('message');
        $check = $request -> input('check');
        $contact = compact('dentist', 'date', 'hour', 'name', 'email', 'message', 'check');
        dd($contact);
    }
}
