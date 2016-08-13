@extends('admin_layout')
@section('content')
@section('cols')
    12
@stop
    @section('bBig')
       Clientes
    @stop
    @section('boxtitle')
        Lista de Clientes
    @stop
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>
                    Acciones
                </th>
                <th>
                    Nombre
                </th>
                <th>
                    Teléfono
                </th>
                <th>
                    Celular
                </th>
                <th>
                    Email
                </th>
                <th>
                    Tipo de Entrega
                </th>


            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
                @if($cliente->tipo_cliente=="persona")
                <tr>
                    <td>
                        <a href="/admin/clientes/ver/{{$cliente->id}}">Ver</a>
                        <a href="/admin/clientes/editar/{{$cliente->id}}">Editar</a>
                        <a href="/admin/clientes/eliminar/{{$cliente->id}}">Eliminar</a>
                        @if($cliente->estatus==0)
                            <a href="/admin/clientes/activar/{{$cliente->id}}">Activar</a>
                        @endif
                    </td>
                    <td>
                        {{$cliente->nombre_persona}}
                    </td>
                    <td>
                        {{$cliente->telefono_persona}}

                    </td>
                    <td>
                        {{$cliente->celular_persona}}

                    </td>
                    <td>
                        {{$cliente->email}}

                    </td>
                    <td>
                        {{$cliente->tipo_entrega_persona}}
                    </td>
                </tr>
                @endif
                @if($cliente->tipo_cliente=="empresa")
                    <tr>
                        <td>
                            <a href="/admin/clientes/ver/{{$cliente->id}}">Ver</a>
                            <a href="/admin/clientes/editar/{{$cliente->id}}">Editar</a>
                            <a href="/admin/clientes/eliminar/{{$cliente->id}}">Eliminar</a>
                            @if($cliente->estatus==0)
                                <a href="/admin/clientes/activar/{{$cliente->id}}">Activar</a>
                            @endif
                        </td>
                        <td>
                            {{$cliente->nombre_empresa}}
                        </td>
                        <td>
                            {{$cliente->telefono_empresa}}

                        </td>
                        <td>
                            {{$cliente->celular_empresa}}

                        </td>
                        <td>
                            {{$cliente->email}}

                        </td>
                        <td>
                            {{$cliente->tipo_entrega_empresa}}
                        </td>

                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>

    </div>
@stop