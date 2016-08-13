@extends('cliente_layout')

@section('bBig')
    Configuración
@stop
@section('boxtitle')
    Precios
@stop
@section('content')
    {!! Form::open(['url'=>'/panel/precios','method'=>'post']) !!}
    <table class="table table-striped">
        <thead>
        <tr>
            <th>

            </th>
            <th>
                Personalizado
            </th>
            <th>
                Peronalizado Final
            </th>
            <th>
                Catalogo
            </th>

            <th>
                Catalogo Final
            </th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th>CASE SLIM</th>
                <td>${{$usuario->precio_case_lim_p}}</td>
                <td>$<input name="pclpf" type="text" value="{{$usuario->precio_case_lim_p_f}}"></td>
                <td>${{$usuario->precio_case_lim_c}}</td>
                <td>$<input name="pclcf" type="text" value="{{$usuario->precio_case_lim_c_f}}"></td>
            </tr>
            <tr>
                <th>CASE USO RUDO</th>
                <td>${{$usuario->precio_case_rudo_p}}</td>
                <td>$<input name="pcrpf" type="text" value="{{$usuario->precio_case_rudo_p_f}}"></td>
                <td>${{$usuario->precio_case_rudo_c}}</td>
                <td>$<input name="pcrcf" type="text" value="{{$usuario->precio_case_rudo_c_f}}"></td>
            </tr>
            <tr>
                <th>CASE CARTERA</th>
                <td>${{$usuario->precio_case_cartera_p}}</td>
                <td>$<input name="pccpf" type="text" value="{{$usuario->precio_case_cartera_p_f}}"></td>
                <td>${{$usuario->precio_case_cartera_c}}</td>
                <td>$<input name="pcccf" type="text" value="{{$usuario->precio_case_cartera_c_f}}"></td>
            </tr>
        </tbody>
    </table>
    <button type="submit" class="btn btn-warning">Guardar</button>
    {!! Form::close() !!}
@stop