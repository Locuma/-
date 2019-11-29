<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{

    protected $table = 'post';

    public function getAllPosts(){
        $allPostData = DB::table('post')
                           ->join('users','post.user_id', '=','post.user_id')
                           ->select('post.*', 'users.name')->get();
        return [
            'posts' => $allPostData,
        ];


    }
}
