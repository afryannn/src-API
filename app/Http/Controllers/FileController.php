<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
  public function country()
  {
     return response()->download(public_path('kennedy.jpg'),'User Image');
  }
  public function Save(Request $req)
  {
    //  $filename = "User_image.jpg";
    //  $path = $req->file('photo')->move(pubic_path("/"),$filename);
    //  $url = url('/'.$filename);
     return response()->json(200);;
    }
}
