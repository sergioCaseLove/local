<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico">
        <title>Nota</title>
        <script>
            function printDiv() {
                window.print();
           }
        </script>
        <style type="text/css">
            .h1{
                font-size: 30px;
            }
            .imagen-nota-venta{
            }
            .punteado{ 
                border-style: dotted; 
                border-width: 1px; 
                border-color: #660033; 
            } 
            .final{
                font-size: 10px;
                font-family: verdana;
            }
            .item-header
            {
                -webkit-print-color-adjust: exact;
                background-color:black;
                color:white;
            }
        </style>
    </head>
    <body>
        <div style="position:absolute;border-style:solid;border-width:1px;">
            <div style="margin-left:40px;">
            <table id="areaToPrint" onclick="printDiv()">
                <tr>
                    <td align="left">
                        <span class="h1">NOTA DE VENTA</span>
                    </td>
                    <td>
                        <img class="imagen-nota-venta" src="images/case_love_nota.png">
                    </td>
                </tr>
                <tr>
                    <td>
                        <div style="background-color:red;height:150px;width:515px;"></div>
                    </td>
                    <td align="left">
                        <table style="">
                            <tr>
                                <th># de pedido</th>
                                <td>0</td>
                            </tr>
                            <tr>
                                <th>Folio:</th>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Fecha:</th>
                                <td>{{date('d/m/o')}}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table >
                            <tr >
                                <th class="item-header" style="width:80px;">
                                    Ctd
                                </th>
                                <th class="item-header" style="width:430px;">
                                    Concepto
                                </th>
                                <th class="item-header" style="width:110px;">
                                    Precio U
                                </th>
                                <th class="item-header" style="width:110px;">
                                    Importe
                                </th>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" ></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" ></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" ></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" ></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" ></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" ></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" ></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" ></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" ></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" ></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="punteado" align="center">0</td>
                                <td style="height:40px;"></td>
                                <td style="height:40px;" class="punteado" align="center">SUBTOTAL</td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="" ></td>
                                <td style="height:40px;" class="" align="center">CASE LOVE S.A. DE C.V.</td>
                                <td style="height:40px;" class="punteado" align="center">IVA</td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="" ></td>
                                <td style="height:40px;" class="final" align="center">Monclova 323 B<br>Monterrey, N.L. 64460</td>
                                <td style="height:40px;" class="punteado" align="center">TOTAL</td>
                                <td style="height:40px;" class="punteado"></td>
                            </tr>
                            <tr>
                                <td style="height:40px;" class="" ></td>
                                <td style="height:40px;" class="final" align="center">RFC: CLO1503232W9<br>Cuenta Banorte: 0281479034<br>Clabe: 072 580 002814790340</td>
                                <td style="height:40px;" class="" align="center"></td>
                                <td style="height:40px;" class=""></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            </div>
        </div>
    </body>
</html>