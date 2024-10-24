<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;
use App\Models\Categoria;
use Carbon\Carbon;
use Iluminate\Support\Str;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galerias = Galeria::all();
        return view('galerias.index', compact('galerias'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categorias = Categoria::all();
        return view('galerias.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $galeria = Galeria::create($request->all());

        $image = $request->file('image');
			$slug = Str::slug($request->nombre);
			if (isset($image))
			{
				$currentDate = Carbon::now()->toDateString();
				$imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

				if (!file_exists('uploads/personas/estudiantes'))
				{
					mkdir('uploads/personas/estudiantes',0777,true);
				}
				$image->move('uploads/personas/estudiantes',$imagename);
			}else{
				$imagename = "";
			}
		return redirect()->route('galerias.index')->with('successMsg','El registro se guardó exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function cambioestadogaleria(Request $request)
    {
        try {
            $estado = $request->input('estado'); // 1 o 0
            $id = $request->input('id'); // ID del elemento
    
            // Realiza la lógica para cambiar el estado (e.g., actualizar en la base de datos)
            $galeria = Filosofia::find($id);
            if ($galeria) {
                $galeria->estado = $estado;
                $galeria->save();
                return response()->json(['success' => true, 'message' => 'Estado actualizado correctamente']);
            } else {
                return response()->json(['success' => false, 'message' => 'Elemento no encontrado']);
            }
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Error al cambiar el estado', 'error' => $e->getMessage()]);
        }
    }
}
