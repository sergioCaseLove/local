@extends('admin_layout')
@section('cols')
    12
@stop
@section('bBig')
    Ordenes
@stop
@section('boxtitle')
    Lista de Piezas
@stop
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>
                Imagen
            </th>
            <th>
                Modelo
            </th>
            <th>
                Cantidad
            </th>
            <th>
                Descargar
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($ordenes as $orden)
            <tr>
                <td>
                    <img src="/images/saved/case_{{$orden->imagen_case}}.png" style="width:100px;">

                </td>
                <td>
                    {{$orden->modelo}}

                </td>
                <td>
                    {{$orden->piezas}}
                </td>
                <td>
                    {{--<a href="/images/saved/case_{{$orden->imagen_case}}.png">Descargar</a>--}}
                    <a href="/images/saved/case_{{$orden->imagen_case}}.png"/>Descargar</a>
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <br><br>
    <table class="table table-striped">
        <thead>
        <tr>
            <th colspan="4">
                Estado del pedido: <span style="color:red;">{{$orden->ordenid->estatus}}</span>
            </th>
        </tr>
        </thead>
        <tbody>

    </table>
@stop