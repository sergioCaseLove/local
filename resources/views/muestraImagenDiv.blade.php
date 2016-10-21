<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="images/logo.ico">
        <title>Preview</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" style="width:180px" type="text/css">
        <link rel="stylesheet" href="js/jquery-ui-1.12.0.custom/jquery-ui.css">
        <script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
        <script type="text/javascript" src="js/zoom-master/jquery.zoom.min.js"></script>
        <script type="text/javascript" src="js/jcanvas.min.js"></script>
        <script type="text/javascript" src="js/jcanvas-handles.min.js"></script>
        <script type="text/javascript" src="js/dropzone.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>

        /*
            para escalar hay que calcular la cantidad que se movio el mouse ((x1, y1) - (x2, y2))
            ya que se tenga ese valor hay que hacer crecer la imagen esa cantidad de pixeles 
            y mover la imagen para que de el efecto de escala hacia esa esquina.
        */
        $(document).ready(function(){
            move = false;
            r1 = false;
            r2 = false;
            r3 = false;
            r4 = false;
            tMove = false;
            iniciox = 0;
            inicioy = 0;
            szX = 0;
            szY = 0;
            $("#dragItem").mousedown(function(){
                if(!tMove)
                {
                    r4 = false;
                    move = true; 
                }
            });
            $("#dragArea").mousemove(function(){
                /*if(move && !r4)
                {
                    anchoCuadro = $("#item").css("width");
                    anchoCuadro = anchoCuadro.replace('px', '');
                    altoCuadro = $("#item").css("height");
                    altoCuadro = altoCuadro.replace('px', '');
                    x = event.pageX - (anchoCuadro / 2);
                    y = event.pageY - (altoCuadro / 2);
                    if(y >= 200)
                        y = 200;
                    $("#dragItem").css("margin-left", x);
                    $("#dragItem").css("margin-top", y);
                }*/
            });
            $("#item").mouseup(function(){
                move = false;
            });
            $("#item").resizable({
                ghost: true,
                helper: "resizable-helper",
                handles: "n, e, s, w"
            });
            $("#item").draggable();
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
            }

            .container {
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                display: inline-block;
                border: 1px solid blue;
                border-color: #000000;
            }

            .title {
                font-size: 96px;
            }
            .cResize{
                background-color: #cccccc;
            }
            .cResize:Hover{
                background-color: #737373;
            }
            #myCanvas {
            }   
        </style>
        <style>
.filter-table .quick { margin-left: 0.5em; font-size: 0.8em; text-decoration: none; }
.fitler-table .quick:hover { text-decoration: underline; }
td.alt { background-color: #ffc; background-color: rgba(255, 255, 0, 0.2); }
</style> <!-- or put the styling in your stylesheet -->
    </head>
    <body>
        <div style="margin-top:12px;height: 200px;" id="dragArea">
            <div id="dragItem" style="margin-left: 100px;position: relative;height: 1114;width: 512">
                <img id="item" style="border-color: black;border-width: 5px;border-style: solid;" src="/images/SH/deadpool.jpg">
            </div>
        </div>
        <!--<div style="margin-top:12px;height: 250px;position: absolute;" id="dragArea2">
            <div id="dragItem" style="margin-left: 100px">
                <div id="cResize1" style="height: 10px;width: 10px;background-color: gray;margin-top: -5px;margin-left: -5px;position: absolute;cursor: hand;"></div>
                <div id="cResize2" style="height: 10px;width: 10px;background-color: gray;margin-top: -5px;margin-left: 45px;position: absolute;cursor: hand;"></div>
                <div id="cResize3" style="height: 10px;width: 10px;background-color: gray;margin-top: 45px;margin-left: -5px;position: absolute;cursor: hand;"></div>
                <div id="cResize4" style="height: 10px;width: 10px;background-color: gray;margin-top: 45px;margin-left: 45px;position: absolute;cursor: hand;"></div>
                <div id="item" style="height: 50px;width: 50px;background-color: blue">
                    
                </div>
            </div>
        </div>-->
                <label id="label">
                    
                </label>
    </body>
</html>