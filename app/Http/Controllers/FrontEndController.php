<?php


namespace App\Http\Controllers;


class FrontEndController extends Controller{
    //put your code here
    public function index(){
        
        
        return view('pages/home');
    }
}
