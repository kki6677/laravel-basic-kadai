<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    
    public function index() {
        // productsテーブルからすべてのデータを取得し、変数$productsに代入する
        $posts = DB::table('posts')->get();

        return view('posts/index', compact('posts'));
    }
}
