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
                Cliente
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
                    <a href="/admin/clientes/ver/{{$orden->cliente_id}}.png">
                        {{$orden->usuario->nombre_persona != NULL ? $orden->usuario->nombre_persona : $orden->usuario->nombre_empresa}}
                    </a>
                </td>
                <td>
                    {{$orden->piezas}}
                </td>

                <td>
                    {{$orden->ordenid->estatus}}
                </td>

                <td>
                    {{--<a href="/images/saved/case_{{$orden->imagen_case}}.png">Descargar</a>--}}
                    <a href="/ordenes/ver/{{$orden->orden_id}}"/>Ver</a>
                    <a href="/ordenes/eliminar/{{$orden->orden_id}}" />Eliminar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop