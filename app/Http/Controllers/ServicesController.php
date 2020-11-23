<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function showServices () {
        $services = [
            ['image'=>'/images/service1.jpg','name'=>'Odontoiatria', 'dentists' => 'Dott. Giovanni Paolillo', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/service2.jpg','name'=>'Implantologia', 'dentists'=>'Dott. Angelo Maggialetti, Dott. Simone Sapienza', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/service3.jpg','name'=>'Ortodonzia', 'dentists'=>'Dott. Simone Sapienza', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/service4.jpg','name'=>'Igiene e prevenzione', 'dentists' => 'Dr. Giovanni Paolillo, Dr.ssa Beatrice Grimaldi', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
        ];
    return view('servizi', compact('services'));
    }
}