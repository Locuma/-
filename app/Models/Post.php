<?php
namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'post';

    public function getAllPosts(){
        $allPostData = $this::all();
        return $allPostData;
    }
}