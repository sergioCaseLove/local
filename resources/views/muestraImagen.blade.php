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
        <script>

        imgGlobal = 0;


        function reDrawCanvasTemplate2(x, y, ancho, alto, vendor, model, imagen){
            console.log(imagen);
            $myCanvas = $("#myCanvasBack");
            $myCanvas.removeLayers();
            $myCanvas.addLayer({
                type:'image',
                source: '/images/CasesSlim/' + vendor + '/' + model + '/' + model + '-lines.png',
                //draggable: true,
                fillStyle: '#fff',
                strokeStyle: '#c33',
                strokeWidth: 2,
                x: 250, y: 300
            }).drawLayers();

            $myCanvas.drawImage({
                layer:true,
                type:'image',
                name:'imagen',
                source: imagen,
                draggable: true,
                bringToFront: true,
                fillStyle: '#fff',
                strokeStyle: '#c33',
                strokeWidth: 2,
                x: x, y: y,
                width: ancho, height: alto,
                handle: {
                    type: 'arc',
                    fillStyle: '#fff',
                    strokeStyle: '#c33',
                    strokeWidth: 2,
                    radius: 10
                }
            });
        }


        function reDrawCanvasTemplate(x, y, ancho, alto, vendor, model){
            $myCanvas = $("#myCanvasBack");
            $myCanvas.removeLayers();
            $myCanvas.addLayer({
                type:'image',
                source: '/images/CasesSlim/' + vendor + '/' + model + '/' + model + '-lines.png',
                //draggable: true,
                fillStyle: '#fff',
                strokeStyle: '#c33',
                strokeWidth: 2,
                x: 250, y: 300
            }).drawLayers();

            $myCanvas.drawImage({
                layer:true,
                type:'image',
                name:'imagen',
                source: imgGlobal,
                draggable: true,
                bringToFront: true,
                fillStyle: '#fff',
                strokeStyle: '#c33',
                strokeWidth: 2,
                x: x, y: y,
                width: ancho, height: alto,
                handle: {
                    type: 'arc',
                    fillStyle: '#fff',
                    strokeStyle: '#c33',
                    strokeWidth: 2,
                    radius: 10
                }
            });
        }

        function reDrawCanvasPreView(x, y, ancho, alto, vendor, model)
        {
            $myCanvas = $("#myCanvasFront");
            $myCanvas.removeLayers()
            //esta funcion lo que hace es redibujar el contenido del canvas con la imagen en la posicion en la que se acomodo pero no funciona :'v
            $myCanvas.addLayer({
                type:'image',
                source: '/images/CasesSlim/' + vendor + '/' + model + '/' + model + '-back.png',
                //draggable: true,
                fillStyle: '#fff',
                strokeStyle: '#c33',
                strokeWidth: 2,
                x: 250, y: 300,
            }).drawLayers()

            $myCanvas.drawImage({
                layer:true,
                type:'image',
                name:'imagen',
                source: imgGlobal,
                draggable: true,
                bringToFront: true,
                fillStyle: '#fff',
                strokeStyle: '#c33',
                strokeWidth: 2,
                x: x, y: y,
                width: ancho, height: alto
            });

            $myCanvas.drawImage({
                layer:true,
                source: '/images/CasesSlim/' + vendor + '/' + model + '/' + model + '-cover.png',
                //draggable: true,
                fillStyle: '#fff',
                name:'cover',
                bringToFront: true,
                strokeStyle: '#c33',
                strokeWidth: 2,
                bringToFront:true,
                x: 250, y: 300,
            });
            var imgEdit = document.createElement("img");
            imgEdit.src = document.getElementById("myCanvasFront").toDataURL();
            //console.log(imgEdit);
            $("#imgEdit").empty();
            $("#imgEdit").append(imgEdit);

            $("#myCanvasBack").hide();
            $("#myCanvasFront").show();
        }

        function getVendor()
        {
            $.get('getVendors',
            {
            },
            function(data, status)
            {
                $("#selector").empty();
                $("#selector").append("<option disabled selected></option>");
                $.each(data, function(inddex, obj){
                    $("#selector").append("<option value=" + obj + ">" + obj + "</option>");
                });
            });
        }

        function getModels(vendor)
        {
            $.get('getModels',
            {
                vendor: vendor
            },
            function(data, status)
            {
                $("#selector").empty();
                $("#selector").append("<option disabled selected></option>");
                $.each(data, function(inddex, obj){
                    console.log(obj);
                    $("#selector").append("<option value=" + obj.image + ">" + obj.show + "</option>");
                });
            });
        }


        function readURL(input, x, y, ancho, alto, vendor, model) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    imagen = e.target.result;
                    //console.log(imagen);
                    img = $("#myCanvasFront").getLayer('imagen');
                    img.source = imagen;
                    imgGlobal = imagen;
                    reDrawCanvasPreView(x, y, ancho, alto, vendor, model)
                    //console.log(e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(document).ready(function(){
            //inicializacion de las variables
            ancho = 100;
            alto = 100;
            x = 250;
            y = 300;
            vendor = 'Samsung';
            modelImage = 'Galaxy-A5';
            model = 'Galaxy-A5';
            imagen = 0;
            reDrawCanvasTemplate(x, y, ancho, alto, vendor, model);
            reDrawCanvasPreView(x, y, ancho, alto, vendor, model);
            getVendor();
            Dropzone.autoDiscover = false;
            /*$("#myCanvasFront").click(function () {
                $(this).attr("style", "position: absolute; width: 1124px; height: 494px; left: 0px; top: 0px; -webkit-user-select: none; cursor: default;display:none");
                $("#myCanvasBack").attr("style", "position: absolute; width: 1124px; height: 494px; left: 0px; top: 0px; -webkit-user-select: none; cursor: default;display:inblock");
                console.log("front");
            });
            $("#myCanvasBack").click(function () {
                $(this).attr("style", "position: absolute; width: 1124px; height: 494px; left: 0px; top: 0px; -webkit-user-select: none; cursor: default;display:none");
                $("#myCanvasFront").attr("style", "position: absolute; width: 1124px; height: 494px; left: 0px; top: 0px; -webkit-user-select: none; cursor: default;display:inblock");
                console.log("back");
            });*/
            $("#myCanvasFront").dblclick(function(){
                reDrawCanvasTemplate(x, y, ancho, alto, vendor, model);
                $("#myCanvasBack").show();
                $("#myCanvasFront").hide();
            });
            $("#myCanvasBack").dblclick(function(){
                reDrawCanvasPreView(x, y, ancho, alto, vendor, model);
            });
            $("#myCanvasBack").blur(function(){
                reDrawCanvasPreView(x, y, ancho, alto, vendor, model);
            });



            $("#imagenes").change(function(){
                //subir imagenes y desplegar un preview para despues poder seleccionarlas
                //la idea es solo dejar usar una pero igual hacer que se pueda con multiples.
                //$.each($("#imagenes"))

                imagen = readURL(this, x, y, ancho, alto, vendor, model);
                //console.log(imagen);
                //var files = $(this)[0].files[0].name;
                //alert(files);

            });



            $("#selector").change(function(){
                if($(this).attr('actual') == 'vendors'){
                    vendor = $(this).val();
                    //console.log($(this).val());
                    getModels($(this).val()); 
                    $(this).attr('actual', 'models');
                }
                else{
                    model = $(this).val();
                    console.log(model);
                    console.log($('#selector option[selected]').text());
                    reDrawCanvasTemplate(x, y, ancho, alto, vendor, model);
                    reDrawCanvasPreView(x, y, ancho, alto, vendor, model);
                }
            });



            /*$("#myCanvasBack").mousemove(function(){
                reDrawCanvasPreView(x, y, ancho, alto);

            });*/
                        /*$('#myCanvas').css('background-color', 'rgba(237, 237, 237, 1)');*/
            /*$("#myCanvasBack").mousedown(function(){
                //esta linea borra la cubierta del case para poder manipular la imagen 
                //$(this).removeLayer("cover");
                reDrawCanvasTemplate(x, y, ancho, alto);
                imagen.handle = "";

            });*/
            $("#myCanvasBack").mouseup(function(){
                //$(this).clearCanvas();
                //se redibuja la cubierta y se hacen logs del lugar donde estaba la imagen, esto solo es de prueba
                imagen = $(this).getLayer('imagen');
                //se recupera el lugar y tamaño en donde se puso la imagen para el preview al momento en el que se da click 
                //talvez lo mejor seria hacer esto cuando se suelta la imagen 
                ancho = imagen.width;
                alto = imagen.height;
                x = imagen.x;
                y = imagen.y;
                console.log("x: " + x + " y: " + y + " ancho: " + ancho + " alto: " + alto);
                reDrawCanvasTemplate(x, y, ancho, alto, vendor, model, modelImage);
            });
            var $myCanvas = $('#myCanvasBack');
            var $myCanvasFront = $('#myCanvasFront');
            /*function invert(params) {
                $(this).setPixels({
                    x: params.eventX, y: params.eventY,
                    width: 50, height: 50,
                    // loop through each pixel
                    each: function(px) {
                        px.r = 255 - px.r;
                        px.g = 255 - px.g;
                        px.b = 255 - px.b;
                    }
                });
            }

            2 canvas, el primero va a ser para mostrar la imagen con las lineas 
            el segundo va a mostrar la vista "final" del case
            cuando se de click en uno el otro aparece,
            en el primero la imagen va a estar completa y se van a ver los handlers 
            y en el segundo va a salir la imagen recortada sin los handlers

            $myCanvas.drawImage({
                layer: true,
                source: '{{$img}}',
                x: 150, y: 100,
                mousemove: invert
            });*/

        });
            /*$('#myCanvas').css('background-color', 'rgba(237, 237, 237, 1)');*/
            var $myCanvas = $('#myCanvasBack');
            /*function invert(params) {
                $(this).setPixels({
                    x: params.eventX, y: params.eventY,
                    width: 50, height: 50,
                    // loop through each pixel
                    each: function(px) {
                        px.r = 255 - px.r;
                        px.g = 255 - px.g;
                        px.b = 255 - px.b;
                    }
                });
            }

            $myCanvas.drawImage({
                layer: true,
                source: '{{$img}}',
                x: 150, y: 100,
                mousemove: invert
            });*/
            /*$myCanvas.addLayer({
                type:'image',
                source: '/images/cases/back-motog3.png',
                //draggable: true,
                fillStyle: '#fff',
                strokeStyle: '#c33',
                strokeWidth: 2,
                x: 300, y: 250,
                scale:0.7
            }).drawLayers();*/

            $myCanvas.drawImage({
                layer:true,
                type:'image',
                name:'imagen',
                source: '{{$img}}',
                draggable: true,
                bringToFront: true,
                fillStyle: '#fff',
                strokeStyle: '#c33',
                strokeWidth: 2,
                x: 300, y: 250,
                width: 170, height: 350,
                handle: {
                    type: 'arc',
                    fillStyle: '#fff',
                    strokeStyle: '#c33',
                    strokeWidth: 2,
                    radius: 10
                }
            });
