<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //
    public function getCategoria(){
        return response()->json(Categoria::all(),200);
    }

    // Buscar mediante id:
    public function getCategoriaid($id){
        $categoria = Categoria::find($id);
        if(is_null($categoria)){
            return response()->json(["message"=>"Registro no encontrado"], 404);
        }
        return response()->json($categoria,200);
    }     

    // Insertar nueva categoria a la base de datos:
    public function insertCategoria(Request $request){
        $categoria = Categoria::create($request->all());
        if(is_null($categoria)){
            return response()->json(["message"=>"Error al registar"], 404);
        }
        return response()->json($categoria,200);
    }
    
    // Update:
    public function updateCategoria(Request $request, $id){
        $categoria = Categoria::find($id);
        if(is_null($categoria)){
            return response()->json(["message"=>"Registro no encontrado"], 404);
        }
        $categoria->update($request->all());
        return response()->json($categoria,200);
    }

    // Delete:
    public function deleteCategoria($id){
        $categoria = Categoria::find($id);
        if(is_null($categoria)){
            return response()->json(["message"=>"Registro no encontrado"], 404);
        }
        $categoria->delete();
        return response()->json(["message"=>"Registro eliminado"], 200);
    }





}
