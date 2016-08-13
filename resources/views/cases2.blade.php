<div style="display:none" ng-show="menu.elegirTipo" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Tipo de Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <div class="popover-content">
        <a ng-click="elegirTipoCase('SLIMCASES')" class="btn btn-default" style="width:100%">SLIMCASES</a>
        <br><br>
        <a ng-click="elegirTipoCase('RUBBER-CASE')" class="btn btn-default" style="width:100%">Rubber Case</a>
        <br><br>
        <a ng-click="elegirTipoCase('ANTISHOCK')" class="btn btn-default" style="width:100%">Antishock</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirTipo" class="popMenuModalDesktop hidden-xs">
    <h3>Seleccionar Tipo de Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <div class="popover-content">
        <a ng-click="elegirTipoCase('SLIMCASES')" class="btn btn-default" style="width:100%">SLIMCASES</a>
        <br><br>
        <a ng-click="elegirTipoCase('RUBBER CASE')" class="btn btn-default" style="width:100%">RUBBER CASE</a>
        <br><br>
        <a ng-click="elegirTipoCase('ANTISHOCK')" class="btn btn-default" style="width:100%">ANTISHOCK</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirMarcaAntishock" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Marca</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>    
    <a class="" style="margin-left:15px;" ng-click="elegirTipo()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirMarcaAntishock('Apple')" class="btn btn-default" style="width:100%">Apple</a>
        <br><br>
        <a ng-click="elegirMarcaAntishock('Samsung')" class="btn btn-default" style="width:100%">Samsung</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirMarcaAntishock" class="popMenuModalDesktop hidden-xs">
    <h3>Seleccionar Marca</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>    
    <a class="" style="margin-left:15px;" ng-click="elegirTipo()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirMarcaAntishock('Apple')" class="btn btn-default" style="width:100%">Apple</a>
        <br><br>
        <a ng-click="elegirMarcaAntishock('Samsung')" class="btn btn-default" style="width:100%">Samsung</a>
        <br>
    </div>
</div>

