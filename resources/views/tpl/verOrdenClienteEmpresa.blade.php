
    <div class="row">
        <div class="col-md-12">
            <h3>Empresa</h3>
                    Nombre de la empresa:
                
                {{$cliente->nombre_empresa}}<br>
                
                    RFC:
                
                {{$cliente->rfc_empresa}}<br>
                
                    Contacto:
                
                {{$cliente->contacto_empresa}}<br>
                
                    Telefono:
                
                {{$cliente->telefono_empresa}}<br>
                
                    Celular:
                
                {{$cliente->celular_empresa}}<br>
                
                    Email:
                
                {{$cliente->email}}<br>
                
                    Email facturas:
                
                {{$cliente->email_facturas}}<br>
            
        </div>
        <div class="col-md-12">
            <h3>Direccion</h3>
            
                
                    Facturacion
                
                {{$cliente->direccion_facturacion_empresa}}<br>

                
                    Envio
                
                {{$cliente->direccion_envio_empresa}}<br>


                
                    Tipo de Entrega
                
                {{$cliente->tipo_entrega_empresa}}<br>
            
        </div>
        <div class="col-md-12">
            
                <h3>Otros</h3>
                
                    Instrucciones
                
                {{$cliente->instrucciones_empresa}}<br>

            
        </div>
        <div class="col-md-12">
            

                <h3>Precios</h3>
                
                    Precio case slim personalizado
                
                {{$cliente->precio_case_lim_p}}


            
        </div>
    </div>

