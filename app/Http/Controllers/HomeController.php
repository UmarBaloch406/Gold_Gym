<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function testimonial()
    {
        return view('Testimonial');
    }

    public function classes()
    {
        return view('Classes');
    }
    public function membership()
    {
        return view('Blog_detail');
    }
    public function about()
    {
        return view('About');
    }
    public function contact()
    {
        return view('Contact');
    }
    public function home()
    {
        return view('Home');
    }

    public function show()
    {
        $trainers = Trainer::all();
        return view('Trainers' , compact('trainers'));
    }
}
