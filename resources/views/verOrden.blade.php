@extends('admin_layout')
@section('cols')
    12
@stop
@section('bBig')
    Ordenes
@stop
@section('boxtitle')
    Detalles de Orden
@stop
@section('content')
    <div class="col-md-8">
        <h2>Items</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>
                    #
                </th>
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
                        {{$orden->id}}
                    </td>
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

    </div>
    <div class="col-md-4">
        @if($cliente->tipo_cliente=="persona")
            @include('tpl/verOrdenClientePersona')
        @else
            @include('tpl/verOrdenClienteEmpresa')
        @endif
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th colspan="4">
                Estado del pedido: <span style="color:red;">{{$orden->ordenid->estatus}}</span>
            </th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <a class="btn btn-default" href="/ordenes/{{$orden->ordenid->id}}/cambiar-estatus/recibido">Cambiar a Pedido Recibido</a>
            </td>
            <td>
                <a class="btn btn-default"  href="/ordenes/{{$orden->ordenid->id}}/cambiar-estatus/en-proceso">Cambiar a Pedido en Proceso</a>
            </td>
            <td>
                <a class="btn btn-default" href="/ordenes/{{$orden->ordenid->id}}/cambiar-estatus/enviado">Cambiar a Pedido Enviado</a>

            </td>
            <td>
                <a class="btn btn-default" href="/ordenes/{{$orden->ordenid->id}}/cambiar-estatus/cancelado">Cambiar a Pedido Cancelado</a>

            </td>

        </tr>
    </table>

@stop