<div style="display:none" ng-show="menu.elegirMarcaRubberCase" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Marca</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>    
    <a class="" style="margin-left:15px;" ng-click="elegirTipo()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirMarca('Apple')" class="btn btn-default" style="width:100%">Apple</a>
        <br><br>
        <a ng-click="elegirMarca('Samsung')" class="btn btn-default" style="width:100%">Samsung</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirMarcaRubberCase" class="popMenuModalDesktop hidden-xs">
    <h3>Seleccionar Marca</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>    
    <a class="" style="margin-left:15px;" ng-click="elegirTipo()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirMarcaRubber('Apple')" class="btn btn-default" style="width:100%">Apple</a>
        <br><br>
        <a ng-click="elegirMarcaRubber('Samsung')" class="btn btn-default" style="width:100%">Samsung</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirMarca" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Marca</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <div class="popover-content">
        <a ng-click="elegirMarca('Sony')" class="btn btn-default" style="width:100%">Sony Xperia</a>
        <br><br>
        <a ng-click="elegirMarca('Samsung')" class="btn btn-default" style="width:100%">Samsung</a>
        <br><br>
        <a ng-click="elegirMarca('LG')" class="btn btn-default" style="width:100%">LG</a>
        <br><br>
        <a ng-click="elegirMarca('Motorola')" class="btn btn-default" style="width:100%">Motorola</a>
        <br><br>
        <a ng-click="elegirMarca('Apple')" class="btn btn-default" style="width:100%">Apple</a>
        <br><br>
        <a ng-click="elegirMarca('ZTE')" class="btn btn-default" style="width:100%">ZTE</a>
        <br><br>
        <a ng-click="elegirMarca('HTC')" class="btn btn-default" style="width:100%">HTC</a>
        <br><br>
        <a ng-click="elegirMarca('Huawei')" class="btn btn-default" style="width:100%">Huawei</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirMarca" class="popMenuModalDesktop hidden-xs">
    <h3>Seleccionar Marca</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>

    <div class="popover-content">
    <a ng-click="elegirMarca('Sony')" class="btn btn-default" style="width:100%">Sony Xperia</a>
        <br><br>
        <a ng-click="elegirMarca('Samsung')" class="btn btn-default" style="width:100%">Samsung</a>
        <br><br>
        <a ng-click="elegirMarca('LG')" class="btn btn-default" style="width:100%">LG</a>
        <br><br>
        <a ng-click="elegirMarca('Motorola')" class="btn btn-default" style="width:100%">Motorola</a>
        <br><br>
        <a ng-click="elegirMarca('Apple')" class="btn btn-default" style="width:100%">Apple</a>
        <br><br>
        <a ng-click="elegirMarca('ZTE')" class="btn btn-default" style="width:100%">ZTE</a>
        <br><br>
        <a ng-click="elegirMarca('HTC')" class="btn btn-default" style="width:100%">HTC</a>
        <br><br>
        <a ng-click="elegirMarca('Huawei')" class="btn btn-default" style="width:100%">Huawei</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirMarcaSlim" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Marca</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>   
    <a class="" style="margin-left:15px;" ng-click="elegirTipo()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirMarca('Sony')" class="btn btn-default" style="width:100%">Sony Xperia</a>
        <br><br>
        <a ng-click="elegirMarca('Samsung')" class="btn btn-default" style="width:100%">Samsung</a>
        <br><br>
        <a ng-click="elegirMarca('LG')" class="btn btn-default" style="width:100%">LG</a>
        <br><br>
        <a ng-click="elegirMarca('Motorola')" class="btn btn-default" style="width:100%">Motorola</a>
        <br><br>
        <a ng-click="elegirMarca('Apple')" class="btn btn-default" style="width:100%">Apple</a>
        <br><br>
        <a ng-click="elegirMarca('ZTE')" class="btn btn-default" style="width:100%">ZTE</a>
        <br><br>
        <a ng-click="elegirMarca('HTC')" class="btn btn-default" style="width:100%">HTC</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirMarcaSlim" class="popMenuModalDesktop hidden-xs">
    <h3>Seleccionar Marca</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="elegirTipo()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
    <a ng-click="elegirMarca('Sony')" class="btn btn-default" style="width:100%">Sony Xperia</a>
        <br><br>
        <a ng-click="elegirMarca('Samsung')" class="btn btn-default" style="width:100%">Samsung</a>
        <br><br>
        <a ng-click="elegirMarca('LG')" class="btn btn-default" style="width:100%">LG</a>
        <br><br>
        <a ng-click="elegirMarca('Motorola')" class="btn btn-default" style="width:100%">Motorola</a>
        <br><br>
        <a ng-click="elegirMarca('Apple')" class="btn btn-default" style="width:100%">Apple</a>
        <br><br>
        <a ng-click="elegirMarca('ZTE')" class="btn btn-default" style="width:100%">ZTE</a>
        <br><br>
        <a ng-click="elegirMarca('HTC')" class="btn btn-default" style="width:100%">HTC</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseHTC" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirCase('htc626')" class="btn btn-default popMenuModal">HTC 626</a>
        <br>
        <a ng-click="elegirCase('htcm8')" class="btn btn-default">HTC M8</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseHTC" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirCase('htc626')">HTC 626</a>
        <br>
        <a ng-click="elegirCase('htcm8')">HTC M8</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseHuawei" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirCase('huaweig8')" class="btn btn-default popMenuModal">Huawei G8</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseHuawei" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirCase('huaweig8')">Huawei G8</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseZTE" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCase('bladel2plus')">Blade L2 Plus</a>
        <br>

    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseZTE" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCase('bladel2plus')">Blade L2 Plus</a>
        <br>

    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseSony" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCase('m4aqua')">Xperia M4 Aqua</a>
        <br>
        <a ng-click="elegirCase('xperiac5')">Xperia C5 ULTRA</a>
        <br>
        <a ng-click="elegirCase('xperiae4')">Xperia E4</a>
        <br>
        <a ng-click="elegirCase('xperiaz5')">Xperia Z5</a>
        <br>
        <a ng-click="elegirCase('xperiaz3')">Xperia Z3</a>
        <br>
        <a ng-click="elegirCase('xperiaz2')">Xperia Z2</a>
        <br>
        <a ng-click="elegirCase('xperiaz1')">Xperia Z1</a>
        <br>
        <a ng-click="elegirCase('xperiam5')">Xperia M5</a>
        <br>
        <a ng-click="elegirCase('xperiam2')">Xperia M2</a>
        <br>
        <a ng-click="elegirCase('xperiat2')">Xperia T2 ULTRA</a>
        <br>
        

    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseSony" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCase('m4aqua')">Xperia M4 Aqua</a>
        <br>
        <a ng-click="elegirCase('xperiac5')">Xperia C5 ULTRA</a>
        <br>
        <a ng-click="elegirCase('xperiae4')">Xperia E4</a>
        <br>
        <a ng-click="elegirCase('xperiaz5')">Xperia Z5</a>
        <br>
        <a ng-click="elegirCase('xperiaz3')">Xperia Z3</a>
        <br>
        <a ng-click="elegirCase('xperiaz2')">Xperia Z2</a>
        <br>
        <a ng-click="elegirCase('xperiaz1')">Xperia Z1</a>
        <br>
        <a ng-click="elegirCase('xperiam5')">Xperia M5</a>
        <br>
        <a ng-click="elegirCase('xperiam2')">Xperia M2</a>
        <br>
        <a ng-click="elegirCase('xperiat2')">Xperia T2 ULTRA</a>
        <br>

    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseSamsung" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCase('galaxya3')">GALAXY A3</a>
        <br>
        <a ng-click="elegirCase('galaxya5')">GALAXY A5</a>
        <br>
        <a ng-click="elegirCase('galaxya52016')">GALAXY A5 2016</a>
        <br>
        <a ng-click="elegirCase('galaxya7')">GALAXY A7</a>
        <br>
        <a ng-click="elegirCase('galaxya72016')">GALAXY A7 2016</a>
        <br>
        <a ng-click="elegirCase('galaxyalpha')">GALAXY Alpha</a>
        <br>
        <a ng-click="elegirCase('galaxye7')">GALAXY E7</a>
        <br>
        <a ng-click="elegirCase('galaxygrandprime')">GALAXY GRAND PRIME</a>
        <br>
        <a ng-click="elegirCase('galaxygrandmax')">GALAXY GRAND MAX</a>
        <br>
        <a ng-click="elegirCase('galaxynote2')">GALAXY NOTE 2</a>
        <br>
        <a ng-click="elegirCase('galaxynote3')">GALAXY NOTE 3</a>
        <br>
        <a ng-click="elegirCase('galaxynote4')">GALAXY NOTE 4</a>
        <br>
        <a ng-click="elegirCase('galaxynote5')">GALAXY NOTE 5</a>
        <br>
        <a ng-click="elegirCase('galaxys4')">GALAXY S4</a>
        <br>
        <a ng-click="elegirCase('galaxys5')">GALAXY S5</a>
        <br>
        <a ng-click="elegirCase('galaxys6')">GALAXY S6</a>
        <br>
        <a ng-click="elegirCase('galaxys6active')">GALAXY S6 Active</a>
        <br>
        <a ng-click="elegirCase('galaxys6edge')">GALAXY S6 EDGE</a>
        <br>
        <a ng-click="elegirCase('galaxys6edgeplus')">GALAXY S6 EDGE Plus</a>
        <br>
        <a ng-click="elegirCase('galaxys3mini')">GALAXY S3 mini</a>
        <br>
        <a ng-click="elegirCase('galaxys4mini')">GALAXY S4 mini</a>
        <br>
        <a ng-click="elegirCase('galaxys5mini')">GALAXY S5 mini</a>
        <br>
        <a ng-click="elegirCase('galaxys7')">GALAXY S7</a>
        <br>
        <a ng-click="elegirCase('galaxys7edge')">GALAXY S7 EDGE</a>
        <br>
        <a ng-click="elegirCase('galaxyj5')">GALAXY J5</a>
        <br>
        <a ng-click="elegirCase('galaxyj52016')">GALAXY J5 2016</a>
        <br>
        <a ng-click="elegirCase('galaxyj7')">GALAXY J7</a>
        <br>
        <a ng-click="elegirCase('galaxyj72016')">GALAXY J7 2016</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseSamsung" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCase('galaxya3')">GALAXY A3</a>
        <br>
        <a ng-click="elegirCase('galaxya5')">GALAXY A5</a>
        <br>
        <a ng-click="elegirCase('galaxya52016')">GALAXY A5 2016</a>
        <br>
        <a ng-click="elegirCase('galaxya7')">GALAXY A7</a>
        <br>
        <a ng-click="elegirCase('galaxya72016')">GALAXY A7 2016</a>
        <br>
        <a ng-click="elegirCase('galaxyalpha')">GALAXY Alpha</a>
        <br>
        <a ng-click="elegirCase('galaxycore2')">GALAXY CORE 2</a>
        <br>
        <a ng-click="elegirCase('galaxye7')">GALAXY E7</a>
        <br>
        <a ng-click="elegirCase('galaxygrandprime')">GALAXY GRAND PRIME</a>
        <br>
        <a ng-click="elegirCase('galaxygrandmax')">GALAXY GRAND MAX</a>
        <br>
        <a ng-click="elegirCase('galaxynote2')">GALAXY NOTE 2</a>
        <br>
        <a ng-click="elegirCase('galaxynote3')">GALAXY NOTE 3</a>
        <br>
        <a ng-click="elegirCase('galaxynote4')">GALAXY NOTE 4</a>
        <br>
        <a ng-click="elegirCase('galaxynote5')">GALAXY NOTE 5</a>
        <br>
        <a ng-click="elegirCase('galaxys4')">GALAXY S4</a>
        <br>
        <a ng-click="elegirCase('galaxys5')">GALAXY S5</a>
        <br>
        <a ng-click="elegirCase('galaxys6')">GALAXY S6</a>
        <br>
        <a ng-click="elegirCase('galaxys6active')">GALAXY S6 Active</a>
        <br>
        <a ng-click="elegirCase('galaxys6edge')">GALAXY S6 EDGE</a>
        <br>
        <a ng-click="elegirCase('galaxys6edgeplus')">GALAXY S6 EDGE Plus</a>
        <br>
        <a ng-click="elegirCase('galaxys3mini')">GALAXY S3 mini</a>
        <br>
        <a ng-click="elegirCase('galaxys4mini')">GALAXY S4 mini</a>
        <br>
        <a ng-click="elegirCase('galaxys5mini')">GALAXY S5 mini</a>
        <br>
        <a ng-click="elegirCase('galaxys7')">GALAXY S7</a>
        <br>
        <a ng-click="elegirCase('galaxys7edge')">GALAXY S7 EDGE</a>
        <br>
        <a ng-click="elegirCase('galaxyj5')">GALAXY J5</a>
        <br>
        <a ng-click="elegirCase('galaxyj52016')">GALAXY J5 2016</a>
        <br>
        <a ng-click="elegirCase('galaxyj7')">GALAXY J7</a>
        <br>
        <a ng-click="elegirCase('galaxyj72016')">GALAXY J7 2016</a>
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseLG" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCase('lgzone')">LG ZONE</a>
        <br>
        <a ng-click="elegirCase('lgk10')">LG K10</a>
        <br>
        <a ng-click="elegirCase('lgk7')">LG K7</a>
        <br>
        <a ng-click="elegirCase('lgg5')">LG G5</a>
        <br>
        <a ng-click="elegirCase('lgg4stylus')">LG G4 STYLUS</a>
        <br>
        <a ng-click="elegirCase('lgg4')">LG G4</a>
        <br>
        <a ng-click="elegirCase('lgg3stylus')">LG G3 Stylus</a>
        <br>
        <a ng-click="elegirCase('lgg3')">LG G3</a>
        <br>
        <a ng-click="elegirCase('lgprolite')">LG PRO LITE</a>
        <br>
        <a ng-click="elegirCase('nexus5')">NEXUS 5</a>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseLG" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCase('lgzone')">LG ZONE</a>
        <br>
        <a ng-click="elegirCase('lgk10')">LG K10</a>
        <br>
        <a ng-click="elegirCase('lgk7')">LG K7</a>
        <br>
        <a ng-click="elegirCase('lgg5')">LG G5</a>
        <br>
        <a ng-click="elegirCase('lgg4stylus')">LG G4 STYLUS</a>
        <br>
        <a ng-click="elegirCase('lgg4')">LG G4</a>
        <br>
        <a ng-click="elegirCase('lgg3stylus')">LG G3 Stylus</a>
        <br>
        <a ng-click="elegirCase('lgg3')">LG G3</a>
        <br>
        <a ng-click="elegirCase('lgprolite')">LG PRO LITE</a>
        <br>
        <a ng-click="elegirCase('nexus5')">NEXUS 5</a>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseNexus" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseNexus" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <br>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseMotorola" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        
        <a ng-click="elegirCase('motog4')">MOTO G4</a>
        <br>
        <a ng-click="elegirCase('motog3')">MOTO G3</a>
        <br>
        <a ng-click="elegirCase('motog2')">MOTO G2</a>
        <br>
        <a ng-click="elegirCase('motog')">MOTO G</a>
        <br>
        <a ng-click="elegirCase('motoxplay')">MOTO X Play</a>
        <br>
        <a ng-click="elegirCase('motox2')">MOTO X2</a>
        <br>
        <a ng-click="elegirCase('motoe2')">MOTO E2</a>
        <br>
        
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseMotorola" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        
        <a ng-click="elegirCase('motog4')">MOTO G4</a>
        <br>
        <a ng-click="elegirCase('motog3')">MOTO G3</a>
        <br>
        <a ng-click="elegirCase('motog2')">MOTO G2</a>
        <br>
        <a ng-click="elegirCase('motog')">MOTO G</a>
        <br>
        <a ng-click="elegirCase('motoxplay')">MOTO X Play</a>
        <br>
        <a ng-click="elegirCase('motox2')">MOTO X2</a>
        <br>
        <a ng-click="elegirCase('motoe2')">MOTO E2</a>
        <br>
        
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseApple" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCase('iphone6plus')">IPHONE 6/6s PLUS</a>
        <br>
        <a ng-click="elegirCase('iphone6')">IPHONE 6/6s</a>
        <br>
        <a ng-click="elegirCase('iphone5c')">IPHONE 5C</a>
        <br>
        <a ng-click="elegirCase('iphone55s')">IPHONE 5/5S</a>
        <br>
        <a ng-click="elegirCase('iphone44s')">IPHONE 4/4S</a>
        <br>
        <a ng-click="elegirCase('ipod5')">IPOD 5</a>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirCaseApple" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenu()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCase('iphone6plus')">IPHONE 6/6s PLUS</a>
        <br>
        <a ng-click="elegirCase('iphone6')">IPHONE 6/6s</a>
        <br>
        <a ng-click="elegirCase('iphone5c')">IPHONE 5C</a>
        <br>
        <a ng-click="elegirCase('iphone55s')">IPHONE 5/5S</a>
        <br>
        <a ng-click="elegirCase('iphone44s')">IPHONE 4/4S</a>
        <br>
        <a ng-click="elegirCase('ipod5')">IPOD 5</a>
    </div>
