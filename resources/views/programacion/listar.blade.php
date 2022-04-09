@extends('layouts.base')



@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-13">
                <h2 class="text-center mb-5" >LISTADO DE LENGUAJE DE PROGRAMACION </h2>
                <a type="button " href="{{ url('/crearlenguaje')}}" class="btn btn-success btn-lg active mb-4 col-2 float-right ">AGREGAR </a>

                <table class="table table-hover table-dark ">
                    <thead>
                    <tr>

                        <th class="border px-4 py-2 text-center">NOMBRE</th>
                        <th class="border px-4 py-2 text-center">DEFINICION</th>
                        <th class="border px-4 py-2 text-center">OPCIONES</th>


                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lenguajes as $lenguaje)
                        <tr>

                            <td class=" border px-4 py-2">{{$lenguaje->descripcion_lenguaje}}</td>
                            <td class=" border px-4 py-2">{{$lenguaje->definicion}}</td>

                            <td>
                                <div class="btn-group flex justify-center rounded-lg text-lg">

                                    <form action="{{ url('/mod', $lenguaje->id)}}" >


                                        <button type="submit" onclick="return ;" style = "background-color: transparent ">
                                            <i class="far fa-edit btn btn-outline-success "></i>
                                        </button>


                                    </form>
                                    <form action="{{ url('/eliminar', $lenguaje->id)}}" method="post">
                                        @csrf @method('DELETE')

                                        <button type="submit" onclick="return confirm('Eliminar Registro de Usuario');" style = "background-color: transparent">
                                            <i class="far fa-trash-alt btn btn-outline-danger"></i>
                                        </button>


                                    </form>


                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
                <!-- Paginacion -->
                {{ $lenguajes->links() }}

            </div>
        </div>
    </div>
@endsection

