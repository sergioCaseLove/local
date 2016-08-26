<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" style="width:180px" type="text/css">
        <link rel="stylesheet" href="js/jquery-ui-1.12.0.custom/jquery-ui.css">
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui-1.12.0.custom/jquery-ui.js"></script>
        <script src="js/bindWithDelay/bindWithDelay.js"></script>
        <script src="js/FilterTable/jquery.filtertable.js"></script>
          <script>

    $(document).ready(function() {
        // apply filterTable to all tables on this page
        $('table').filterTable({filterExpression: 'filterTableFindAll'});
    });
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
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
        <style>
.filter-table .quick { margin-left: 0.5em; font-size: 0.8em; text-decoration: none; }
.fitler-table .quick:hover { text-decoration: underline; }
td.alt { background-color: #ffc; background-color: rgba(255, 255, 0, 0.2); }
</style> <!-- or put the styling in your stylesheet -->
    </head>
    <body>
        <div class="container" style="position:absolute">
            <div class="content">
                <table border="1px">
                        <tr>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Codigo de Barras</font>
                            </th>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Descripcion</font>
                            </th>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Unidad</font>
                            </th>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Marca</font>
                            </th>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Modelo</font>
                            </th>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Clave de Familia</font>
                            </th>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Familia</font>
                            </th>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Impuesto %</font>
                            </th>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Divisa</font>
                            </th>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Precio 1</font>
                            </th>
                            <th style="padding:10px">
                                <font color="gray" face="verdana">Precio 2</font>
                            </th>
                        </tr>
                    @foreach($prods as $prod)
                        <tr>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->codigo_barras}}</font>
                            </td>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->description}}</font>
                            </td>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->unidad}}</font>
                            </td>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->marca}}</font>
                            </td>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->modelo}}</font>
                            </td>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->clave_familia}}</font>
                            </td>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->familia}}</font>
                            </td>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->impuesto1}}%</font>
                            </td>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->divisa}}</font>
                            </td>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->precio}}</font>
                            </td>
                            <td style="padding:10px">
                                <font color="gray" face="verdana">{{$prod->precio2}}</font>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </body>
</html>
