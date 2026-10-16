<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        return response()->json([
            'success'=>true,
            'message'=>'Productos obtenidos',
            'data'=>Product::with('category')->get()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=> 'required|string|max:255',
            'description'=> 'nullable|string',
            'price'=>'required|numeric|gt:0',
            'stock'=>'required|integer|min:0',
            'category_id'=>'required|exists:categories,id'
        ]);

        $product=Product::create($data);

        return response()->json([
            'success'=>true,
            'message'=> 'Producto creado correctamente',
            'data'=> $product->load('category')
        ],201);
    }

    

    public function show(Product $product)
    {
        return response()->json([
            'success'=>true,
            'message'=>'Producto obtenido',
            'data'=> $product->load('category')
        ],201);
    }

  
    public function update(Request $request, Product $product)
    {
        $data = $request->validate ([
            'name'=>'sometimes|required|string|max:255',
            'description'=>'nullable|string',
            'price' => 'sometimes|requiered|numeric|gt:0',
            'stock'=>'sometimes|required|integer|min:0',
            'category_id'=>'sometimes|required|exists:Categories,id'
        ]);

        $product->update($data);
        return response()->json([
            'success'=>true,
            'message'=>'producto actualizado',
            'data'=>$product->load('category')
        ]);
    }

   
    public function destroy(string $id)
    {
        $product->delete();

        return response()->json([
            'success'=>true,
            'message'=> 'Producto eliminado',
            'data'=>null
        ]);
    }
}