</div>

<!-- Nuevo -->

<div style="display:none" ng-show="menu.elegirRubberCaseApple" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenuRubberCase()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCaseRubber('iphone6plus')">IPHONE 6/6s PLUS</a>
        <br>
        <a ng-click="elegirCaseRubber('iphone6')">IPHONE 6/6s</a>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirRubberCaseApple" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenuRubberCase()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCaseRubber('iphone6plus')">IPHONE 6/6s PLUS</a>
        <br>
        <a ng-click="elegirCaseRubber('iphone6')">IPHONE 6/6s</a>
    </div>
</div>

<div style="display:none" ng-show="menu.elegirRubberCaseSamsung" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenuRubberCase()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCaseRubber('galaxys6edgeplus')">GALAXY S6 EDGE Plus</a>
        <br>
        <a ng-click="elegirCaseRubber('galaxys6edge')">GALAXY S6 EDGE</a>
        <br>
        <a ng-click="elegirCaseRubber('galaxys6')">GALAXY S6</a>
        <br>
        <a ng-click="elegirCaseRubber('galaxys5')">GALAXY S5</a>
        <br>
        <a ng-click="elegirCaseRubber('galaxynote5')">GALAXY NOTE 5</a>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirRubberCaseSamsung" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenuRubberCase()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCaseRubber('galaxys6edgeplus')">GALAXY S6 EDGE Plus</a>
        <br>
        <a ng-click="elegirCaseRubber('galaxys6edge')">GALAXY S6 EDGE</a>
        <br>
        <a ng-click="elegirCaseRubber('galaxys6')">GALAXY S6</a>
        <br>
        <a ng-click="elegirCaseRubber('galaxys5')">GALAXY S5</a>
        <br>
        <a ng-click="elegirCaseRubber('note5')">GALAXY NOTE 5</a>
    </div>
