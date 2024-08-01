<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index(){
    $products = "Products list form";
      return view('products.index',["products"=>$products]);
  }
}
