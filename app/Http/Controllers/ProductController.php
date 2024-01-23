<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public static $products = [
        ["id"=>"1", "name"=>"TV", "description"=>"La mejor TV", "image" => "game.png", "price"=>"1000"],
        ["id"=>"2", "name"=>"iPhone", "description"=>"El mejor móvil", "image" => "safe.png", "price"=>"999"],
        ["id"=>"3", "name"=>"Playstation 5", "description"=>"La mejor consola", "image" => "submarine.png", "price"=>"30"],
        ["id"=>"4", "name"=>"Portátil gaming", "description"=>"El mejor portátil", "image" => "game.png", "price"=>"100"]
    ];


    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = ProductController::$products;

        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];
        $product = ProductController::$products[$id-1];

        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        
        return view('product.show')->with("viewData", $viewData);
    }
}
