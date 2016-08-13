
    <div class="row">
        <div class="col-md-12">
            <h3>Cliente</h3>
            {{$cliente->nombre_persona}}
            {{$cliente->apellido_persona}}<br>
            {{$cliente->telefono_persona}}<br>
            {{$cliente->celular_persona}}<br>
            {{$cliente->email}}<br>
        </div>
        <div class="col-md-12">
            <h3>Direccion</h3>
                {{$cliente->dir_envio_persona}}<br>

                {{$cliente->col_envio_persona}}<br>

                {{$cliente->ciud_envio_persona}}<br>

                {{$cliente->est_envio_persona}}<br>
                {{$cliente->cp_envio_persona}}<br>
                {{$cliente->pais_envio_persona}}<br>
                {{$cliente->tipo_entrega_persona}}<br>
        </div>
        <div class="col-md-12">
                <h3>Facturación</h3>
                {{$cliente->datos_facturacion_persona}}<br>
        </div>
        <div class="col-md-12">
            <h3>Precio case slim personalizado </h3><br>
            {{$cliente->precio_case_lim_p}}
        </div>
    </div>
