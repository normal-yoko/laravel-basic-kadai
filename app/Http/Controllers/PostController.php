<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    public function index () {
       //postsテーブルからすべてのデータを取得し、変数$postsに代入する
       $posts =DB::table('posts')->get();

        //変数$postsをposts/index.blade.phpファイルに渡す
        return view('posts.index', compact('posts'));
    }

    public function show ($id) {
        //postsテーブルから引数で受け取ったidのデータを取得し、変数$postに代入する
        $post = Post::find($id);
        //変数$postをposts/show.blade.phpファイルに渡す
        return view('posts.show',compact('post'));
    }

    public function create () {

       return view('posts.create');
//        return view('posts.create', compact('posts'));
    }

}
