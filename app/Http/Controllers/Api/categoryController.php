<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => 'categorias obtenidas',
            'data' => category::all()
        ]);
    }

    public function store(Request $category)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string'
        ]);
        $category = Category::create($data);

        return response()->json([
            'success'=>true,
            'message'=>'categoria creada correctamente',
            'data'=>$category
        ], 201);
    }


    public function show(Category $category)
    {
        return response()->json([
            'success'=>true,
            'message'=>'Categoria obtenida correctamente',
            'data'=>$category
        ]);
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name'=>'sometimes|required|string|max:255',
            'description'=>'nullable|string'
        ]);

        $category->update($data);

        return response()->json([
            'succes'=>true,
            'message'=> 'categoria actualizada correctamente',
            'data'=>$category
        ]);
    }

    public function destroy(string $category)
    {
        if ($category->products()->exists()){
            return response()->json([
                'success'=>false,
                'message'=>'No se puede eliminar una categoria con productos relacionados',
            ],409);
        }
        $category->delete();

        return response()->json([
            'success' => true,
            'message'=>'Categoria eliminada correctamente',
            'data'=>null
        ]);
    }
}
