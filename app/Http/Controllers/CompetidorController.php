<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competidor;

class CompetidorController extends Controller
{
    
    public function index(){    //GET api/coche
        return response()->json(Competidor::all(), 200);
    }

    
   public function store(Request $request){ //POST api/coche + datos JSON
        try{
             $objeto = Competidor::create($request->all());
             return response()->json($objeto->id, 200);
        }catch(\Exception $e){
            return response()->json($objeto->id, 200);
        }
    }

    
    public function show($id){ //GET api/coche/id
        $competidor = Competidor::find($id);
        if($competidor !=null){
            $paquetes = $competidor->compra;
        }
        return response()->json($competidor, 200);
    }

    
    public function update(Request $request, $id){ //PUT api/coche/id
        try{
            $competidor = Competidor::find($id);
            $resultado = $competidor->update($request->all());
            return response()->json($resultado = true, 200);
            
        }catch(\Exception $e){
            return response()->json(["resultado"=>false], 200);
        }
    }

    
    public function destroy($id){ //DELETE api/coche/id
    
        try{
            $resultado = Competidor::destroy($id);
        }catch(\Exception $e){
            $resultado = -1;
        }
        return response()->json($resultado, 200);  
        
        // try{
        //     $coche = Coche::find($id);
        //     if($coche != null){
        //         $resultado = $coche->delete();
        //         return response()->json(["resultado"=>$resultado], 200);    
        //     }
            
        // }catch(\Exception $e){
                
        // }
        // return response()->json(["resultado"=>false], 200);
    }
}
