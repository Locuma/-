<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{

    protected $table = 'post';

    public function getAllPosts()
    {
        $allPostData = DB::table('post')
            ->leftJoin('users', 'post.user_id', '=', 'users.id')
            ->select('post.*', 'users.name')->get();
        return [
            'posts' => $allPostData,
        ];
    }

    public function getOnePost($postId, $userId)
    {
        $onePostData = DB::table('post')
            ->leftJoin('users', 'post.user_id', '=', 'users.id')
            ->select('post.*', 'users.name')
            ->where([
                ['users.id','=', $userId],
                ['post.id', '=', $postId]
            ])->first();
        //dd($onePostData);

        return [
            'onePost' => $onePostData,
        ];
    }
}
