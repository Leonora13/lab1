<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  

    public $url=["about"=>"./about", "contact"=>"./contact"];
    public function index()
    {
        $chars = ['+', '-', '(', ')'];
        return view('home',["about"=>$this->url['about'], "contact"=>$this->url['contact'], "text"=>substr($_GET['text'], 0, 160), "phone"=>str_replace($chars, '', $_GET['phone'])]);
    }

    public function about()
    {
        $info="Здесь находится информация о магазине";
        return view('about',["information"=>$info]);
    }   

    public function contact()
    {
        return view('contact');
    }
}
