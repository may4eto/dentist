<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactReceived;
use App\Mail\BookingConfirmed;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactUs ($name=null) {
        $team = [
            ['image'=>'/images/dentist1.jpg','title'=>'Dott.','name'=>'Simone', 'surname'=>'Sapienza', 'services' => 'ortodonzia', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/dentist2.jpg','title'=>'Dott.','name'=>'Angelo', 'surname'=>'Maggialetti', 'services' => 'implantologia', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/dentist3.jpg','title'=>'Dott.','name'=>'Giovanni', 'surname'=>'Paolillo', 'services' => 'odontoiatria', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/dentist4.jpg','title'=>'Dr.ssa','name'=>'Beatrice', 'surname'=>'Grimaldi', 'services' => 'igiene e prevenzione', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
        ];
        return view('contatti', compact('name','team'));
    }

    public function contactSave (Request $request) {
        $dentist = $request -> input('dentist');
        $date = $request -> input('date');
        $hour = $request -> input('hour');
        $name = $request -> input('name');
        $email = $request -> input('email');
        $message = $request -> input('message');
        $check = $request -> input('check');
        $contact = compact('dentist', 'date', 'hour', 'name', 'email', 'message', 'check');

        Mail::to('info@sapienzadentista.it')->send (new ContactReceived($contact));
        Mail::to($email)->send (new BookingConfirmed($contact));

        return redirect(route('grazie'));
    }

    public function thankYou () {
        return view('grazie');
    }
}
