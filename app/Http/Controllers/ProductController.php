<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class ProductController extends Controller
    {
        public function productos() {
            $viewData = [];
            $viewData["title"] = "Acerca de - Tienda Online";
            $viewData["subtitle"] =  "Acerca de";
            $viewData["description"] =  "Esta es la página acerca de ...";
            $viewData["author"] = "Desarrollado por: DSW";

            return view("home.about")->with("viewData", $viewData);
        }

        public function __construct(){
            $this->products = [
                1 => ['name' => 'TV', 'description' => 'Best Tv', 'image' => '/public/img/game.png', 'price' => 1.000],
                2 => ['name' => 'iPhone', 'description' => 'Best iPhone', 'image' => '/public/img/safe.png', 'price' => 2.500],
                3 => ['name' => 'Chromecast', 'description' => 'Best Chromecast', 'image' => '/public/img/submarine.png', 'price' => 100.000],
                4 => ['name' => 'Glasses', 'description' => 'Best Glasses', 'image' => '/public/img/game.png', 'price' => 888],
            ];
        }

        public function index(){
            return view('product.index', ['products' => $this->products]);
        }

        public function show($id){
            $product = $this->products[$id];
            return view('product.show', ['product' => $product]);
        }

    }