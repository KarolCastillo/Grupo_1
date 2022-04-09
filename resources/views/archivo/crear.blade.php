@extends('layouts.base')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h2 class="text-center mb-5" > FORMULARIO CREAR CRIPTOMONEDA </h2>

                <form action="{{ url ('/save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row font-italic ">
                        <div class="form-group col-md-6 ">
                            <label for="inputEmail4">NOMBRE</label>
                            <input type="text" name="nombre" class="form-control border border-success"  placeholder="Ej. Bitcoin">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">PRECIO</label>
                            <input type="text" name="precio" class="form-control border border-success"  placeholder="Ej. Q 470166.88">
                        </div>
                    </div>
                    <div class="form-group font-italic">
                        <label for="inputAddress">DESCRIPCION</label>
                        <input type="text" name="descripcion" class="form-control border border-success"  placeholder=" Ej. Bitcoin es una criptomoneda y un sistema de pago sin banco central o administrador único">
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-4 font-italic">
                            <label for="">LENGUAJE PROGRAMACION</label>
                            <select name="lenguaje" class="form-control border border-success">
                                <option value="" >Seleccione lenguaje...</option>
                                @foreach( $lenguaje as $lenguajes)
                                    <option value="{{$lenguajes->id}}" > {{$lenguajes->descripcion_lenguaje}}  </option>
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
