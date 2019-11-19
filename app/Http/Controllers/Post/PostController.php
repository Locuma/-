<?php

namespace App\Http\Controllers\Post;

use App\Models;
use App\Http\Controllers\Controller;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Validation\ValidatesRequests;
class PostController extends Controller
{

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'article.min' => 'Минимальное количество символов: 6',
            'content.required'  => 'A message is required',
            'userId.numeric'  => 'Используй цифры',
        ];
    }

 public function test(){
     $allPostData = new Models\Post();
     return view('test',[
         'mamals' => $allPostData->getAllPosts(),
     ]);
 }

 public function createPost(Request $userPostData){

        $customMessages = ['min' => 'Минимальное количество символов для :attribute : 6',
            'required'  => 'A message is required',
            'numeric'  => 'Используй цифры'];

     $validatedData = $userPostData->validate([
         'article' => 'required|max:30|min:6|unique:post,article',
         'content' => 'required|max:300|min:6|',
         'userId' => 'required|numeric|max:300|min:1|unique:post,user_id'
     ], $customMessages);


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




}