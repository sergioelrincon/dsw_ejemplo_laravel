<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] =  "List of products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }

    public function show($id){
        $viewData = [];

        $product = Product::find($id);
        $viewData["title"] = $product["name"]." - Online Store";
        $viewData["subtitle"] =  $product["name"]." - Product information";
        $viewData["product"] = $product;
        
        return view('product.show')->with("viewData", $viewData);
    }

    public function almacenarDatosConArchivo(Request $request){
        if ($request->hasFile('index.blade.php')) {
            $idProducto = 56; // Reemplaza esto con la lógica para obtener el id del producto
            $nombreOriginal = $request->file('index.blade.php')->getClientOriginalName();
            $extension = $request->file('index.blade.php')->extension();
            $nombreArchivo = $idProducto . '_' . pathinfo($nombreOriginal, PATHINFO_FILENAME) . '.' . $extension;
        } else {
            echo"No se ha mandado ningún archivo/imagen de producto";
        }
        $rutaTemporal = $request->file('index.blade.php')->getRealPath();
        Storage::disk('public')->put($nombreArchivo, file_get_contents($rutaTemporal));
    }
    
}