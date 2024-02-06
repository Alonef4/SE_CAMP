<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar = "Hello World!";

    function __construct() //MyController
    {

    }

    public function index(){
        // $data = ['val_a' => 'Hello World!'];
        // $data['val_b'] = "Laravel";
        // return view('myfolder.mypage',$data);
        // echo $this->myvar;
        return view('home');
    }

    public function store(Request $req){
        $data['myinput'] = $req->input('myinput');
        return view('myroute', $data);
    }
}
