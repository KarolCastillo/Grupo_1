@extends('layouts.base')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-5" > FORMULARIO MODIFICAR LENGUAJE PROGRAMACION </h2>

                <form action="{{ url ('/modifi', $lenguajes->id) }}" method="POST" >
                    @csrf
                    @method('PATCH')
                    <div class="form-group font-italic  ">
                        <label for="inputEmail4">NOMBRE</label>
                        <input type="text" name="descripcion_lenguaje" value="{{ $lenguajes->descripcion_lenguaje }}" class="form-control border border-success">
                    </div>

                    <div class="form-group font-italic">
                        <label for="inputAddress">DEFINICION</label>
                        <input type="text" name="definicion" value="{{ $lenguajes->definicion }}" class="form-control border border-success" >
                    </div>


                    <button type="submit" class="btn btn-primary btn-lg active mb-4 col-2 float-right border border-info "> GUARDAR </button>
                    <a type="button " href="{{ url('/lenguaje')}}" class="btn btn-danger btn-lg active mb-4 col-2 float-right mr-3">CANCELAR </a>
                </form>


            </div>

        </div>
    </div>
@endsection
