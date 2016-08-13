<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta property="og:title" content="Personaliza tu Case aquí!" />
    <meta property="og:image" content="image url here" />
    <meta property="og:type" content="http://lovecaselove.com" />
    
    <title>Crea tu Funda Personalizada en CASE LOVE</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/sb-admin.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="/css/customs.css"/>
    <link rel="stylesheet" href="/css/editorStyles.css"/>

    <script src="/js/jquery.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/editorVendor.js"></script>
    <script src="/js/editors.js"></script>

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
            <ul class="nav navbar-nav side-nav gothamFont">
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

    @include('cases2')

    <div ng-show="menu.agregarTextoMenu" class="popMenu" style="width: 25%;">
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
                <option value="Bayformance"  style="font-family:'Bayformance' !important;"><span >Bayformance</span></option>
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
        <div class="navbar navbar-inverse navbar-fixed-bottom"  id="container1">
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

            <!--<button ng-click"elegirTipo()" class="btn btn-default hidden-xs">
                Tipo de Case: {[{tipoSeleccionado}]}
            </button>-->
            
            <button style="margin:15px !important;" ng-click="eligirCaseMenu()" class="btn btn-default hidden-xs">
                Dispositivo: {[{dispositivoSeleccionado}]}
                <li class="fa fa-arrow-down"></li>
            </button>

            <button style="margin-top: 15px !important; margin-left: 15px !important;" ng-click="eligirCaseMenu()"
                    class="btn btn-default hidden-lg hidden-md hidden-sm">
                {[{dispositivoSeleccionado}]}
                <li class="fa fa-arrow-down"></li>
            </button>

            <!-- LG MD -->  
            <div class="lineHeader1 hidden-xs hidden-sm">
                <div class="col-md-3" style="padding-left: 0px; margin-top:5px;"><h3 style="font-weight: bold; margin-top: 0px;">$299</h3></div>
                <div class="col-md-9">
                    <a class="btn btn-default boton-hover" style="background-color:#ff017e; color:white; font-weight: bold;" ng-click="guardar()">COMPRAR</a>
                    <p style="font-weight: bold;">Envío incluido</p>
                </div>
            </div>
            <!-- SM -->
            <div class="lineHeader2 hidden-xs hidden-md hidden-lg">
                <div class="col-md-3" style="padding-right: 0px; margin-right: 5px;"><h3>$299</h3></div>
                <div class="col-md-9">
                    <a class="btn btn-default boton-hover" style="background-color:#ff017e; color:white; font-weight: bold;" ng-click="guardar()">COMPRAR</a>
                    <p style="font-weight: bold;">Envío incluido</p>
                </div>
            </div>

            <!-- XS -->
            <div class="lineHeader3 hidden-sm hidden-md hidden-lg">
                <div class="col-xs-3" style="padding-left: -5px!important;"><h3>$299</h3></div>
                <div class="col-xs-20">
                    <a class="btn btn-default boton-hover" style="background-color:#ff017e; color:white; font-weight: bold;" ng-click="guardar()">Comprar</a>
                    <p style="font-weight: bold;">Envío incluido</p>    
                </div>
            </div>

            <div class="lineHeader hidden-sm hidden-xs">
                <img src="/images/mejorResultado.png">
            </div>
            <!--
            <div class="lineHeader hidden-xs hidden-sm">
                <span class="header-x-shareit">Compártelo!</span>
                <br>
                <li class="fa fa-facebook header-x-icon"></li>
                <li class="fa fa-twitter header-x-icon"></li>
                <li class="fa fa-google header-x-icon"></li>
                <li class="fa fa-tumblr header-x-icon"></li>
            </div>
            -->


        </div>
        <div style="background-color: rgb(237,237,237)" id="cont" ng-model="files" ngf-drop
             ngf-drop-available="dropAvailable">
            <canvas id="c" width="900" height="500">
                <!-- Provide fallback -->
            </canvas>

        </div>
        <canvas id="cFinal" width="900" height="1000" class="hidden">
            <!-- Provide fallback -->
        </canvas>

        <!--Start of Zopim Live Chat Script
        <script type="text/javascript">
        window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
        _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="//v2.zopim.com/?3o5MYk0dMnTpytqcBhBPGqCuAqw9yUXc";z.t=+new Date;$.
        type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
        </script>
        <!--End of Zopim Live Chat Script-->

        
    </div>
