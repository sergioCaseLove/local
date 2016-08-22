<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" style="width:180px "type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <table>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Clave</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="clave">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Descripcion</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="description">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Codigo de Barras</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="codigo_barras">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Unidad</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="unidad">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Marca</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="marca">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Modelo</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="modelo">
                            </td>
                    </tr>
                     <!--<tr>    
                            este campo probablemente va a tener un combobox con las opciones existentes 
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Clave de Linea</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <!--<input style="width:180px "type="text" id="clave_linea">
                                <select>
                                </select>
                            </td>
                    </tr>-->
                            <!--
                    <tr> como la calve se selecciona arriba lo mas seguro es que este campo no exista 
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Linea</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="linea">
                            </td>
                    </tr>-->
                    <tr>
                            <!-- este campo probablemente va a tener un combobox con las opciones existentes -->
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Clave de Familia</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <!--<input style="width:180px "type="text" id="clave_familia">-->
                                <select style="width:180px">
                                    @foreach($familias as $familia)
                                        <option >{{$familia->nombre}}</option>
                                    @endforeach
                                </select>
                            </td>
                    </tr>
                    <tr>
                            <!-- como la calve se selecciona arriba lo mas seguro es que este campo no exista -->
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Familia</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="familia">
                            </td>
                    </tr>
                    <!--
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Clave de Categoria</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="clave_categoria">
                                <select>
                                </select>
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Categoria</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="categoria">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Clave de Departamento</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="clave_departamento">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Departamento</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="departamento">
                            </td>
                    </tr>-->
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Impuesto 1</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="impuesto1">
                            </td>
                    </tr>
                    <!--
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Impuesto 2</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="impuesto2">
                            </td>
                    </tr>-->
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Numero de proveedor</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="numero_proveedor">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Numero de proveedor 2</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="numero_proveedor2">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Numero de proveedor 3</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="numero_proveedor3">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Numero de proveedor 4</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="numero_proveedor4">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Divisa</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="divisa">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Precio</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="precio">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Precio 2</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="precio2">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Precio 3</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="precio3">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Precio 4</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="precio4">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Precio 5</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="precio5">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Ultimo Costo</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="ultimo_costo">
                            </td>
                    </tr>
                            <!--
                    <tr> campo de si o no en la base se maneja con los valores del excel 
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Exento de Impuestos</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="exento">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Es un Servicio</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="es_servicio">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Usa Series</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="usa_series">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Minimo en inventario</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="minimo">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Maximo en inventario</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="maximo">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Reordenar</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="reorden">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Dato 1</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="dato1">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Dato 2</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px "type="text" id="dato2">
                            </td>
                    </tr>-->
                </table>
            </div>
        </div>
    </body>
</html>