/*
            $myCanvas.drawImage({
                layer:true,
                source: '/images/cases/cover-motog3.png',
                //draggable: true,
                fillStyle: '#fff',
                name:'cover',
                bringToFront: true,
                strokeStyle: '#c33',
                strokeWidth: 2,
                bringToFront:true,
                x: 300, y: 250,
                scale:0.7,
            });*/





/*
    $(document).ready(function() {
        // apply filterTable to all tables on this page
        //$('table').filterTable({filterExpression: 'filterTableFindAll'});
        $('table').filterTable({ // apply filterTable to all tables on this page
            inputSelector: '#busqueda'// use the existing input instead of creating a new one
        });
    });*/
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
                border: 1px solid blue;
                border-color: #000000;
            }

            .title {
                font-size: 96px;
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
        <select id="selector" actual="vendors">
        </select>
        <div style="margin-top:12px;" id="dragArea">
            <div style="position: absolute;">
                <canvas id="myCanvasBack" class="upper-canvas " width="500px" height="600px" style="  left: 0px; top: 0px; -webkit-user-select: none; cursor: default;background-color: gray" display:none;></canvas>
                <canvas id="myCanvasFront" class="upper-canvas " width="500px" height="600px" style="  left: 0px; top: 0px; -webkit-user-select: none; cursor: default;"></canvas>
            </div>
            <div style="background-color: blue;position:absolute;">
                <input type="file" multiple="multiple" id="imagenes" name="imagenes[]">
            </div>
        </div>
    </body>
</html>