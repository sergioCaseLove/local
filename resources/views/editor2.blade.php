<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Crea tu Case - Case Love</title>
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/sb-admin.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/css/custom.css"/>
    <link rel="stylesheet" href="/css/editorStyles.css"/>

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/editorVendor.js"></script>
    <script src="/js/editor.js"></script>
</head>

<body ng-app="main" ng-controller="mainCtrl" class="gothamFont">
<div id="wrapper">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="http://lovecaselove.com">
                <img src="/images/logo.png">
            </a>
        </div>
        <div class="collapse navbar-collapse menuColors">
            <ul class="nav navbar-nav side-nav">
                <li>
                    <a ngf-select ngf-change="upload($files)" style="color:black;">
                        <img src="/images/addIcon.png" class="imageIcon"> Subir Foto
                    </a>
                </li>
                <li>
                    <a ng-click="agregarTexto()" style="color:black;">
                        <img src="/images/textIcon.png" class="imageIcon"> Insertar Texto
                    </a>
                </li>
                <li>
                    <a ng-click="abrirColorFondoMenu()" style="color:black;">
                        <img src="/images/backgroundIcon.png" class="imageIcon"> Fondo
                    </a>
                </li>
                <li>
                    <a ng-click="abrirClipArtsMenu()" style="color:black;">
                        <img src="/images/clipartIcon.png" class="imageIcon"> Cliparts
                    </a>
                </li>
                <li>
                    <a ng-click="vistaPrevia()" style="color:black;">
                        <img src="/images/previewIcon.png" class="imageIcon"> Vista Previa</a>
                </li>

            </ul>
        </div>
    </nav>

    @include('cases')

    <div ng-show="menu.agregarTextoMenu" class="popMenu" style="width: 280px;">
        <h3> Agregar Texto</h3>
        <div style="position:absolute;right:0;top:0;margin-top:12px;margin-right:15px;font-size:20px;">
            <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
        </div>
        <div class="popover-content">
            <textarea ng-model="textoContenido" ng-change="modificarTexto()" style="-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;" class="form-control">

                </textarea>
            <br>
            <select class="form-control" ng-model="fontTexto" ng-change="modificarTexto()">
                <option value="Arial" style="font-family:'Arial' !important;"><span >Arial</span></option>
                <option value="Times" style="font-family:'Times New Roman' !important;"><span  >Times</span></option>
                <option value="Bayformance"  style="font-family:Bayformance !important;"><span >Bayformance</span></option>
                <option value="dynamo_magicianregular" style="font-family:'dynamo_magicianregular' !important;"><span  >Dynamo</span></option>
                <option value="bushcraftone" style="font-family:'bushcraftone' !important;"><span  >bushcraftone</span></option>
                <option value="leckerlioneregular"  style="font-family:'bushcraftone' !important;"><span>leckerlioneregular</span></option>
                <option value="lobster_1.4regular" style="font-family:'lobster_1.4regular' !important;"><span  >lobster regular</span></option>
                <option value="serendipityregular" style="font-family:'serendipityregular' !important;"><span >serendipity regular</span></option>
                <option value="manamansaloregular" style="font-family:'manamansaloregular' !important;"><span >manamansalo regular</span></option>
                <option value="quartzo_demobold" style="font-family:'quartzo_demobold' !important;"><span  >quartzo demo bold</span></option>
                <option value="rough_notes_sampleregular" style="font-family:'rough_notes_sampleregular' !important;"><span  >rough notes sampleregular</span></option>
                <option value="sans_sararegular" style="font-family:'sans_sararegular' !important;"><span >sans sara regular</span></option>
                <option value="time_goes_by_so_slowlyregular" style="font-family:'time_goes_by_so_slowlyregular' !important;">  time goes by so slowly regular</option>
            </select>

            <div class="popover-content">
                <canvas width="223" height="253" id="textoColorCanvas"
                        ng-class="{cursorEyeDropper:dropperCursor}"></canvas>
            </div>

            <button ng-click="eyedropperTexto()" class="btn btn-default pull-right" style="margin: 10px;">
                <li class="fa fa-eyedropper"></li>
            </button>
            <div class="pull-right" ng-style="{
            'margin-top': '15px',
            'width': '20px',
            'height':'20px',
            'border-width': '1px',
            'border-style': 'solid',
            'border-color':'black',
            'background-color':eyeDroppingTextoColor}">

            </div>

            <br>
            <br>
            <a class="btn btn-default" ng-click="cerrarTodosLosMenus()">Listo</a>
        </div>
    </div>
    <div ng-show="menu.modificarFondoMenuModal" class="popMenuModal">
        <h3> Color de fondo</h3>

        <div style="position:absolute;right:0;top:0;">
            <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
        </div>
        <div>

            <canvas width="223" height="253" id="fondoColorCanvasModal" style="margin-left:15%"></canvas>
        </div>

        <button ng-click="eyedropper()" class="btn btn-default pull-right" style="margin: 10px;">
            <li class="fa fa-eyedropper"></li>
        </button>
        <div class="pull-right" ng-style="{
            'margin-top': '15px',
            'width': '20px',
            'height':'20px',
            'border-width': '1px',
            'border-style': 'solid',
            'border-color':'black',
            'background-color':eyeDroppingFondoColor}">

        </div>
        <br>
        <br>
        <br>
        <a class="btn btn-default pull-right" ng-click="cerrarTodosLosMenus()" style="margin: 10px;">Listo</a>

    </div>

    <div ng-show="menu.agregarTextoMenuModal" class="popMenuModal">
        <h3> Agregar Texto</h3>
        <div style="position:absolute;right:0;top:0;">
            <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
        </div>
        <div class="popover-content">
            <textarea ng-model="textoContenido" ng-change="modificarTexto()" style="-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;" class="form-control">
            </textarea>
            <br>
            <select class="form-control" ng-model="fontTexto" ng-change="modificarTexto()">
                <option value="Arial">Arial</option>
                <option value="Times">Times</option>
            </select>
            <div class="popover-content">
                <canvas width="223" height="253" id="textoColorCanvasModal"
                        ng-class="{cursorEyeDropper:dropperCursor}"></canvas>
            </div>
            <button ng-click="eyedropperTexto()" class="btn btn-default pull-right" style="margin: 10px;">
                <li class="fa fa-eyedropper"></li>
            </button>
            <div class="pull-right" ng-style="{
            'margin-top': '15px',
            'width': '20px',
            'height':'20px',
            'border-width': '1px',
            'border-style': 'solid',
            'border-color':'black',
            'background-color':eyeDroppingTextoColor}">

            </div>
            <a class="btn btn-default" ng-click="cerrarTodosLosMenus()">Listo</a>
        </div>
    </div>
    <div ng-show="menu.modificarFondoMenu" class="popMenu" style="width: 250px">
        <h3> Color de fondo</h3>

        <div style="position:absolute;right:0;top:0;">
            <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
        </div>
        <div class="popover-content">

            <canvas width="223" height="253" id="fondoColorCanvas"></canvas>
        </div>

        <button ng-click="eyedropper()" class="btn btn-default pull-right" style="margin: 10px;">
            <li class="fa fa-eyedropper"></li>
        </button>
        <div class="pull-right" ng-style="{
            'margin-top': '15px',
            'width': '20px',
            'height':'20px',
            'border-width': '1px',
            'border-style': 'solid',
            'border-color':'black',
            'background-color':eyeDroppingFondoColor}">

        </div>
        <br>
        <br>
        <br>
        <a class="btn btn-default pull-right" ng-click="cerrarTodosLosMenus()" style="margin: 10px;">Listo</a>

    </div>

    <div class="hidden-md hidden-sm hidden-lg menuBottom">
        <div class="navbar navbar-inverse navbar-fixed-bottom" id="container1">
            <div class="container" style="padding-left: 0px; padding-right: 0px;">
                <div class="col-xs-2 col-xs-offset-1 menuBottom" style="color:white; padding-top:8px; padding-left: 0px; padding-right: 0px; text-align: center;" ngf-select
                     ngf-change="upload($files)" data-toggle="tooltip" data-placement="top" title="Sube foto aquí">
                    <img src="/images/addIconW.png" class="imageIcon"> <div>Subir Foto</div>
                </div>
                <div class="col-xs-2 menuBottom" style="color:white; padding-top:8px; padding-left: 0px; padding-right: 0px;  text-align: center;" ng-click="agregarTextoModal()">
                    <img src="/images/textIconW.png" class="imageIcon"> <div>Insertar Texto</div>
                </div>
                <div class="col-xs-2 menuBottom" style="color:white; padding-top:8px; padding-left: 0px; padding-right: 0px;  text-align: center;" ng-click="abrirColorFondoMenuModal()">
                    <img src="/images/backgroundIconW.png" class="imageIcon"> <div>Fondo</div>
                </div>
                <div class="col-xs-2 menuBottom" style="color:white; padding-top:8px; padding-left: 0px; padding-right: 0px;  text-align: center;" ng-click="abrirClipArtsMenu()">
                    <img src="/images/clipartIconW.png" class="imageIcon"> <div>Cliparts</div>
                </div>
                <div class="col-xs-2 menuBottom" style="color:white; padding-top:8px; padding-left: 0px; padding-right: 0px;  text-align: center;" ng-click="vistaPrevia()">
                    <img src="/images/previewIconW.png" class="imageIcon"> <div>Vista Previa</div>
                </div>
            </div>
        </div>
    </div>

    <div id="page-wrapper">

        <div class="header-x">
            <button style="margin:15px !important;" ng-click="eligirCaseMenu()" class="btn btn-default hidden-xs">
                Dispositivo: {[{dispositivoSeleccionado}]}
                <li class="fa fa-arrow-down"></li>
            </button>

            <button style="margin:15px !important;" ng-click="eligirCaseMenu()"
                    class="btn btn-default hidden-lg hidden-md hidden-sm">
                {[{dispositivoSeleccionado}]}
                <li class="fa fa-arrow-down"></li>
            </button>


            <div class="lineHeader hidden-xs">
                <a><div class="carritoBoton" ng-click="carrito()"></div></a>
                <div class="saveBoton" ng-click="guardar()"></div>
            </div>

            <div class="lineHeader hidden-sm hidden-md hidden-lg">
                <button style="margin:5px !important; float:right;" ng-click="carrito()" class="btn btn-warning">
                    <i class="fa fa-shopping-cart fa-1"></i>
                </button>
                <button style="margin:5px !important; float:right;" ng-click="guardar()" class="btn btn-danger">
                    <i class="fa fa-plus fa-1"></i>
                </button>
            </div>

            <div class="lineHeader hidden-md hidden-sm hidden-xs">
                <img src="/images/mejorResultado.png">
            </div>

        </div>
        <div style="background-color: rgb(237,237,237)" id="cont" ng-model="files" ngf-drop
             ngf-drop-available="dropAvailable">
            <canvas id="c" width="900" height="500">
                < !-- Provide fallback -->
            </canvas>

        </div>
        <canvas id="cFinal" width="900" height="1000" class="hidden">
            < !-- Provide fallback -->
        </canvas>

        <script type="text/ng-template" id="collages.html">
            <div class="modal fade modal-wide">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" ng-click="close('Cancel')" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Collages</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row ">
                                <div class="col-md-3 col-sm-6 col-xs-6  ">

                                    <img ng-click="elegirCollage('/images/collages/1.png')" src="/images/collages/1.png"
                                         class="img-responsive img-rounded bb"/>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 ">
                                    <img ng-click="elegirCollage('/images/collages/2.png')" src="/images/collages/2.png"
                                         class="img-responsive img-rounded bb"/>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 ">
                                    <img ng-click="elegirCollage('/images/collages/3.png')" src="/images/collages/3.png"
                                         class="img-responsive img-rounded bb"/>

                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 ">
                                    {{--<img ng-click="elegirCollage('/images/collages/4.png')" src="/images/collages/4.png"--}}
                                         {{--class="img-responsive img-rounded bb"/>--}}
                                    <img ng-click="elegirCollage('/images/collages/7.png')" src="/images/collages/7.png"
                                         class="img-responsive img-rounded bb"/>

                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-3 col-sm-6 col-xs-6  ">

                                    <img ng-click="elegirCollage('/images/collages/5.png')" src="/images/collages/5.png"
                                         class="img-responsive img-rounded bb"/>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 ">
                                    <img ng-click="elegirCollage('/images/collages/6.png')" src="/images/collages/6.png"
                                         class="img-responsive img-rounded bb"/>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 ">
                                    <img ng-click="elegirCollage('/images/collages/9.png')" src="/images/collages/9.png"
                                         class="img-responsive img-rounded bb"/>

                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 ">
                                    {{--<img ng-click="elegirCollage('/images/collages/8.png')" src="/images/collages/8.png"--}}
                                         {{--class="img-responsive img-rounded bb"/>--}}
                                    <img ng-click="elegirCollage('/images/collages/10.png')"
                                         src="/images/collages/10.png" class="img-responsive img-rounded bb"/>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col-md-3 col-sm-6 col-xs-6  ">
                                    <img ng-click="elegirCollage('/images/collages/12.png')"
                                         src="/images/collages/12.png" class="img-responsive img-rounded bb"/>

                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 ">

                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 ">
                                    {{--<img ng-click="elegirCollage('/images/collages/11.png')"--}}
                                         {{--src="/images/collages/11.png" class="img-responsive img-rounded bb"/>--}}

                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 ">


                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" ng-click="cancelar()" class="btn btn-default">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </script>
        <script type="text/ng-template" id="cliparts.html">
            <div class="modal fade modal-wide">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" ng-click="close('Cancel')" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            <h4 class="modal-title">ClipArts</h4>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs">
                                <li role="presentation" ng-class="{'active': chHandrawings}">
                                    <a href="#" ng-click="caHd()">Handrawings</a>
                                </li>
                                <li role="presentation" ng-class="{'active': chHearts}">
                                    <a href="#" ng-click="caH()">Hearts</a>
                                </li>
                                <li role="presentation" ng-class="{'active': chFrases}">
                                    <a href="#" ng-click="caF()">Frases</a>
                                </li>
                                <li role="presentation" ng-class="{'active': chColors}">
                                    <a href="#" ng-click="caC()">Pretty Colors</a>
                                </li>
                            </ul>
                            <br>

                            <div ng-show="caHandrawings">
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">

                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/1.png')"
                                             src="/images/cliparts/handrawings/1.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/2.png')"
                                             src="/images/cliparts/handrawings/2.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/3.png')"
                                             src="/images/cliparts/handrawings/3.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/4.png')"
                                             src="/images/cliparts/handrawings/4.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6  ">

                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/5.png')"
                                             src="/images/cliparts/handrawings/5.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/6.png')"
                                             src="/images/cliparts/handrawings/6.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/7.png')"
                                             src="/images/cliparts/handrawings/7.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/8.png')"
                                             src="/images/cliparts/handrawings/8.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6  ">

                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/9.png')"
                                             src="/images/cliparts/handrawings/9.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/10.png')"
                                             src="/images/cliparts/handrawings/10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/11.png')"
                                             src="/images/cliparts/handrawings/11.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/handrawings/12.png')"
                                             src="/images/cliparts/handrawings/12.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                            </div>

                            <div ng-show="caHearts">
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">

                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/1.png')"
                                             src="/images/cliparts/hearts/1.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/2.png')"
                                             src="/images/cliparts/hearts/2.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/3.png')"
                                             src="/images/cliparts/hearts/3.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/4.png')"
                                             src="/images/cliparts/hearts/4.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6  ">

                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/5.png')"
                                             src="/images/cliparts/hearts/5.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/6.png')"
                                             src="/images/cliparts/hearts/6.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/7.png')"
                                             src="/images/cliparts/hearts/7.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/8.png')"
                                             src="/images/cliparts/hearts/8.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6  ">

                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/9.png')"
                                             src="/images/cliparts/hearts/9.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/10.png')"
                                             src="/images/cliparts/hearts/10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/11.png')"
                                             src="/images/cliparts/hearts/11.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/12.png')"
                                             src="/images/cliparts/hearts/12.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                            </div>

                            <div ng-show="caFrases">
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">

                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/1.png')"
                                             src="/images/cliparts/refuentes/1.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/2.png')"
                                             src="/images/cliparts/refuentes/2.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/3.png')"
                                             src="/images/cliparts/refuentes/3.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/4.png')"
                                             src="/images/cliparts/refuentes/4.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6  ">

                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/5.png')"
                                             src="/images/cliparts/refuentes/5.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/6.png')"
                                             src="/images/cliparts/refuentes/6.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/7.png')"
                                             src="/images/cliparts/refuentes/7.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/8.png')"
                                             src="/images/cliparts/refuentes/8.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6  ">

                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/9.png')"
                                             src="/images/cliparts/refuentes/9.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/10.png')"
                                             src="/images/cliparts/refuentes/10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/11.png')"
                                             src="/images/cliparts/refuentes/11.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/refuentes/12.png')"
                                             src="/images/cliparts/refuentes/12.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                            </div>

                            <div ng-show="caColors">
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">

                                        <img ng-click="agregarClipArt('/images/cliparts/colors/1.png')"
                                             src="/images/cliparts/colors/1.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/2.png')"
                                             src="/images/cliparts/colors/2.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/3.png')"
                                             src="/images/cliparts/colors/3.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/4.png')"
                                             src="/images/cliparts/colors/4.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6  ">

                                        <img ng-click="agregarClipArt('/images/cliparts/colors/5.png')"
                                             src="/images/cliparts/colors/5.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/6.png')"
                                             src="/images/cliparts/colors/6.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/7.png')"
                                             src="/images/cliparts/colors/7.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/8.png')"
                                             src="/images/cliparts/colors/8.png" class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-6 col-xs-6  ">

                                        <img ng-click="agregarClipArt('/images/cliparts/colors/9.png')"
                                             src="/images/cliparts/colors/9.png" class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/10.png')"
                                             src="/images/cliparts/colors/10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/11.png')"
                                             src="/images/cliparts/colors/11.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-6 col-xs-6 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/12.png')"
                                             src="/images/cliparts/colors/12.png"
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" ng-click="cancelar()" class="btn btn-default">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </script>
        <script type="text/ng-template" id="modal.html">
            <div class="modal fade modal-wide">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" ng-click="close('Cancel')" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Carrito</h4>
                        </div>
                        <div class="modal-body">
                            <div class="hidden-lg hidden-md hidden-sm">
                                <div class="row" ng-repeat="casee in archivosGuardados track by $index" style="margin-bottom:20px;">
                                    <div class="col-xs-6">
                                        <img style="width:100px;" ng-src="/images/saved/case_{[{casee.casee}]}.png"
                                             alt="..." class="img-responsive"/>
                                    </div>
                                    <div class="col-xs-6">
                                        <b>Modelo</b>: <br> {[{casee.modelo}]}<br><br>

                                        <b>Cantidad</b>:  <br><input type="number" class="form-control" ng-model="casee.piezas"><br>

                                        <b>Precio</b>:<br><br>

                                        <b>Acciones</b>:<br>
                                        <a class="btn btn-danger" ng-click="eliminar($index)">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                            <table id="cart" class="table table-hover table-condensed hidden-xs">
                                <thead>
                                <tr>
                                    <th style="width:70%">Case</th>
                                    <th style="width:10%">Modelo</th>
                                    <th style="width:10%" class="text-center">Cantidad</th>
                                    <th style="width:20%" class="text-center">Precio</th>
                                    <th style="width:20%" class="text-center">Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr ng-repeat="casee in archivosGuardados track by $index">
                                    <td data-th="Product">
                                        <img style="width:100px;" ng-src="/images/saved/case_{[{casee.casee}]}.png"
                                             alt="..." class="img-responsive"/>
                                    </td>
                                    <td>
                                        {[{casee.modelo}]}
                                    </td>
                                    <td data-th="Quantity">
                                        <input type="number" class="form-control text-center" ng-model="casee.piezas">
                                    </td>
                                    <td class="text-center">
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-default" ng-click="eliminar($index)">Eliminar</a>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr class="visible-xs">
                                    <td class="text-center"></td>
                                </tr>
                                <tr>
                                    <td class="hidden-xs"></td>
                                    <td class="hidden-xs"></td>
                                    <td class="hidden-xs text-center"><strong>{[{totalPiezas()}]}</strong></td>
                                    <td></td>
                                    <td style="width:20%" class="text-center"></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" ng-click="cancelar()" class="btn btn-default">Cancelar</button>
                            <button type="button" ng-click="hacerPedido()" class="btn btn-primary" data-dismiss="modal">
                                Hacer pedido
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </script>
        <script type="text/ng-template" id="hacerPedido.html">
            <div class="modal fade modal-wide">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" ng-click="close('Cancel')" data-dismiss="modal"
                                    aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Datos del cliente</h4>
                        </div>
                        <div class="modal-body">
                            <ul class="nav nav-tabs nav-justified">
                                <li role="presentation" ng-class="{active:showLogin}"><a ng-click="login()">Login</a>
                                </li>
                                <li role="presentation" ng-class="{active:!showLogin}"><a ng-click="registrar()">Única
                                        Vez</a></li>
                            </ul>
                            <br>

                            <div ng-show="showLogin">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        Usuario:
                                        <input type="text" ng-model="usuario" class="form-control">
                                        <br> Contraseña:
                                        <input type="password" ng-model="pass" class="form-control">
                                        <br>

                                    </div>
                                </div>
                            </div>
                            <div ng-hide="showLogin">
                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3">
                                        Nombre:
                                        <input type="text" ng-model="cliente_nombre" class="form-control">
                                        <br> Dirección:
                                        <input type="text" ng-model="cliente_dir" class="form-control">
                                        <br> RFC:
                                        <input type="text" ng-model="cliente_rfc" class="form-control">
                                        <br> Tipo de entrega:
                                        <input type="text" ng-model="tipo_entrega" class="form-control">
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" ng-click="cancelar()" class="btn btn-default">Cancelar</button>
                            <button type="button" ng-click="enviar()" class="btn btn-primary" data-dismiss="modal">
                                Enviar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </script>


        <!-- /.container-fluid -->

    </div>
</div>

<div ng-show="loadingx"
     style="z-index: 999999;position: fixed;;top:0;left:0;width:100vw;height:100vh;background:rgba(255, 255, 255, 0.7);">
    <img ng-show="loadingx" src="/images/Heart.gif" style="top:50%;left:50%;position:fixed;margin-left:-250px;margin-top:-187px;">

</div>

<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

</body>

</html>