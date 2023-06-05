<?php

namespace App\Http\Controllers;
use App\Models\Skill;
use App\Models\Project;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $skills=Skill::all();
        $projects=Project::all();
        return view('welcome',compact('skills','projects'));
    }
}
