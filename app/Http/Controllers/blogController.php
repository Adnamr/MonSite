<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Blog;

use App\Commantaire;

class blogController extends Controller
{
   public function index() {
  

   	$chercher=\Request::get('search');
   

   	$blogs=Blog::where('titre','like','%'.$chercher.'%')->paginate(1);
   	return view('blog',compact('blogs'));
   }

   public function web(){

   			$blogs=Blog::where('categorie','like','web')->paginate(2);
   	      return view('blog',compact('blogs'));
   }
     public function Descktop(){

            $blogs=Blog::where('categorie','like','Descktop')->paginate(2);
            return view('blog',compact('blogs'));
   }
    public function Mobile(){

            $blogs=Blog::where('categorie','like','Mobile')->paginate(2);
            return view('blog',compact('blogs'));
   }
     public function NonClasse(){

            $blogs=Blog::where('categorie','like','NonClasse')->paginate(2);
            return view('blog',compact('blogs'));
   }

   public function show($id){
   
   }



}
