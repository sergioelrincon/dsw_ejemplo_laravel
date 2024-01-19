<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

    public $products = [
        "1" => [
            "nombre"      => "tv",
            "descripción" => "Televisor Samsung",
            "url"         => "",
            "precio"      => "",
        ],
        "2" => [
            "nombre"      => "iPhone",
            "descripción" => "iPhone 15 Plus",
            "url"         => "",
            "precio"      => "",
        ],
        "3" => [
            "nombre"      => "chromecast",
            "descripción" => "Google TV",
            "url"         => "",
            "precio"      => "",
        ],
        "4" => [
            "nombre"      => "Glasses",
            "descripción" => "Multiópticas gafas",
            "url"         => "",
            "precio"      => "",
        ],
    ];

    /**
     * The index function returns a view with a list of products.
     *
     * @return a view called "product.index" and passing the variable "products" to the view.
     */
    public function index() {

        return view("product.index")->with("products", $this->products);
    }

    public function show(string $id) {

        return view("product.show")->with("",);
    }
}
