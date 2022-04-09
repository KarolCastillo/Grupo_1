@extends('layouts.base')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-5" > FORMULARIO CREAR LENGUAJE PROGRAMACION </h2>

                <form action="{{ url ('/guardar') }}" method="POST" >
                    @csrf

                    <div class="form-group font-italic  ">
                        <label for="inputEmail4">ID</label>
                        <input type="text" name="id" class="form-control border border-success"  placeholder="0">
                    </div>

                     <div class="form-group font-italic  ">
                       <label for="inputEmail4">NOMBRE</label>
                       <input type="text" name="descripcion_lenguaje" class="form-control border border-success"  placeholder="Ej. C++">
                     </div>

                    <div class="form-group font-italic">
                        <label for="inputAddress">DEFINICION</label>
                        <input type="text" name="definicion" class="form-control border border-success"  placeholder=" Ej. Es un lenguaje de programación diseñado en 1979">
                    </div>


                    <button type="submit" class="btn btn-primary btn-lg active mb-4 col-2 float-right border border-info "> GUARDAR </button>
                    <a type="button " href="{{ url('/lenguaje')}}" class="btn btn-danger btn-lg active mb-4 col-2 float-right mr-3">CANCELAR </a>
                </form>


            </div>

        </div>
    </div>
@endsection
