<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\criptomoneda;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Lenguaje;

class CriptomonedaController extends Controller
{
    public function index()
    {

       $criptomonedas = DB::table('criptomoneda')
           ->join('lenguaje_programacion', 'criptomoneda.lenguaje_id', '=', 'lenguaje_programacion.id')
           ->select('criptomoneda.*', 'lenguaje_programacion.descripcion_lenguaje')
            ->paginate(3);


        return view('archivo.index', compact('criptomonedas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $lenguaje = Lenguaje::all();
        return view('archivo.crear', compact('lenguaje'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              $validation = $this->validate($request, [
                'nombre' => 'required|string|max:35',
                'precio' => 'required',
                'descripcion'=>'required|string|max:255',
               'lenguaje' => 'required'
            ]);




                 criptomoneda::create([

                'nombre'=>$validation['nombre'],
                'precio'=>$validation['precio'],
                'descripcion'=> $validation['descripcion'],
               'lenguaje_id'=> $validation['lenguaje'],
   ]);

        return redirect('/');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cript = criptomoneda::findOrFail($id);
        $lenguaje= Lenguaje::all();
        return view('archivo.editar', compact('cript', 'lenguaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $datacriptomoneda = request()->except((['_token','_method']));



        criptomoneda::where('id', '=', $id)->update($datacriptomoneda);

        return redirect('/');
    }


//
//


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $criptomoneda = criptomoneda::findOrFail($id);



        $criptomoneda->delete();



        return back();
    }
}
