@extends('admin_layout')
@section('cols')
    12
@stop
@section('bBig')
    Ordenes
@stop
@section('boxtitle')
    Lista de Ordenes
@stop
@section('content')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                Fecha
            </th>

            <th>
                Piezas
            </th>
            <th>
                Estatus
            </th>
            <th>
                Acciones
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($ordenes as $orden)
            <tr>
                <td>
                    {{$orden->orden_id}}

                </td>
                <td>
                    {{$orden->created_at}}
                </td>

                <td>
                    {{$orden->piezas}}
                </td>

                <td>
                    {{$orden->ordenid->estatus}}
                </td>
                <td>
                    <a href="/panel/ordenes/ver/{{$orden->orden_id}}"/>Ver</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop