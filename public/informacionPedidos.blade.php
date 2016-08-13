<?php
$marcasSlim = array("Sony Xperia" => array("Xperia M4 Aqua","Xperia C5 ULTRA","Xperia E4","Xperia Z5","Xperia Z3","Xperia Z2","Xperia Z","Xperia M5","Xperia M2","Xperia T2 ULTRA"),
			"Samsung" => array("GALAXY A3","GALAXY A5","GALAXY A5 2016","GALAXY A7","GALAXY A7 2016","GALAXY Alpha","GALAXY CORE 2","GALAXY E7","GALAXY GRAND PRIME","GALAXY GRAND MAX","GALAXY NOTE 2","GALAXY NOTE 3","GALAXY NOTE 4","GALAXY NOTE 5","GALAXY S4","GALAXY S5","GALAXY S6","GALAXY S6 Active","GALAXY S6 EDGE","GALAXY S6 EDGE Plus","GALAXY S3 mini","GALAXY S4 mini","GALAXY S5 mini","GALAXY S7","GALAXY J5","GALAXY J7"),
			"LG" => array("LG G5","LG G4 STYLUS","LG G4","LG G3 Stylus","LG G3","LG PRO LITE","NEXUS 5"),
			"Motorola" => array("MOTO G3","MOTO G2","MOTO G","MOTO X Play","MOTO X2","MOTO E2"),
			"Apple" => array("IPHONE 6/6s PLUS","IPHONE 6/6s","IPHONE 5C","IPHONE 5/5S","IPHONE 4/4S","IPOD 5"),
			"ZTE" => array("Blade L2 Plus"),
			"HTC" => array("HTC 626","HTC M8"),
			);
$marcasRubber = array("Apple" => array("IPHONE 6/6s PLUS","IPHONE 6/6s"),
					  "Samsung" => array("GALAXY S6 EDGE Plus","GALAXY S6 EDGE","GALAXY S6","GALAXY S5","GALAXY NOTE 5"));
$marcasAnti = array("Apple" => array("IPHONE 6/6s PLUS","IPHONE 5/5S","IPHONE 4/4S"),
					"Samsung" => array("GALAXY S5","GALAXY NOTE 4"));

$CatTipoCase = array("SLIMCASES","RUBBER CASE","ANTISHOCK");
if (isset($_POST['action'])) {
        $data = $_POST['action']; 
		switch ($data) {
			case 'CargaPlantillas':
					CargaPlantillas();
				break;	
			case 'DameMarcas':
					DameMarcas();
				break;	
			case 'DameModelos':
					DameModelos();
				break;
		}
}
function CargaPlantillas()
{
	$TipoCarpeta = $_POST['TipoCarpeta'];	

	$directory="images/cases/plantillas";
	$dirint = dir($directory);
	$contador = 0;
	while (($archivo = $dirint->read()) !== false)
	{
	    if (preg_match("/gif/i", $archivo) || preg_match("/jpg/i", $archivo) || preg_match("/png/i", $archivo) || preg_match("/jpeg/i", $archivo)){
	    	if($contador == 0)
	    	{	        		
	    		echo '<div class="row">';	    		
	    	}
	        $contador++;
	    	if($contador == 3)
	    	{
	        	echo '</div>';				        		
	    		echo '<div class="row">';
	    		$contador =1;

	    	}			    	
	    	echo '<div class="col-md-6">';
	    	echo '<div class="imagen desactivado">';
	        echo '<img src="/'.$directory."/".$archivo.'">'."\n";
	        echo '<div class="check"></div>'."\n";
	        echo '</div>';	        
	    	echo '<div class="contenido">';
	        echo '<input type="number" id="Cantidad" name="Cantidad" min="0" max="100" placeholder="Cantidad" disabled>'."\n";
	        DameMarcasTiposCase();
	        //DameMarcas();
	        echo '<select class="SelMarca" disabled><option value="0">Seleccionar Marca</option></select>';
	        echo '<select class="SelModelos" disabled><option value="0">Seleccionar Modelo</option></select>';	 
	        echo '<button type="submit" class="btn btn-primary btn-block" data-id="'.str_replace(".jpeg","",$archivo).'" disabled>Agregar</button>';
	        echo '</div>';
	        echo '</div>';
	    }
	    
	}
	        echo '</div>';
	$dirint->close();
}
function DameMarcasTiposCase(){
	global $CatTipoCase;
	echo '<select class="SelTipoCase" disabled><option value="0">Seleccionar Tipo de Case</option>'."\n";
	foreach ($CatTipoCase as $single) {
		echo'<option value="'.$single.'">'.$single.'</option>';
	}
	echo "</select>";
}
function DameMarcas(){	
	$TipoCase = $_POST['TipoCase'];	
	//echo $TipoCase;
	//echo '<select class="SelMarca" disabled><option value="0">Seleccionar Marca</option>'."\n";
	echo '<option value="0">Seleccionar Marca</option>';
	switch ($TipoCase) {
		case 'SLIMCASES':
			global $marcasSlim;
			foreach ($marcasSlim as $single => $x_value) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;	
		case 'RUBBER CASE':
			global $marcasRubber;
			foreach ($marcasRubber as $single => $x_value) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;
		case 'ANTISHOCK':
			global $marcasAnti;
			foreach ($marcasAnti as $single => $x_value) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;	
		default:
			global $marcasSlim;
			foreach ($marcasSlim as $single => $x_value) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;
	}
	//echo "</select>";
}
function DameModelos(){	
	//echo '<select id="SelModelos"><option value="0">Seleccionar Modelos</option>'."\n";
	echo '<option value="0">Seleccionar Modelo</option>';
	$strMarca = $_POST['Marca'];
	switch ($_POST['TipoCase']) {
		case 'SLIMCASES':
			global $marcasSlim;
			foreach ($marcasSlim[$strMarca] as $single) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;	
		case 'RUBBER CASE':
			global $marcasRubber;
			foreach ($marcasRubber[$strMarca] as $single) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;
		case 'ANTISHOCK':
			global $marcasAnti;
			foreach ($marcasAnti[$strMarca] as $single) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;	
		default:
			global $marcasSlim;
			foreach ($marcasSlim["Samsung"] as $single) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;
	}
	//echo "</select>";
}
?>