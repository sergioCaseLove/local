<html>
<head>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url("http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700");

        body {
            padding-top: 90px;
            background: url(/images/fondo.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
        .panel-login {
            border-color: #ccc;
            -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
            box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
        }
        .panel-login>.panel-heading {
            color: #00415d;
            background-color: #fff;
            border-color: #fff;
            text-align:center;
        }
        .panel-login>.panel-heading a{
            text-decoration: none;
            color: #666;
            font-weight: bold;
            font-size: 15px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }
        .panel-login>.panel-heading a.active{
            color: #FF269B;
            font-size: 18px;
        }
        .panel-login>.panel-heading hr{
            margin-top: 10px;
            margin-bottom: 0px;
            clear: both;
            border: 0;
            height: 1px;
            background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
            background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
            background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
        }
        .panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
            height: 45px;
            border: 1px solid #ddd;
            font-size: 16px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
            text-align: center;
        }
        .panel-login input:hover,
        .panel-login input:focus {
            outline:none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-color: #ccc;
        }
        .btn-login {
            background-color: #59B2E0;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #59B2E6;
        }
        .btn-login:hover,
        .btn-login:focus {
            color: #fff;
            background-color: #53A3CD;
            border-color: #53A3CD;
        }
        .forgot-password {
            text-decoration: underline;
            color: #888;
        }
        .forgot-password:hover,
        .forgot-password:focus {
            text-decoration: underline;
            color: #666;
        }

        .btn-register {
            background-color: #1CB94E;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #1CB94A;
        }
        .btn-register:hover,
        .btn-register:focus {
            color: #fff;
            background-color: #1CA347;
            border-color: #1CA347;
        }
        h3 {
            text-align: left;
        }

    </style>
</head>
<body>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <span  style="text-align:center;"><h1><br></h1></span><br>
                <div class="panel panel-login" style="background:#ECECEC ">
                    <div style="position: absolute; top: 0px; left: 240px;" ><img src="/images/icon.png" style="width:250px"></div>
                    <br><br><br><br><br><br>
                    <div class="panel-heading" style="background:#ECECEC ">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="/auth/login" class="" id="login-form-link">Iniciar Sesion</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link" class="active">Registrar</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                {!! Form::open(['id'=>'register-form','url'=>'/clientes/registrar/persona','method'=>'post','style'=>'display:block']) !!}
                                <input type="hidden" name="tipo_cliente" value="persona">
                                <ul class="nav nav-tabs nav-justified" role="tablist">
                                    <li role="presentation" class="active"><a role="tab" >Persona</a></li>
                                    <li role="presentation"><a href="/auth/registrar-empresa"  role="tab">Empresa</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="persona">
                                        <h3>Datos de acceso</h3>
                                        <div class="col-md-12">
                                            Email: <input class="form-control" type="email" name="email" required><br>
                                        </div>
                                        <div class="col-md-12">
                                            Password: <input class="form-control" type="password" name="password" required><br>
                                        </div>
                                        <div class="col-md-12">
                                            Repetir Password: <input class="form-control" type="password" name="password2" required><br>
                                        </div>
                                        <hr size="5px">

                                        <br><br>
                                        <h3>Datos Personales</h3>

                                        <div class="col-md-6">
                                            Nombre: <input class="form-control" type="text" name="nombre_persona" required><br>
                                        </div>
                                        <div class="col-md-6">
                                            Apellido: <input class="form-control" type="text" name="apellido_persona" required><br>
                                        </div>
                                        <div class="col-md-6">
                                            Telefono: <input class="form-control" type="text" name="telefono_persona" required><br>
                                        </div>
                                        <div class="col-md-6">
                                            Celular: <input class="form-control" type="text" name="celular_persona" required><br>
                                        </div>
                                        <h3>Direccion</h3>
                                        <div class="col-md-6">
                                            Calle y Numero: <input class="form-control" type="text" name="dir_envio_persona" required><br>
                                        </div>
                                        <div class="col-md-6">
                                            Colonia: <input class="form-control" type="text" name="col_envio_persona" required><br>
                                        </div>
                                        <div class="col-md-6">

                                            Ciudad: <input class="form-control" type="text" name="ciud_envio_persona" required><br>
                                        </div>
                                        <div class="col-md-6">

                                            Codigo Postal: <input class="form-control" type="text" name="cp_envio_persona" required><br>
                                        </div>
                                        <div class="col-md-6">

                                            Estado: <select name="est_envio_persona" class="form-control" required>
                                                <option value=""></option>
                                                <option value="Aguascalientes">Aguascalientes</option>
                                                <option value="Baja California">Baja California</option>
                                                <option value="Baja California Sur">Baja California Sur</option>
                                                <option value="Campeche">Campeche</option>
                                                <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                                <option value="Colima">Colima</option>
                                                <option value="Chiapas">Chiapas</option>
                                                <option value="Chihuahua">Chihuahua</option>
                                                <option value="Distrito Federal">Distrito Federal</option>
                                                <option value="Durango">Durango</option>
                                                <option value="Guanajuato">Guanajuato</option>
                                                <option value="Guerrero">Guerrero</option>
                                                <option value="Hidalgo">Hidalgo</option>
                                                <option value="Jalisco">Jalisco</option>
                                                <option value="México">México</option>
                                                <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                                                <option value="Morelos">Morelos</option>
                                                <option value="Nayarit">Nayarit</option>
                                                <option value="Nuevo León">Nuevo León</option>
                                                <option value="Oaxaca">Oaxaca</option>
                                                <option value="Puebla">Puebla</option>
                                                <option value="Querétaro">Querétaro</option>
                                                <option value="Quintana Roo">Quintana Roo</option>
                                                <option value="San Luis Potosí">San Luis Potosí</option>
                                                <option value="Sinaloa">Sinaloa</option>
                                                <option value="Sonora">Sonora</option>
                                                <option value="Tabasco">Tabasco</option>
                                                <option value="Tamaulipas">Tamaulipas</option>
                                                <option value="Tlaxcala">Tlaxcala</option>
                                                <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>
                                                <option value="Yucatán">Yucatán</option>
                                                <option value="Zacatecas">Zacatecas</option>
                                            </select>
                                        </div>

                                        <div class="col-md-6">

                                            Pais: <input class="form-control" type="text" name="pais_envio_persona" required><br>
                                        </div>
                                        <br>

                                        <h3>Como deseo recibir los productos</h3>
                                        <div class="col-md-12">
                                            <select class="form-control"  name="tipo_entrega_persona">
                                                <option value="">Elige una opción</option>
                                                <option>Envío Express $100</option>
                                                <option>Recoger en Case Love (Monterrey)</option>
                                            </select>
                                        </div>
                                        <br>
                                        <h3>Requiere factura?</h3>
                                        <div class="col-md-12">
                                            <button class="btn btn-lg btn-primary" style="background:#FF269B; border:none;" id="facturar">Si</button><br><br>
                                            <button class="btn btn-lg btn-primary" style="background:#FF269B; border:none;">Completar Registro</button>
                                        </div>

                                        <br><br>
                                        <div id="facturacion" style="display:none">
                                            <h3>Datos de facturacion</h3>
                                            <div class="col-md-12">
                                                <textarea class="form-control" style="height:200px" name="datos_facturacion_persona"></textarea>
                                                <br>
                                                <button type="submit" class="btn btn-lg btn-primary" style="background:#FF269B;">Registrar</button>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(function() {


        $('#facturar').click(function(e) {
            console.log('holi')
            $("#facturacion").show();
            e.preventDefault();
        });

    });

</script>
</body>
</html>