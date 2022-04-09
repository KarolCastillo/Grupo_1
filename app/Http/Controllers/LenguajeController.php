<?php

namespace App\Http\Controllers;

use App\Models\Lenguaje;
use Illuminate\Http\Request;

class LenguajeController extends Controller
{

    public function create(){

        return view('programacion.agregar');
    }


    public function store(Request $request)
    {
        $validation = $this->validate($request, [
            'id'=>'required',
            'descripcion_lenguaje' => 'required',
            'definicion'=>'required',

        ]);

        lenguaje::create([

            'id'=> $validation['id'],
            'descripcion_lenguaje'=>$validation['descripcion_lenguaje'],
            'definicion'=> $validation['definicion'],

        ]);

        return redirect('/lenguaje');


    }


    public function index(){
        $language['lenguajes'] = Lenguaje::paginate(7);

        return view('programacion.listar', $language);
    }


    public function edit($id){
        $lenguajes = Lenguaje::findOrFail($id);

        return view('programacion.modificar', compact( 'lenguajes'));
    }


    public function update(Request $request, $id){
        $dataLeng = request()->except((['_token','_method']));
        Lenguaje::where('id', '=', $id)->update($dataLeng);

        return redirect('/lenguaje');
    }


    public function destroy($id){
        Lenguaje::destroy($id);

        return back()->with('eliminar', 'ok');
    }
}
