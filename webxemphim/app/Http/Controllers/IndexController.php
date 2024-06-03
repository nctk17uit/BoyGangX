<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function phimle() {
        return view('phimle');

    }
    public function phimbo() {
        return view('phimbo');

    }
    public function profile() {
        return view('profile');

    }
}
