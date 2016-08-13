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
if (isset($_POST['action'])) {
        $data = $_POST['action']; 
		switch ($data) {
			case 'DameMarcas':
					DameMarcas();
				break;	
			case 'DameModelos':
					DameModelos();
				break;
		}
}
function DameMarcas(){	
	echo '<select><option value="0">Seleccionar Marca</option>'."\n";
	switch ($_POST['TipoCase']) {
		case 'Slim':
			foreach ($marcasSlim as $single => $x_value) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;	
		case 'Rubber':
			foreach ($marcasRubber as $single => $x_value) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;
		case 'Anti':
			foreach ($marcasAnti as $single => $x_value) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;	
		default:
			foreach ($marcasSlim as $single => $x_value) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;
	}
	echo "</select>";
}
function DameModelos(){	
	echo '<select><option value="0">Seleccionar Marca</option>'."\n";
	$strMarca = $_POST['Marca'];
	switch ($_POST['TipoCase']) {
		case 'Slim':
			foreach ($marcasSlim[$strMarca] as $single) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;	
		case 'Rubber':
			foreach ($marcasRubber[$strMarca] as $single) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;
		case 'Anti':
			foreach ($marcasAnti[$strMarca] as $single) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;	
		default:
			foreach ($marcasSlim["Samsung"] as $single) {
				echo'<option value="'.$single.'">'.$single.'</option>';
			}
			break;
	}
	echo "</select>";
}
?>