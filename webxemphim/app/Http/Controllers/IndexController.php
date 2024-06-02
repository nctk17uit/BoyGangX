<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Genre;
use App\Models\Country;
use App\Models\Movie;
use App\Models\Episode;
use DB;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.home'); // trả về view adminhome.blade.php
    }
    public function trangchu()
    {
        return view('layout'); //chu
    }
    public function homengdung()
    {
        return view('homengdung'); //chu
    }
    public function home() {
        $category = Category::orderBy('id', 'DESC')->where('status',1)->get();
         $category_home = Category::with('movie')->orderBy('id','DESC')->where('status',1)->get();
        return view('layout', compact('category','category_home'));
    }
    
    public function category() {
        return view('pages.category');
    }
    public function genre() {
        return view('pages.genre');
    }
    public function country() {
        return view('pages.country');
    }
    public function movie() {
        return view('pages.movie');
    }
    public function watch() {
        return view('pages.watch');
    }
    public function episode() {
        return view('pages.episode');
    }
}
