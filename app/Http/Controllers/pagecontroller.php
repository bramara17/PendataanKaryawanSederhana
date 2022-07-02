<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class pagecontroller extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function features()
    {
        return view('features',['nama' => 'Brambudi Rahman']);
    }
    public function pricing()
    {
        $pricing = Pricing::all();
        return view('pricing');
    }
    public function mahasiswa()
    {

    }
}
