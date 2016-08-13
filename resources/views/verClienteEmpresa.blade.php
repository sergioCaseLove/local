@extends('admin_layout')
@section('bBig')
    Clientes
@stop
@section('boxtitle')
    Ver Cliente
@stop
@section('content')
    <div class="row">
        <div class="col-md-3">
            <h3>Datos</h3>
            <dl>
                <dt>
                    Nombre de la empresa
                </dt>
                <dd> {{$cliente->nombre_empresa}}<br><br></dd>
                <dt>
                    RFC
                </dt>
                <dd> {{$cliente->rfc_empresa}}<br><br></dd>
                <dt>
                    Contacto
                </dt>
                <dd> {{$cliente->contacto_empresa}}<br><br></dd>
                <dt>
                    Telefono
                </dt>
                <dd>{{$cliente->telefono_empresa}}<br><br></dd>
                <dt>
                    Celular
                </dt>
                <dd>{{$cliente->celular_empresa}}<br><br></dd>
                <dt>
                    Email
                </dt>
                <dd>{{$cliente->email}}<br><br></dd>
                <dt>
                    Email facturas
                </dt>
                <dd>{{$cliente->email_facturas}}<br><br></dd>
            </dl>
        </div>
        <div class="col-md-3">
            <h3>Direccion</h3>
            <dl>
                <dt>
                    Facturacion
                </dt>
                <dd>{{$cliente->direccion_facturacion_empresa}}<br><br></dd>

                <dt>
                    Envio
                </dt>
                <dd>{{$cliente->direccion_envio_empresa}}<br><br></dd>

                <dt>
                    Sucursal
                </dt>
                <dd>{{$cliente->sucursal_empresa}}<br><br></dd>

                <dt>
                    Tipo de Entrega
                </dt>
                <dd>{{$cliente->tipo_entrega_empresa}}<br><br></dd>
            </dl>
        </div>
        <div class="col-md-3">
            <dl>
                <h3>Otros</h3>
                <dt>
                    Instrucciones
                </dt>
                <dd>{{$cliente->instrucciones_empresa}}<br><br></dd>

            </dl>
        </div>
        <div class="col-md-3">
            <dl>

                <h3>Precios</h3>
                <dt>
                    Precio case slim personalizado
                </dt>
                <dd>{{$cliente->precio_case_lim_p}}</dd>


            </dl>
        </div>
    </div>






@stop