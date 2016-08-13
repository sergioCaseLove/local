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
                    Nombre
                </dt>
                <dd> {{$cliente->nombre_persona}}<br><br></dd>
                <dt>
                    Apellido
                </dt>
                <dd> {{$cliente->apellido_persona}}<br><br></dd>
                <dt>
                    Teléfono
                </dt>
                <dd> {{$cliente->telefono_persona}}<br><br></dd>
                <dt>
                    Celular
                </dt>
                <dd>{{$cliente->celular_persona}}<br><br></dd>

                <dt>
                    Email
                </dt>
                <dd>{{$cliente->email}}<br><br></dd>
            </dl>
        </div>
        <div class="col-md-3">
            <h3>Direccion</h3>
            <dl>
                <dt>
                    Calle y Numero
                </dt>
                <dd>{{$cliente->dir_envio_persona}}<br><br></dd>

                <dt>
                    Colonia
                </dt>
                <dd>{{$cliente->col_envio_persona}}<br><br></dd>

                <dt>
                    Ciudad
                </dt>
                <dd>{{$cliente->ciud_envio_persona}}<br><br></dd>

                <dt>
                    Estado
                </dt>
                <dd>{{$cliente->est_envio_persona}}<br><br></dd>

                <dt>
                    C.P.
                </dt>
                <dd>{{$cliente->cp_envio_persona}}<br><br></dd>

                <dt>
                    Pais
                </dt>
                <dd>{{$cliente->pais_envio_persona}}<br><br></dd>
                <dt>
                    Tipo de Entrega
                </dt>
                <dd>{{$cliente->tipo_entrega_persona}}<br><br></dd>
            </dl>
        </div>
        <div class="col-md-3">
            <dl>
                <h3>Facturación</h3>
                <dt>
                    Datos de facturacion
                </dt>
                <dd>{{$cliente->datos_facturacion_persona}}<br><br></dd>

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