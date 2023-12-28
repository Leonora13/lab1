<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

    public function index(){
    
        return view('products', ['products'=>Product::all()]);
    }

    public function create(){
        return view('create_products');
    }

    public function store(){
        $name = $_GET['name'];
        $price = $_GET['price'];
        $description = $_GET['description'];

        Product::create(['name'=>$name, 'price'=>$price, 'description'=>$description]);
        
        return $this->index();
    }
}