</div>
        
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
                                <div class="col-md-3 col-sm-6 col-xs-6">

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
                                <li role="presentation" ng-class="{'active': chComics}">
                                    <a href="#" ng-click="caCm()">Comics</a>
                                </li>
                                <li role="presentation" ng-class="{'active': chEmoji}">
                                    <a href="#" ng-click="caE()">Emoji</a>
                                </li>
                                <li role="presentation" ng-class="{'active': chQuotesgram}">
                                    <a href="#" ng-click="caQ()">Quotesgram</a>
                                </li>
                                <li role="presentation" ng-class="{'active': chColors}">
                                    <a href="#" ng-click="caC()">Pretty Colors</a>
                                </li>          
                                <li role="presentation" ng-class="{'active': chHearts}">
                                    <a href="#" ng-click="caH()">Hearts</a>
                                </li>
                            </ul>

                            <!-- CLIPARTS DESKTOP -->

                            <div ng-show="caHearts" class="hidden-xs">
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/01.png')"
                                             src="/images/cliparts/hearts/01.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/02.png')"
                                             src="/images/cliparts/hearts/02.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/03.png')"
                                             src="/images/cliparts/hearts/03.png" 
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/04.png')"
                                             src="/images/cliparts/hearts/04.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/05.png')"
                                             src="/images/cliparts/hearts/05.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/06.png')"
                                             src="/images/cliparts/hearts/06.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/07.png')"
                                             src="/images/cliparts/hearts/07.png" 
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/08.png')"
                                             src="/images/cliparts/hearts/08.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/09.png')"
                                             src="/images/cliparts/hearts/09.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/10.png')"
                                             src="/images/cliparts/hearts/10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/11.png')"
                                             src="/images/cliparts/hearts/11.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/12.png')"
                                             src="/images/cliparts/hearts/12.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/13.png')"
                                             src="/images/cliparts/hearts/13.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/14.png')"
                                             src="/images/cliparts/hearts/14.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/15.png')"
                                             src="/images/cliparts/hearts/15.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/16.png')"
                                             src="/images/cliparts/hearts/16.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/17.png')"
                                             src="/images/cliparts/hearts/17.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/18.png')"
                                             src="/images/cliparts/hearts/18.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/19.png')"
                                             src="/images/cliparts/hearts/19.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/20.png')"
                                             src="/images/cliparts/hearts/20.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/21.png')"
                                             src="/images/cliparts/hearts/21.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/22.png')"
                                             src="/images/cliparts/hearts/22.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/23.png')"
                                             src="/images/cliparts/hearts/23.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/24.png')"
                                             src="/images/cliparts/hearts/24.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/25.png')"
                                             src="/images/cliparts/hearts/25.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-3 col-sm-2 col-sm-offset-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/26.png')"
                                             src="/images/cliparts/hearts/26.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/27.png')"
                                             src="/images/cliparts/hearts/27.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/28.png')"
                                             src="/images/cliparts/hearts/28.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                            </div>

                            <div ng-show="caColors" class="hidden-xs">
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/01.png')"
                                             src="/images/cliparts/colors/01.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/02.png')"
                                             src="/images/cliparts/colors/02.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/03.png')"
                                             src="/images/cliparts/colors/03.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/04.png')"
                                             src="/images/cliparts/colors/04.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/05.png')"
                                             src="/images/cliparts/colors/05.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/06.png')"
                                             src="/images/cliparts/colors/06.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/07.png')"
                                             src="/images/cliparts/colors/07.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/08.png')"
                                             src="/images/cliparts/colors/08.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/09.png')"
                                             src="/images/cliparts/colors/09.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/10.png')"
                                             src="/images/cliparts/colors/10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/11.png')"
                                             src="/images/cliparts/colors/11.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/12.png')"
                                             src="/images/cliparts/colors/12.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/13.png')"
                                             src="/images/cliparts/colors/13.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/14.png')"
                                             src="/images/cliparts/colors/14.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/15.png')"
                                             src="/images/cliparts/colors/15.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/16.png')"
                                             src="/images/cliparts/colors/16.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/17.png')"
                                             src="/images/cliparts/colors/17.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/18.png')"
                                             src="/images/cliparts/colors/18.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/19.png')"
                                             src="/images/cliparts/colors/19.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/20.png')"
                                             src="/images/cliparts/colors/20.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/21.png')"
                                             src="/images/cliparts/colors/21.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/22.png')"
                                             src="/images/cliparts/colors/22.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/23.png')"
                                             src="/images/cliparts/colors/23.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/24.png')"
                                             src="/images/cliparts/colors/24.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/28.png')"
                                             src="/images/cliparts/colors/28.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-4 col-sm-2 col-sm-offset-4">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/26.png')"
                                             src="/images/cliparts/colors/26.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/27.png')"
                                             src="/images/cliparts/colors/27.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div><!--
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/25.png')"
                                             src="/images/cliparts/colors/25.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>-->
                                </div>
                            </div>

                            <div ng-show="caQuotesgram" class="hidden-xs">
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-md-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q01.png')"
                                             src="/images/cliparts/quotesgram/q01.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q13.png')"
                                             src="/images/cliparts/quotesgram/q13.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q03.png')"
                                             src="/images/cliparts/quotesgram/q03.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q04.png')"
                                             src="/images/cliparts/quotesgram/q04.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q05.png')"
                                             src="/images/cliparts/quotesgram/q05.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-md-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q06.png')"
                                             src="/images/cliparts/quotesgram/q06.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q07.png')"
                                             src="/images/cliparts/quotesgram/q07.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q08.png')"
                                             src="/images/cliparts/quotesgram/q08.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q09.png')"
                                             src="/images/cliparts/quotesgram/q09.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q10.png')"
                                             src="/images/cliparts/quotesgram/q10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 col-md-offset-2 col-sm-2 col-md-offset-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q14.png')"
                                             src="/images/cliparts/quotesgram/q14.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q12.png')"
                                             src="/images/cliparts/quotesgram/q12.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q02.png')"
                                              src="/images/cliparts/quotesgram/q02.png"
                                              class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q11.png')"
                                              src="/images/cliparts/quotesgram/q11.png"
                                              class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                            </div>

                            <div ng-show="caComics" class="hidden-xs">
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c01.png')"
                                             src="/images/cliparts/comics/c01.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c02.png')"
                                             src="/images/cliparts/comics/c02.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c06.png')"
                                             src="/images/cliparts/comics/c06.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c03.png')"
                                             src="/images/cliparts/comics/c03.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c09.png')"
                                             src="/images/cliparts/comics/c09.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c10.png')"
                                             src="/images/cliparts/comics/c10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c11.png')"
                                             src="/images/cliparts/comics/c11.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c12.png')"
                                             src="/images/cliparts/comics/c12.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c07.png')"
                                             src="/images/cliparts/comics/c07.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c14.png')"
                                             src="/images/cliparts/comics/c14.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-md-offset-2 col-sm-2 col-sm-offset-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c05.png')"
                                             src="/images/cliparts/comics/c05.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c04.png')"
                                             src="/images/cliparts/comics/c04.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c13.png')"
                                             src="/images/cliparts/comics/c13.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c08.png')"
                                             src="/images/cliparts/comics/c08.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                </div>
                            </div>
                            <div ng-show="caEmoji" class="hidden-xs">
                                <div class="row ">
                                    <div class="col-md-1 col-md-offset-1 col-sm-1 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e01.png')"
                                             src="/images/cliparts/emoji/e01.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e02.png')"
                                             src="/images/cliparts/emoji/e02.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e03.png')"
                                             src="/images/cliparts/emoji/e03.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e04.png')"
                                             src="/images/cliparts/emoji/e04.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e05.png')"
                                             src="/images/cliparts/emoji/e05.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e06.png')"
                                             src="/images/cliparts/emoji/e06.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e07.png')"
                                             src="/images/cliparts/emoji/e07.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e08.png')"
                                             src="/images/cliparts/emoji/e08.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e09.png')"
                                             src="/images/cliparts/emoji/e09.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e10.png')"
                                             src="/images/cliparts/emoji/e10.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-1 col-md-offset-1 col-sm-1 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e11.png')"
                                             src="/images/cliparts/emoji/e11.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e12.png')"
                                             src="/images/cliparts/emoji/e12.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e13.png')"
                                             src="/images/cliparts/emoji/e13.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e14.png')"
                                             src="/images/cliparts/emoji/e14.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e15.png')"
                                             src="/images/cliparts/emoji/e15.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e16.png')"
                                         src="/images/cliparts/emoji/e16.png" 
                                         class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e17.png')"
                                             src="/images/cliparts/emoji/e17.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e18.png')"
                                             src="/images/cliparts/emoji/e18.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e19.png')"
                                             src="/images/cliparts/emoji/e19.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e20.png')"
                                             src="/images/cliparts/emoji/e20.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-1 col-md-offset-1 col-sm-1 col-sm-offset-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e21.png')"
                                             src="/images/cliparts/emoji/e21.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e22.png')"
                                             src="/images/cliparts/emoji/e22.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e23.png')"
                                             src="/images/cliparts/emoji/e23.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e24.png')"
                                             src="/images/cliparts/emoji/e24.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e25.png')"
                                             src="/images/cliparts/emoji/e25.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e26.png')"
                                             src="/images/cliparts/emoji/e26.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e27.png')"
                                             src="/images/cliparts/emoji/e27.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e28.png')"
                                             src="/images/cliparts/emoji/e28.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e29.png')"
                                             src="/images/cliparts/emoji/e29.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-1 col-sm-1">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e30.png')"
                                             src="/images/cliparts/emoji/e30.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                            </div>

                            <!-- Fin de DESKTOP -->

                            <!-- CLIPARTS XS -->
                            
                            <div ng-show="caHearts" class="hidden-lg hidden-md hidden-sm">
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/01.png')"
                                             src="/images/cliparts/hearts/01.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/02.png')"
                                             src="/images/cliparts/hearts/02.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/03.png')"
                                             src="/images/cliparts/hearts/03.png" 
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/04.png')"
                                             src="/images/cliparts/hearts/04.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/05.png')"
                                             src="/images/cliparts/hearts/05.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/06.png')"
                                             src="/images/cliparts/hearts/06.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/07.png')"
                                             src="/images/cliparts/hearts/07.png" 
                                             class="img-responsive img-rounded bb"/>

                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/08.png')"
                                             src="/images/cliparts/hearts/08.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/09.png')"
                                             src="/images/cliparts/hearts/09.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/10.png')"
                                             src="/images/cliparts/hearts/10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/11.png')"
                                             src="/images/cliparts/hearts/11.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/12.png')"
                                             src="/images/cliparts/hearts/12.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/13.png')"
                                             src="/images/cliparts/hearts/13.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/14.png')"
                                             src="/images/cliparts/hearts/14.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/15.png')"
                                             src="/images/cliparts/hearts/15.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/16.png')"
                                             src="/images/cliparts/hearts/16.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/17.png')"
                                             src="/images/cliparts/hearts/17.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/18.png')"
                                             src="/images/cliparts/hearts/18.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/19.png')"
                                             src="/images/cliparts/hearts/19.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/20.png')"
                                             src="/images/cliparts/hearts/20.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/21.png')"
                                             src="/images/cliparts/hearts/21.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/22.png')"
                                             src="/images/cliparts/hearts/22.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/23.png')"
                                             src="/images/cliparts/hearts/23.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/24.png')"
                                             src="/images/cliparts/hearts/24.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/25.png')"
                                             src="/images/cliparts/hearts/25.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/26.png')"
                                             src="/images/cliparts/hearts/26.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/27.png')"
                                             src="/images/cliparts/hearts/27.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/hearts/28.png')"
                                             src="/images/cliparts/hearts/28.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                            </div>

                            <div ng-show="caColors" class="hidden-lg hidden-md hidden-sm">
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/01.png')"
                                             src="/images/cliparts/colors/01.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/02.png')"
                                             src="/images/cliparts/colors/02.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/03.png')"
                                             src="/images/cliparts/colors/03.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/04.png')"
                                             src="/images/cliparts/colors/04.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/05.png')"
                                             src="/images/cliparts/colors/05.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/06.png')"
                                             src="/images/cliparts/colors/06.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/07.png')"
                                             src="/images/cliparts/colors/07.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/08.png')"
                                             src="/images/cliparts/colors/08.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/09.png')"
                                             src="/images/cliparts/colors/09.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/10.png')"
                                             src="/images/cliparts/colors/10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/11.png')"
                                             src="/images/cliparts/colors/11.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/12.png')"
                                             src="/images/cliparts/colors/12.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/13.png')"
                                             src="/images/cliparts/colors/13.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/14.png')"
                                             src="/images/cliparts/colors/14.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/15.png')"
                                             src="/images/cliparts/colors/15.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/16.png')"
                                             src="/images/cliparts/colors/16.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/17.png')"
                                             src="/images/cliparts/colors/17.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/18.png')"
                                             src="/images/cliparts/colors/18.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/19.png')"
                                             src="/images/cliparts/colors/19.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/20.png')"
                                             src="/images/cliparts/colors/20.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/21.png')"
                                             src="/images/cliparts/colors/21.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/22.png')"
                                             src="/images/cliparts/colors/22.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/23.png')"
                                             src="/images/cliparts/colors/23.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/24.png')"
                                             src="/images/cliparts/colors/24.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/28.png')"
                                             src="/images/cliparts/colors/28.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/26.png')"
                                             src="/images/cliparts/colors/26.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/27.png')"
                                             src="/images/cliparts/colors/27.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/colors/25.png')"
                                             src="/images/cliparts/colors/25.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                            </div>

                            <div ng-show="caQuotesgram" class="hidden-lg hidden-md hidden-sm">
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q01.png')"
                                             src="/images/cliparts/quotesgram/q01.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q13.png')"
                                             src="/images/cliparts/quotesgram/q13.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q03.png')"
                                             src="/images/cliparts/quotesgram/q03.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q04.png')"
                                             src="/images/cliparts/quotesgram/q04.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q05.png')"
                                             src="/images/cliparts/quotesgram/q05.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q06.png')"
                                             src="/images/cliparts/quotesgram/q06.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q07.png')"
                                             src="/images/cliparts/quotesgram/q07.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q08.png')"
                                             src="/images/cliparts/quotesgram/q08.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q09.png')"
                                             src="/images/cliparts/quotesgram/q09.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q10.png')"
                                             src="/images/cliparts/quotesgram/q10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q14.png')"
                                             src="/images/cliparts/quotesgram/q14.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q12.png')"
                                             src="/images/cliparts/quotesgram/q12.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q02.png')"
                                              src="/images/cliparts/quotesgram/q02.png"
                                              class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/quotesgram/q11.png')"
                                              src="/images/cliparts/quotesgram/q11.png"
                                              class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                            </div>

                            <div ng-show="caComics" class="hidden-lg hidden-md hidden-sm">
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c01.png')"
                                             src="/images/cliparts/comics/c01.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c02.png')"
                                             src="/images/cliparts/comics/c02.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c06.png')"
                                             src="/images/cliparts/comics/c06.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c03.png')"
                                             src="/images/cliparts/comics/c03.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c05.png')"
                                             src="/images/cliparts/comics/c05.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c04.png')"
                                             src="/images/cliparts/comics/c04.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c13.png')"
                                             src="/images/cliparts/comics/c13.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c08.png')"
                                             src="/images/cliparts/comics/c08.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-sm-3 col-xs-3  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c14.png')"
                                             src="/images/cliparts/comics/c14.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c10.png')"
                                             src="/images/cliparts/comics/c10.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c11.png')"
                                             src="/images/cliparts/comics/c11.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c12.png')"
                                             src="/images/cliparts/comics/c12.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-3 col-md-offset-3 col-sm-3 col-sm-offset-3 col-xs-3 col-xs-offset-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c07.png')"
                                             src="/images/cliparts/comics/c07.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3">
                                        <img ng-click="agregarClipArt('/images/cliparts/comics/c09.png')"
                                             src="/images/cliparts/comics/c09.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                            </div>
                            <div ng-show="caEmoji" class="hidden-lg hidden-md hidden-sm">
                                <div class="row ">
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e01.png')"
                                             src="/images/cliparts/emoji/e01.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e02.png')"
                                             src="/images/cliparts/emoji/e02.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e03.png')"
                                             src="/images/cliparts/emoji/e03.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e04.png')"
                                             src="/images/cliparts/emoji/e04.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e05.png')"
                                             src="/images/cliparts/emoji/e05.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e06.png')"
                                             src="/images/cliparts/emoji/e06.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e07.png')"
                                             src="/images/cliparts/emoji/e07.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e08.png')"
                                             src="/images/cliparts/emoji/e08.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e09.png')"
                                             src="/images/cliparts/emoji/e09.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e10.png')"
                                             src="/images/cliparts/emoji/e10.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e11.png')"
                                             src="/images/cliparts/emoji/e11.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e12.png')"
                                             src="/images/cliparts/emoji/e12.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e13.png')"
                                             src="/images/cliparts/emoji/e13.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e14.png')"
                                             src="/images/cliparts/emoji/e14.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e15.png')"
                                             src="/images/cliparts/emoji/e15.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e16.png')"
                                         src="/images/cliparts/emoji/e16.png" 
                                         class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e17.png')"
                                             src="/images/cliparts/emoji/e17.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e18.png')"
                                             src="/images/cliparts/emoji/e18.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e19.png')"
                                             src="/images/cliparts/emoji/e19.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e20.png')"
                                             src="/images/cliparts/emoji/e20.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e21.png')"
                                             src="/images/cliparts/emoji/e21.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e22.png')"
                                             src="/images/cliparts/emoji/e22.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e23.png')"
                                             src="/images/cliparts/emoji/e23.png"
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e24.png')"
                                             src="/images/cliparts/emoji/e24.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e25.png')"
                                             src="/images/cliparts/emoji/e25.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2  ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e26.png')"
                                             src="/images/cliparts/emoji/e26.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e27.png')"
                                             src="/images/cliparts/emoji/e27.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e28.png')"
                                             src="/images/cliparts/emoji/e28.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e29.png')"
                                             src="/images/cliparts/emoji/e29.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                    <div class="col-md-2 col-sm-2 col-xs-2 ">
                                        <img ng-click="agregarClipArt('/images/cliparts/emoji/e30.png')"
                                             src="/images/cliparts/emoji/e30.png" 
                                             class="img-responsive img-rounded bb"/>
                                    </div>
                                </div>
                            </div>

                            <!-- Fin de XS -->
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
                            <button type="button" class="close" ng-click="close('Cancel')" data-dismiss="modal" aria-hidden="true">&times;</button>
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