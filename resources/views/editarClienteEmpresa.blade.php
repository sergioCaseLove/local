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
        Email: <input class="form-control" type="email" name="email"  value="{{$cliente->email}}" required><br>
    </div>
    <br><br>
    <h3>Datos de la Empresa</h3>

    <div class="col-md-6">
        Nombre de la empresa: <input class="form-control" type="text" name="nombre_empresa" value="{{$cliente->nombre_empresa}}" required><br>
    </div>
    <div class="col-md-6">
        RFC: <input class="form-control" type="text" name="rfc_empresa" value="{{$cliente->rfc_empresa}}" required><br>
    </div>
    <div class="col-md-6">
        Contacto: <input class="form-control" type="text" name="contacto_empresa" value="{{$cliente->contacto_empresa}}" required><br>
    </div>
    <div class="col-md-6">
        Telefono: <input class="form-control" type="text" name="telefono_empresa" value="{{$cliente->telefono_empresa}}" required><br>
    </div>
    <div class="col-md-6">
        Celular: <input class="form-control" type="text" name="celular_empresa" value="{{$cliente->celular_empresa}}" required><br>
    </div>
    <div class="col-md-6">
        Email para recibir facturas: <input class="form-control" type="email" name="email_facturas" value="{{$cliente->email_facturas}}" required><br>
    </div>
    <div class="col-md-12">
        Direccion de facturacion
        <textarea class="form-control" style="height:100px" name="direccion_facturacion_empresa" id="direccionfacturacion"  required>{{$cliente->direccion_facturacion_empresa}}</textarea>
        <br>
    </div>
    <div class="col-md-12">
        Sucursal
        <input class="form-control"  name="sucursal_empresa" value="{{$cliente->sucursal_empresa}}" required><br>        <br>
    </div>
    <div class="col-md-12">
        Direccion de envio
        <textarea class="form-control" style="height:100px" name="direccion_envio_empresa" id="direccionenvio"  required>{{$cliente->direccion_envio_empresa}}</textarea>
        <br>
    </div>

    <div class="col-md-12">
        Instrucciones o informacion adicional
        <textarea class="form-control" style="height:100px" name="instrucciones_empresa"  required>{{$cliente->instrucciones_empresa}}</textarea>
        <br>
    </div>

    <h3>Como deseo recibir los productos</h3>
    <div class="col-md-12">
        <select class="form-control"  name="tipo_entrega_empresa">
            <option>Envio (Costo adicional)</option>
            <option>Recojer en Case Love</option>
        </select>
        <br>
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