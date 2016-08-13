@extends('admin_layout')
@section('cols')
    12
@stop
@section('bBig')
    Ordenes
@stop
@section('boxtitle')
    Lista de Catalogo
@stop
@section('content')
<style type="text/css">
	.desactivado{
		cursor: pointer;		
		-webkit-transition: all 0.3s ease-in-out;
    	transition: all 0.3s ease-in-out;
    	opacity: .6;
	}
	.desactivado:hover{
		/*border:solid 1px #ccc;*/
		opacity: 1; 
	}
	.activado{
		/*border:solid 1px #ccc; */
		opacity: 1;
		-webkit-transition: all 0.3s ease-in-out;
    	transition: all 0.3s ease-in-out;
		cursor: pointer;
	}
	.activado .check{
		opacity: 1;
	}
	.check{		
		background-image: url("/img/check.png");
		width: 16px;
		height: 16px;
		position: absolute;
		right: 30px;
		top: 0;
		-webkit-transition: all 0.3s ease-in-out;
    	transition: all 0.3s ease-in-out;
    	opacity: 0;
	}
	img.activado:after {
		content: url("/img/check.png");    
		padding-left: 5px;
		z-index: 99999;
		}
	#tipocases span{
	    width: 100%;
	    display: block;
	    margin: 30px auto;
	    text-align: center;
	    /*border: solid 1px #292929;
	    height: 300px;
	    border-radius: 10px;*/
	    cursor: pointer;
	}
	#tipocases span img{
		border: solid 1px #292929;
		border-radius: 10px;
		width: 100%;
		max-width: 300px;
	}
	#modelosdisponibles .row img{
		max-width: 100%;
		margin: 0 auto;
    	display: block;
	}
	#tipocases span:hover img{
		-webkit-box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.75);
		box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.75);
	}
	.RegresaTipocase {
		display: none;
		cursor: pointer;
	}
	.RegresaTipocase li span{
		font-family: 'Source Sans Pro',sans-serif;
    	margin-left: 5px;
	}
	#modelosdisponibles .row select, #modelosdisponibles .row input{
		width: 100%;
	    background-color: #FFFFFF;
	    border: solid 1px #CCC;
	    -moz-border-radius: 2px;
	    -webkit-border-radius: 2px;
	    border-radius: 2px;
	    padding: 3px;
	    margin: 10px 0;
	    outline: none;
	}
	#modelosdisponibles .modelos .row .contenido{
		display: inline-block;
	    width: 50%;
	    vertical-align: top;
	}
	#modelosdisponibles .modelos .row .imagen{
		display: inline-block;
	    width: 50%;
	    position: relative;
	}
	#modelosdisponibles .seleccionado{
	    vertical-align: top;
	}
	/*
	#modelosdisponibles .seleccionado{
		display: inline-block;
	    width: 50%;	
	    vertical-align: top;
	    margin-left: 7%;	
	}*/
	/*
	#modelosdisponibles .modelos{
		display: inline-block;
	    width: 40%;
    	margin-right: 20px;
	}*/
	#modelosdisponibles .row select[disabled], #modelosdisponibles .row input[disabled]{
		text-transform: none;
	    box-shadow: none;
	    opacity: .65;
	}
	#modelosdisponibles .modelos .row .contenido button{
		margin-bottom: 50px;
	}
</style>
<input type="hidden" name="TipoCase" id="TipoCase" value="" />
	<a class="RegresaTipocase" style="margin-left:15px;">
        <li class="fa fa-arrow-left"><span>Regresar</span></li>
    </a>
	<section class="content">
    	<div id="tipocases" class="box-body">
    		<div class="row" style="display:none;">
    			<div class="col-md-4">
    				<span date-tipocase="Slim">SLIMCASES</span>
    			</div>
    			<div class="col-md-4">
    				<span date-tipocase="Rubber">RUBBER CASE</span>
    			</div>
    			<div class="col-md-4">
    				<span date-tipocase="Anti">ANTISHOCK</span>
    			</div>
    		</div>
    		<div class="row"> 	
	    		<div class="col-md-4">
	    			<span date-tipocase="Case Transparente"><img src="/images/cases/portadas/Portadas-TD.jpg" /></span>
	    		</div>
	    		<div class="col-md-4">
	    			<span date-tipocase="Super Heroes"><img src="/images/cases/portadas/Portadas-SH.jpg" /></span>
	    		</div>
	    		<div class="col-md-4">
	    			<span date-tipocase="Hombres Colection"><img src="/images/cases/portadas/Portadas-hombres.jpg" /></span>
	    		</div>
	    		<div class="col-md-4">
	    			<span date-tipocase="Mujeres Colection"><img src="/images/cases/portadas/Portadas-mujeres.jpg" /></span>
	    		</div>
	    		<div class="col-md-4">
	    			<span date-tipocase="Frutas Comidas"><img src="/images/cases/portadas/Portadas-FRUTAS.jpg" /></span>
	    		</div>
	    		<div class="col-md-4">
	    			<span date-tipocase="Marble Colection"><img src="/images/cases/portadas/Portadas-marble.jpg" /></span>
	    		</div>
	    		<div class="col-md-4">
	    			<span date-tipocase="Summer Colection"><img src="/images/cases/portadas/Portadas-summer.jpg" /></span>
	    		</div>
	    		<div class="col-md-4">
	    			<span date-tipocase="Pokemon Colection"><img src="/images/cases/portadas/Portadas-POKEMON.jpg" /></span>
	    		</div>
    		</div>
    	</div>
    	 <div id="modelosdisponibles" class="box-body" style="display: none;">    	 	
    	 	<div class="row">	
	    	 	<section class="modelos col-md-6">
	    	 		<div class="row">			    
			    	</div>	
	    	 	</section>
	    	 	<section class="seleccionado col-md-6">
	    	 		<table id="tblPediods" class="table table-striped"> 
	    	 			<thead> 
	    	 				<tr> 
		    	 				<th>#</th> 
		    	 				<th>Cantidad</th> 
		    	 				<th>Tipo de Case</th> 
		    	 				<th>Modelo</th>
		    	 				<th>Accion</th> 
	    	 				</tr> 
	    	 			</thead> 
	    	 			<tbody id="CarritoPedidos"> 
	    	 			</tbody> 
	    	 		</table>
	    	 	</section>    	     
	    	 </div>
    	 </div>
    </section>
@stop