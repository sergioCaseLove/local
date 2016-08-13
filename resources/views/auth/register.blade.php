<!-- resources/views/auth/register.blade.php -->

<h2>Registrar Cliente</h2>
    {!! Form::open(['url'=>'/clientes/registrar','method'=>'post']) !!}
    Nombre: <input class="form-control" type="text" name="nombre"><br>
    Telefono: <input class="form-control" type="text" name="telefono"><br>
    Celular: <input class="form-control" type="text" name="celular"><br>
    Email: <input class="form-control" type="text" name="email"><br>
    Tipo de envío: <input class="form-control" type="text" name="tipo_envio"><br>
    <h3>Envío</h3> <br>
    Dirección de envío: <input class="form-control" type="text" name="dir_envio"><br>
    Colonia de Envío: <input class="form-control" type="text" name="col_envio"><br>
    Ciudad de Envío: <input class="form-control" type="text" name="ciud_envio"><br>
    Estado de Envío: <input class="form-control" type="text" name="est_envio"><br>
    C.P. de Envío: <input class="form-control" type="text" name="cp_envio"><br>
    Tel de Envío: <input class="form-control" type="text" name="tel_envio"><br>
    <h3>Facturación</h3> <br>
    RFC: <input class="form-control" type="text" name="rfc"><br>
    Dirección de envío: <input class="form-control" type="text" name="dir_fact"><br>
    Colonia de Envío: <input class="form-control" type="text" name="col_fact"><br>
    Ciudad de Envío: <input class="form-control" type="text" name="ciud_fact"><br>
    Estado de Envío: <input class="form-control" type="text" name="est_fact"><br>
    C.P. de Envío: <input class="form-control" type="text" name="cp_fact"><br>
    Tel de Envío: <input class="form-control" type="text" name="tel_fact"><br>
    <button type="submit" class="btn btn-warning">Registrar</button>
{!! Form::close() !!}