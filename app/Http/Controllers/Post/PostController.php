<?php

namespace App\Http\Controllers\Post;

use App\Models;
use App\Http\Controllers\Controller;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
 public function test(){
     $allPostData = new Models\Post();
     return view('test',[
         'mamals' => $allPostData->getAllPosts(),
     ]);
 }

 public function createPost(Request $userPostData){
     $validatedData = $userPostData->validate([
         'article' => 'required|max:30|min:6|unique:post,article',
         'content' => 'required|max:300|min:6|',
         'userId' => 'required|numeric|max:300|min:6|unique:post,user_id'
     ]);

     $article = $validatedData['article'];
     $content = $validatedData['content'];
     $userId = $validatedData['userId'];
        $postArray = [
            'article' => $article,
            'content' => $content,
            'user_id' => $userId
        ];
     DB::table('post')->insert($postArray);
     return view('welcome');
 }

 public function forFun (){
     echo 'hello world';
 }



}