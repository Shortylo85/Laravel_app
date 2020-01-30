<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function home(){
      return view('home');
    }

    public function about(){
      return view('about');
    }

    public function contact(){
      return view('contact');
    }

    public function imageImport(Request $request){

      if($request->hasFile('image')){
        $image = $request->file('image');
        $image_name = $image->getClientOriginalName();
        $file_name = pathinfo($image_name, PATHINFO_FILENAME);
        $image->move(public_path()."/images/", $file_name);
        return redirect('home')->with("status","Your images with name ". $file_name." successfully created");
      }else{
        return "You have no choose image";
      }

    }
}
