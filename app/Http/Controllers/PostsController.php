<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Response;

class PostsController extends Controller
{
    public function showPosts(){

      $posts = Post::all();

      return view('posts', compact('posts'));

    }

    public function paginatedPosts(){
      $posts = Post::paginate(5);

      return view('paginatedPosts')->with('posts', $posts);
    }

    public function jsonPosts(){
      $posts = Post::paginate(5);
      $response = Response::json($posts);

      return $response;


    }
}
