<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{

    // Array asociativo con los productos de la tienda.
    public $products = [
        "1" => [
            "nombre"      => "tv",
            "descripción" => "Televisor Samsung",
            "url"         => "/img/game.png",
            "precio"      => "2999,00",
        ],
        "2" => [
            "nombre"      => "iPhone",
            "descripción" => "iPhone 15 Plus",
            "url"         => "/img/safe.png",
            "precio"      => "1239",
        ],
        "3" => [
            "nombre"      => "chromecast",
            "descripción" => "Google TV",
            "url"         => "/img/submarine.png",
            "precio"      => "69,99",
        ],
        "4" => [
            "nombre"      => "Glasses",
            "descripción" => "Multiópticas gafas",
            "url"         => "/img/game.png",
            "precio"      => "74,00",
        ],
    ];

    /**
     * La función de índice devuelve una vista con una lista de productos.
     *
     * @return la vista índice de los productos a la cual se le pasa el array productos para que los muestre.
     */
    public function index()
    {
        return view("product.index")->with("products", $this->products);
    }

    /**
     * Recupera un producto específico de una matriz y lo pasa a una vista para su visualización.
     *
     * @param string $id El identificador del producto que se mostrará.
     *
     * @return una vista llamada show que recibe el producto de la petición para que lo serialice.
     */
    public function show(string $id)
    {
        return view("product.show")->with("product", $this->products[$id]);
    }
}
