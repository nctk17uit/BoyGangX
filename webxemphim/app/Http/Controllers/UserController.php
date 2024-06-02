<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class UserController extends Controller
{
    public function homeUser() {
        // Logic lấy dữ liệu hoặc xử lý khác tại đây
        $category = Category::orderBy('id', 'DESC')->where('status', 1)->get();
        $category_home = Category::with('movie')->orderBy('id', 'DESC')->where('status', 1)->get();
        return view('homeuser', compact('category', 'category_home'));
    }
    public function trangxemphim() {
        return view ('trangxemphim') ;
    }
}
