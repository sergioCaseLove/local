@extends('admin_layout')
@section('bBig')
    Clientes
@stop
@section('boxtitle')
    Editar Cliente
@stop
@section('content')
    {!! Form::open(['url'=>'/admin/clientes/editar','method'=>'post']) !!}
    <input class="form-control" type="hidden" name="id" value="{{$cliente->id}}">
    <h3>Datos de acceso</h3>
    <div class="col-md-12">
        Email: <input class="form-control" type="email" name="email" value="{{$cliente->email}}" required><br>
    </div>
    <br><br>
    <h3>Datos Personales</h3>

    <div class="col-md-6">
        Nombre: <input class="form-control" type="text" name="nombre_persona" value="{{$cliente->nombre_persona}}" required><br>
    </div>
    <div class="col-md-6">
        Apellido: <input class="form-control" type="text" name="apellido_persona" value="{{$cliente->apellido_persona}}" required><br>
    </div>
    <div class="col-md-6">
        Telefono: <input class="form-control" type="text" name="telefono_persona" value="{{$cliente->telefono_persona}}" required><br>
    </div>
    <div class="col-md-6">
        Celular: <input class="form-control" type="text" name="celular_persona" value="{{$cliente->celular_persona}}" required><br>
    </div>
    <h3>Direccion</h3>
    <div class="col-md-6">
        Calle y Numero: <input class="form-control" type="text" name="dir_envio_persona" value="{{$cliente->dir_envio_persona}}" required><br>
    </div>
    <div class="col-md-6">
        Colonia: <input class="form-control" type="text" name="col_envio_persona" value="{{$cliente->col_envio_persona}}" required><br>
    </div>
    <div class="col-md-6">

        Ciudad: <input class="form-control" type="text" name="ciud_envio_persona" value="{{$cliente->ciud_envio_persona}}" required><br>
    </div>
    <div class="col-md-6">

        Estado: <input class="form-control" type="text" name="est_envio_persona" value="{{$cliente->est_envio_persona}}" required><br>
    </div>
    <div class="col-md-6">

        Codigo Postal: <input class="form-control" type="text" name="cp_envio_persona" value="{{$cliente->cp_envio_persona}}" required><br>
    </div>
    <div class="col-md-6">

        Pais: <input class="form-control" type="text" name="pais_envio_persona" value="{{$cliente->pais_envio_persona}}" required><br>
    </div>


    <h3>Como deseo recibir los productos</h3>
    <div class="col-md-12">
        <select class="form-control" name="tipo_entrega_persona">
            <option>Envio (Costo adicional)</option>
            <option>Recojer en Case Love</option>
        </select>
    </div>


    <h3>Datos de facturacion</h3>
    <div class="col-md-12">
        <textarea class="form-control" style="height:200px" name="datos_facturacion_persona">{{$cliente->datos_facturacion_persona}}</textarea>
    </div>


    <h3>Precios</h3>

    <div class="col-md-12">
        Case slim personalizado: <input class="form-control" type="text" name="precio_case_lim_p"
                                        value="{{$cliente->precio_case_lim_p}}"><br>
    </div>
    <h3>Password</h3>

    <div class="col-md-12">
        Nuevo Password: <input class="form-control" type="text" name="nuevo_password"><br>
    </div>

    <button type="submit" class="btn btn-warning">Guardar</button>
    {!! Form::close() !!}
@stop