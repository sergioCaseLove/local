<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" style="width:180px" type="text/css">
        <link rel="stylesheet" href="js/jquery-ui-1.12.0.custom/jquery-ui.css">
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.12.0.custom/jquery-ui.js"></script>
          <script>
  $( function() {
    var claves = [];
    var modelos = [];
    //modelos[0] = "";
    $.get("modelos",
    function(data, status){
        //console.log(data[0].clave);
        $.each(data, function(e){
            var tmp = {
                label: data[e].clave,
                value: data[e].clave,
                data: data[e].descripcion
            }
            claves[e] = tmp;
            modelos[e] = data[e].descripcion;
        });
    });

    $(document).ready(function(){
        $("input[type='checkb   ox']").change(function(e){
        });
        $("#agregar").click(function(e){
            //alert($("#seleccion").val());
            $("#seleccion :selected").each(function(i, select){
                $("#baia").append("<option value=" + $(select).val() + ">" + $(select).text() + "</option>");
            });
            $("#seleccion").val([]);

        });
        $("#eliminar").click(function ()
        {
            $("#baia").prop('selectedIndex');
            $("#baia :selected").each(function(i, select){
                $("#baia option[value=" + $(select).val() + "]").remove();
            });

        });
        $('input[type="checkbox"]').change(function(){

            $("#baia :selected").each(function(i, select){
                $("#modelosH").val($(select).val());
                //aqui se tiene que sacar los values de los que estan el select
            });
            $('input[type="checkbox"]').change(function(){
                //aqui se sacan los values de los checkbox
            });
            //alert($(this).attr('name'));
            //alert($(this).val());
        });
        $('#tipos :checked').each(function(){

        });
        $('input[name=tipos]').change(function(){
            if($(this).is('click'))
            {
                //alert('click');
            }
        });
        $('input[name=tipos] :checked').each(function (){
            //console.log($('#tipos').val());
            console.log($(this).val());
            //$("#codigo_barras_p").html($('#tipos').val());
        });
        $("#enviar").click(function(){
            $('#baia option').each(function(){
                $(this).prop('selected', true);
            });
        });
        //$.each()
    });

    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
            return false;
        return true;
    }
    /*
    var availableTags = [
      "ActionScript",
      "AppleScript",
      "Asp",
      "BASIC",
      "C",
      "C++",
      "Clojure",
      "COBOL",
      "ColdFusion",
      "Erlang",
      "Fortran",
      "Groovy",
      "Haskell",
      "Java",
      "JavaScript",
      "Lisp",
      "Perl",
      "PHP",
      "Python",
      "Ruby",
      "Scala",
      "Scheme"
    ];*/
    $( "#clave" ).autocomplete({
      source: claves
    });
    $( "#description" ).autocomplete({
      source: modelos
    });
  } );
  </script>
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
            <form action="guardar" method="get">
                <table>
                    <input type="hidden" name="modelosH" id="modelosH"/>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Codigo de Barras</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                            <div id="codigo_barras_p"></div>
                                <!--<input style="width:180px" type="text" id="codigo_barras" name="codigo_barras">-->
                            </td>
                    </tr>   
                    <tr>
                        <td align="left" style="margin:50px">
                            <label> <font color="gray" face="verdana">Descripcion</font></label>
                        </td>
                        <td>
                            <select style="width:200px;" size="10" multiple="multiple" id="seleccion" name="seleccion[]">
                                @foreach($modelos as $modelo)
                                    <option value="{{$modelo->clave}}">{{$modelo->descripcion}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <input type="button" id="agregar" value=">>"/><br>
                            <input type="button" id="eliminar" value="<<" />
                        </td>
                        <td>
                            <select style="width:200px;" size="10" multiple="multiple" id="baia" name="baia[]">
                            </select>
                        </td>
                    <!--
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="description" name="description">
                            </td>-->
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Catalagos</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                @foreach($cats as $cat)
                                        <input type="checkbox" name="cats[]" value="{{$cat->clave_catalago}}"/><font color="black" face="verdana">{{$cat->clave_catalago}}</font><br>
                                @endforeach
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Unidad</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" id="unidad" name="unidad">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Marca</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" id="marca" name="marca">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Modelo</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" id="modelo" name="modelo">
                            </td>
                    </tr>
                     <!--<tr>    
                            este campo probablemente va a tener un combobox con las opciones existentes 
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Clave de Linea</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <!--<input style="width:180px" type="text" id="clave_linea">
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
                                <input style="width:180px" type="text" id="linea">
                            </td>
                    </tr>-->
                    <tr>
                            <!-- este campo probablemente va a tener un combobox con las opciones existentes -->
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Clave de Familia</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <!--<input style="width:180px" type="text" id="clave_familia">
                                <select style="width:180px">-->
                                    @foreach($familias as $familia)
                                        <input type="checkbox" name="tipos[]" id="tipos" value="{{$familia->clave}}"/><font color="black" face="verdana">{{$familia->nombre}}</font><br>
                                    @endforeach
                                <!--</select>-->
                            </td>
                    </tr>
                    <!-- <tr>
                            como la calve se selecciona arriba lo mas seguro es que este campo no exista
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Familia</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="familia">
                            </td>
                    </tr> -->
                    <!--
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Clave de Categoria</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="clave_categoria">
                                <select>
                                </select>
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Categoria</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="categoria">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Clave de Departamento</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="clave_departamento">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Departamento</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="departamento">
                            </td>
                    </tr>-->
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Impuesto 1</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" value="16" id="impuesto1" name="impuesto1">
                            </td>
                    </tr>
                    <!--
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Impuesto 2</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="impuesto2">
                            </td>
                    </tr>-->
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Numero de proveedor</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" id="numero_proveedor" name="numero_proveedor">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Numero de proveedor 2</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" id="numero_proveedor2" name="numero_proveedor2">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Numero de proveedor 3</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" id="numero_proveedor3" name="numero_proveedor3">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Numero de proveedor 4</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" id="numero_proveedor4" name="numero_proveedor4">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Divisa</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" id="divisa" name="divisa">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Precio</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" value="0.0" id="precio" name="precio">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Precio 2</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" value="0.0" id="precio2" name="precio2">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Precio 3</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" value="0.0" id="precio3" name="precio3">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Precio 4</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" value="0.0" id="precio4" name="precio4">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Precio 5</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" value="0.0" id="precio5" name="precio5">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Ultimo Costo</font></label>
                            </td>
                            <td align="left" colspan="2" style="margin:50px">
                                <input style="width:180px" type="text" value="0.0" id="ultimo_costo" name="ultimo_costo">
                            </td>
                    </tr>
                            <!--
                    <tr> campo de si o no en la base se maneja con los valores del excel 
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Exento de Impuestos</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="exento">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Es un Servicio</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="es_servicio">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Usa Series</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="usa_series">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Minimo en inventario</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="minimo">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Maximo en inventario</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="maximo">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Reordenar</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="reorden">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Dato 1</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="dato1">
                            </td>
                    </tr>
                    <tr>
                            <td align="left" style="margin:50px">
                                <label> <font color="gray" face="verdana">Dato 2</font></label>
                            </td>
                            <td align="left" style="margin:50px">
                                <input style="width:180px" type="text" id="dato2">
                            </td>
                    </tr>-->
                </table>
                <div id="priceArea"></div>
                    <input type="submit" name="" value="guardar" id="enviar">
                </form>
            </div>
        </div>
    </body>
</html>
