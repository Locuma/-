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

    //TODO: must pass post Id and user Id
    public function getOnePost($id)
    {
        $onePostData = DB::table('post')
            ->leftJoin('users', 'post.user_id', '=', 'users.id')
            ->select('post.*', 'users.name')
            ->where(function($query){
                $query->where ('users.id','=', 1)
                      ->where ('post.id', '=', 10);
            })->get();

        $onePostData = DB::table('post')
            ->leftJoin('users', 'post.user_id', '=', 'users.id')
            ->select('post.*', 'users.name')
            ->where([
                ['users.id','=', $id],
                ['post.id', '=', 10]
            ])->get();

        return [
            'onePost' => $onePostData,
        ];
    }
}
