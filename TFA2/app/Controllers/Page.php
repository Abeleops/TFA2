<?php 

namespace App\Controllers;

Class Page extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
}