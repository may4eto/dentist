<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function showTeam () {
        $team = [
            ['image'=>'/images/dentist1.jpg','title'=>'Dott.','name'=>'Simone', 'surname'=>'Sapienza', 'services' => 'ortodonzia, implantologia, protesi', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/dentist2.jpg','title'=>'Dott.','name'=>'Angelo', 'surname'=>'Maggialetti', 'services' => 'implantologia, protesi', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/dentist3.jpg','title'=>'Dott.','name'=>'Giovanni', 'surname'=>'Paolillo', 'services' => 'odontoiatria, igiene e prevenzione', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
            ['image'=>'/images/dentist4.jpg','title'=>'Dr.ssa','name'=>'Beatrice', 'surname'=>'Grimaldi', 'services' => 'sbiancamento dentale, igiene e prevenzione', 'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat accusantium sapiente nemo tempora repellat voluptatum alias? Enim placeat quae minima voluptates dolorem quia dolor velit quidem excepturi molestiae! Enim, aut.'],
        ];
    return view('team', compact('team'));
    }
}
