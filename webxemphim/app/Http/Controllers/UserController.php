<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class UserController extends Controller
{
    public function __construct()
        {
            $this->middleware(['role:admin|owner']);
            $this->middleware('auth');
        }
    public function trangxemphim() {
        return view ('trangxemphim') ;
    }
}
