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

    }