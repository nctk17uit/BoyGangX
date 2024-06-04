<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie ;
use App\Models\Category ;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
        {
            $this->middleware(['role:admin|owner']);
            $this->middleware('auth');
        }
    
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::pluck('title','id');
        $list = Movie::with('category')->orderBy('id','DESC') -> get();
        return view('admincp.movie.form', compact('list','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'status' => 'required|boolean',
        'category_id' => 'required|integer|exists:categories,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $movie = new Movie();
    $movie->title = $data['title'];
    $movie->description = $data['description'];
    $movie->status = $data['status'];
    $movie->category_id = $data['category_id'];

    // Thêm hình ảnh
    $get_image = $request->file('image');
   
    if ($get_image) {
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
        $new_image = $name_image . rand(0, 9999) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move('uploads/movie', $new_image);
        $movie->image = $new_image;
    }

    $movie->save();
    return redirect()->back();
}


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::pluck('title', 'id');
        $list = Movie::with('category')->orderBy('id','DESC') -> get();
        $movie = Movie::find($id);
        return view('admincp.movie.form', compact('list', 'category', 'movie'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $movie = Movie::find ($id);
        $movie->title = $data['title'];
        $movie->description = $data['description'];
        $movie->status = $data['status'];
        $movie->category_id = $data['category_id'];
    
        // Thêm hình ảnh
        $get_image = $request->file('image');
       
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = pathinfo($get_name_image, PATHINFO_FILENAME);
            $new_image = $name_image . rand(0, 9999) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('uploads/movie', $new_image);
            $movie->image = $new_image;
        }
    
        $movie->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $movie = Movie::find($id);
    if ($movie) {
        if (!empty($movie->image)) {
            $imagePath = public_path('uploads/movie/' . $movie->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $movie->delete();
        return redirect()->back()->with('status', 'Movie deleted successfully!');
    } else {
        return redirect()->back()->with('error', 'Movie not found!');
    }
}
    
}
