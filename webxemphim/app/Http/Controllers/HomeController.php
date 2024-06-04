<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//Controller trang profile
use Illuminate\Support\Facades\Auth;
//
//Controller phân quyền
use Hash;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Session;
use App\Models\Movie ;
use App\Models\Category ;
//
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $role = Role::create(['name' => 'ok']);
        // $user1= User::find (1);
        // $user1 -> assignRole('admin');
        // $user1= User::find (5);
        // $user1 -> assignRole('owner');
        // $user1= User::find (7);
        // $user1 -> assignRole('owner');
        // $user1= User::find (8);
        // $user1 -> assignRole('admin');
        return view('home');
    }
    public function index2()
    {
        $category = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $category_home = Category::with('movie')->orderBy('id', 'DESC')->where('status', 1)->get();
        return view('home', compact('category', 'category_home'));
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $movies = Movie::where('title', 'LIKE', "%$query%")->paginate(10); // Phân trang với 10 phần tử mỗi trang
        return view('search', compact('movies', 'query'));
    }
    public function phimle() {
        return view('phimle');

    }
    public function phimbo() {
        return view('phimbo');

    }
    public function profile() {
        return view('profile');
    }
    public function show()
    {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }
}
