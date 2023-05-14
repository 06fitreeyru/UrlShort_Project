<?php

namespace App\Http\Controllers;

use App\Models\Url;
use App\Models\User;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    //

   public function indexUser(){

    $user = User::all();
    return view('indexUser',compact('user'));
   }
   public function UrlShort(){
    $URL = Url::all();
    return view('UrlShort',compact('URL'));
   }
}
