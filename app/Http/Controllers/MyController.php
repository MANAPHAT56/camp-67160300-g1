<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    // Constructor
    // MyController()
    function __construct(){

    }

    function index(){
        return view('myview.index');
    }

    function info(Request $req){
        return view('myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myview.calculate', $data);
    }
 function submitWorkshop(Request $req)
{
    $data = [
        'fname'     => $req->fname,
        'lname'     => $req->lname,
        'birthdate' => $req->birthdate,
        'age'       => $req->age,
        'gender'    => $req->gender,
        'address'   => $req->address,
        'color'     => $req->color,
        'music'     => $req->music,
        'consent'   => $req->consent,
    ];

    // handle image
    if ($req->hasFile('photo')) {
        $data['photo'] = $req->file('photo')->store('photos', 'public');
    }

    return view('myview.result', $data);
}
}
