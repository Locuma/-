<?php

namespace App\Http\Controllers\Post;


use App\Http\Controllers\Controller;
use App;
class PostController extends Controller
{
 public function test(){
     $allPostData = App\Models\Post::all();
     return view('test',[
         'mamal' => $allPostData,
     ]);
 }
}