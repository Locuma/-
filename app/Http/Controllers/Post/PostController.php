<?php

namespace App\Http\Controllers\Post;

use App\Models;
use App\Http\Controllers\Controller;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'content.required' => 'A message is required',
            'userId.numeric' => 'Используй цифры',
        ];
    }

    public function getAllPosts()
    {
        $post = new Models\Post();
        $allPostData = $post->getAllPosts();
        return view('all_posts', [
            'posts' => $allPostData,
        ]);
    }

    public function createPost()
    {
        return view('create_post');
    }

    public function savePost(Request $userPostData)
    {

        $customMessages = ['min' => 'Минимальное количество символов для :attribute : 6',
            'required' => 'A message is required',
            'numeric' => 'Используй цифры'];

        $validatedData = $userPostData->validate([
            'article' => 'required|max:30|min:6|unique:post,article',
            'content' => 'required|max:300|min:6|',
        ], $customMessages);


        $article = $validatedData['article'];
        $content = $validatedData['content'];
        $userId = Auth::id();

        $postArray = [
            'article' => $article,
            'content' => $content,
            'user_id' => $userId,
        ];
        DB::table('post')->insert($postArray);
        return view('welcome');
    }

    public function currentPost($id)
    {
        $post = new Models\Post();
        $currentPostData = $post->getOnePost($id);
        var_dump($currentPostData);
        exit;
        //$article = $currentPostData['onePost']->article;
        //$creatorName = $currentPostData->name;
        //$content = $currentPostData->content;
        return view('currentPost', [
            'onePost' => $currentPostData,
        //    'article' => $article,
          //  'creatorName' => $creatorName,
            //'content' => $content,
        ]);

    }


}
