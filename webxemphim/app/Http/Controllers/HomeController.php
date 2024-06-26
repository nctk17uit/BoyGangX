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
        public function topUpBalance(Request $request)
        {
            $user = Auth::user();
            $amount = $request->input('amount');

            if ($amount > 0) {
                $user->money += $amount;
                $user->save();

                return response()->json(['success' => true]);
            }

            return response()->json(['success' => false]);
        }
    public function activateVipMode(Request $request)
    {
        $user = Auth::user();

        // Check if user has enough money
        if ($user->money >= 800) {
            $user->money -= 800;
            $user->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Not enough money']);
        }
    }
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
    public function watching($slug)
    {
        $movie = Movie::where('slug', $slug)->firstOrFail();
        return view('watchingpage', compact('movie'));
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
        $category = Category::orderBy('id','DESC')->get();
        $category_slug = Category::where('slug',$slug)->first();
        $movie = Movie::where('category_id', $category_slug->id)->paginate(40);
    	return view('category', compact('category','category_slug','movie'));
    }
    public function genre($slug){
        $genre = Genre::orderBy('id','DESC')->get();
        $genre_slug = Genre::where('slug',$slug)->first();
        $movie = Movie::where('genre_id', $genre_slug->id)->paginate(40);
    	return view('genre', compact('genre','genre_slug','movie'));
    }
    public function country($slug){
        $country = Country::orderBy('id','DESC')->get();
        $country_slug = Country::where('slug',$slug)->first();
        $movie = Movie::where('country_id', $country_slug->id)->paginate(40);
    	return view('country', compact('country','country_slug','movie'));
    }
    public function showHeader()
{
    $country = Country::all(); // Lấy tất cả dữ liệu từ bảng Country
    return view('layoutsuser.header', compact('country'));
}
}
