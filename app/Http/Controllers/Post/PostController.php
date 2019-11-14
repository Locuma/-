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

 public function testo(Request $itComes){
     $firstOne = $itComes->input('abra');
     $second = $itComes->input('kadabra');
     $overpowered = $itComes->input('alakazam');
        $pokemonArray = [
            'article' => $firstOne,
            'content' => $second,
            'user_id' => $overpowered
        ];
       // echo $firstOne;
     DB::table('post')->insert($pokemonArray);
     return view('welcome');
 }



}