<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:admin|owner']);
        $this->middleware('auth');
    }
    public function admincp()
    {
        return view('admin-cp');
    }
}
