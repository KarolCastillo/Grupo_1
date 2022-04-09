@extends('layouts.base')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-5" > FORMULARIO EDITAR CRIPTOMONEDA </h2>

                <form action="{{ url ('modificar', $cript->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-row font-italic ">
                        <div class="form-group col-md-6 ">
                            <label for="">NOMBRE</label>
                            <input type="text" name="nombre" value="{{ $cript->nombre }}" class="form-control border border-success"  >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">PRECIO</label>
                            <input type="text" name="precio" value="{{$cript->precio}}" class="form-control border border-success"  >
                        </div>
                    </div>
                    <div class="form-group font-italic">
                        <label for="">DESCRIPCION</label>
                        <input type="text" name="descripcion" value="{{$cript->descripcion}}" class="form-control border border-success"  >
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4 font-italic">
                            <label for="inputState">LENGUAJE PROGRAMACION</label>
                            <select name="lenguaje_id" class="form-control border border-success">
                                <option value="" >Seleccione lenguaje...</option>

                                @foreach( $lenguaje as $lenguajes)
                                    <option value="{{$lenguajes->id}}" class="text-center"> {{$lenguajes->descripcion_lenguaje}}  </option>
                                @endforeach


                            </select>
                        </div>

                    </div>

                    <div class="grid grid-cols-1 mt-1 mx-7">
                        <img id="logotipoSeleccionada" style="max-height: 300px;">
                    </div>


                    <button type="submit" class="btn btn-primary btn-lg active mb-4 col-2 float-right border border-info "> GUARDAR </button>
                    <a type="button " href="{{ url('/')}}" class="btn btn-danger btn-lg active mb-4 col-2 float-right mr-3">CANCELAR </a>
                </form>


            </div>

        </div>
    </div>
@endsection
