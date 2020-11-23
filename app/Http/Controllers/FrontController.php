<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function showIndex () {
        $team = [
            ['image'=>'/images/dentist1.jpg','title'=>'Dott.','name'=>'Simone', 'surname'=>'Sapienza', 'services' => 'ortodonzia', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/dentist2.jpg','title'=>'Dott.','name'=>'Angelo', 'surname'=>'Maggialetti', 'services' => 'implantologia', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/dentist3.jpg','title'=>'Dott.','name'=>'Giovanni', 'surname'=>'Paolillo', 'services' => 'odontoiatria', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/dentist4.jpg','title'=>'Dr.ssa','name'=>'Beatrice', 'surname'=>'Grimaldi', 'services' => 'igiene e prevenzione', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
        ];
        $services = [
            ['image'=>'/images/service1.jpg','name'=>'Odontoiatria', 'dentists' => 'Dott. Giovanni Paolillo', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/service2.jpg','name'=>'Implantologia', 'dentists'=>'Dott. Angelo Maggialetti', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/service3.jpg','name'=>'Ortodonzia', 'dentists'=>'Dott. Simone Sapienza', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/service4.jpg','name'=>'Igiene e prevenzione', 'dentists' => 'Dr.ssa Beatrice Grimaldi', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
        ];
        return view ('index', compact('team','services'));
    }
}
