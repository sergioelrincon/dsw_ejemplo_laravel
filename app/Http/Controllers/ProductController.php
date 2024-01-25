<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * La función de índice devuelve una vista con una lista de productos.
     *
     * @return la vista índice de los productos a la cual se le pasa el array productos para que los muestre.
     */
    public function index()
    {
        $products = Product::all();
        return view("product.index")->with("products", $products);
    }

    /**
     * Recupera un producto específico de la base de datos y lo pasa a una vista para su visualización.
     *
     * @param int $id El identificador del producto que se mostrará.
     *
     * @return una vista llamada show que recibe el producto de la base de datos para que lo serialice.
     */
    public function show(int $id)
    {
        $product = Product::find($id);
        return view("product.show")->with("product", $product);
    }
}
