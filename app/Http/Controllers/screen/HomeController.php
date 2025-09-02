<?php

namespace App\Http\Controllers\screen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminData;
use App\Models\AdminAbout;
use App\Models\AdminSkill;

class HomeController extends Controller
{
    public function HomePage(){
        $admindata = AdminData::first();  
        $aboutdata = AdminAbout::first(); 
        $adminskills = AdminSkill::all(); 
        return view('screen.index', compact('admindata', 'aboutdata', 'adminskills' ));
    }

}
