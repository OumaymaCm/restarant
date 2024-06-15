<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Category;

class WelcomeController extends Controller
{
    public function index(){
        $Specialty = Category::where('name', 'Specialty')->first();
        return view('welcome', compact('Specialty'));
    }

    public function thankyou(){
        return view('thankyou');
    }

}
