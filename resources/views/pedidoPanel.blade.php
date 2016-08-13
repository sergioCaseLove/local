@extends('admin_layout')
@section('cols')
    12
@stop
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
<script>
/*
	var app = angular.module('pedido', []);
	app.controller('pedidoController', function($scope, $http) {
	    $http.get("listaPedido?idPedido=1")
	    .then(function(response) {
	        $scope.nombre = response.data[0].orden_id;
	    });
	});*/
</script>
@section('bBig')
    Pedidos
@stop
@section('boxtitle')
    Lista de Pedidos
@stop
@section('content')	
	<table>
	@foreach($ordenes as $orden)
		<tr>
			@foreach($orden as $elemento)
			<td>
				{{$elemento}}
			</td>
			@endforeach
		</tr>
	@endforeach
	</table>
@stop