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
use App\Models\Genre;
use App\Models\Country;
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
        // $user1 -> assignRole('owner');
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
        $category = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $category_home = Category::with('movie')->orderBy('id', 'DESC')->where('status', 1)->get();
        return view('phimle', compact('category', 'category_home'));

    }
    public function phimbo() {
        $category = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $category_home = Category::with('movie')->orderBy('id', 'DESC')->where('status', 1)->get();
        return view('phimbo', compact('category', 'category_home'));

    }
    public function profile() {
        return view('profile');
    }
    public function show()
    {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }
    public function home() {
        $category = Category::orderBy('id', 'DESC')->where('status',1)->get();
        $category_home = Category::with('movie')->orderBy('id','DESC')->where('status',1)->get();
        return view('trangxemphim1', compact('category','category_home'));
    }
    public function trangxemphim2() {
        return view ('watchingpage') ;
    }
    public function category($slug){
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $cate_slug = Category::where('slug',$slug)->first();
        $movie = Movie::where('category_id',$cate_slug->id)->paginate(40);
    	return view('pages.category', compact('category','cate_slug','movie'));
    }
    public function genre($slug){
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();

        $genre_slug = Genre::where('slug',$slug)->first();
        $movie = Movie::where('genre_id',$genre_slug->id)->paginate(40);
    	return view('pages.genre', compact('category','genre','country','genre_slug','movie'));
    }
    public function country($slug){
        $category = Category::orderBy('position','ASC')->where('status',1)->get();
        $genre = Genre::orderBy('id','DESC')->get();
        $country = Country::orderBy('id','DESC')->get();

        $country_slug = Country::where('slug',$slug)->first();
        $movie = Movie::where('country_id',$country_slug->id)->paginate(40);
    	return view('pages.country', compact('category','genre','country','country_slug','movie'));
    }
    public function showHeader()
{
    $country = Country::all(); // Lấy tất cả dữ liệu từ bảng Country
    return view('layoutsuser.header', compact('country'));
}
}
