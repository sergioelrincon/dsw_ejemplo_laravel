<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Productos - Tienda online";
        $viewData["subtitle"] =  "Lista de productos";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id)
    {
        $viewData = [];

        $product = Product::find($id);
        $viewData["title"] = $product["name"]." - Tienda online";
        $viewData["subtitle"] =  $product["name"]." - Información del producto";
        $viewData["product"] = $product;
        
        return view('product.show')->with("viewData", $viewData);
    }
}
