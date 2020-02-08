<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function testResponse(){
      return response(['post_status'=>'created'],201);
    }
}