</div>



<div style="display:none" ng-show="menu.elegirAntishockCaseApple" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenuAntishock()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirCaseAntishock('iphone6plus')">IPHONE 6/6s PLUS</a>
        <br>
        <a ng-click="elegirCaseAntishock('iphone55s')">IPHONE 5/5S</a>
        <br>
        <a ng-click="elegirCaseAntishock('iphone44s')">IPHONE 4/4S</a>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirAntishockCaseApple" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenuAntishock()">
        <li class="fa fa-arrow-left"></li>
    </a>
    <div class="popover-content">
        <a ng-click="elegirCaseAntishock('iphone6plus')">IPHONE 6/6s PLUS</a>
        <br>
        <a ng-click="elegirCaseAntishock('iphone55s')">IPHONE 5/5S</a>
        <br>
        <a ng-click="elegirCaseAntishock('iphone44s')">IPHONE 4/4S</a>
    </div>
</div>

<div style="display:none" ng-show="menu.elegirAntishockCaseSamsung" class="popMenuModal hidden-sm hidden-md hidden-lg">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenuAntishock()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCaseAntishock('galaxys5')">GALAXY S5</a>
        <br>
        <a ng-click="elegirCaseAntishock('galaxynote4')">GALAXY NOTE 4</a>
    </div>
</div>
<div style="display:none" ng-show="menu.elegirAntishockCaseSamsung" class="popMenuModalDesktop hidden-xs">
    <h3> Seleccionar Case</h3>
    <div style="position:absolute;right:0;top:0;">
        <a style="" ng-click="cerrarTodosLosMenus()"><img src="/images/icons/close.png" alt="x"></a>
    </div>
    <a class="" style="margin-left:15px;" ng-click="eligirCaseMenuAntishock()">
        <li class="fa fa-arrow-left"></li>
    </a>

    <div class="popover-content">
        <a ng-click="elegirCaseAntishock('galaxys5')">GALAXY S5</a>
        <br>
        <a ng-click="elegirCaseAntishock('galaxynote4')">GALAXY NOTE 4</a>
    </div>
</div>	