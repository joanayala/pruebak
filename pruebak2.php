<?php
	//Prueba Nro. 2 Kommit;
	//Validación de obstáculos encontrados en sus diferentes movimientos

	//1. Recepción de variables (Coordenadas x,y) por POST
	$x = $_POST['x'];
	$y = $_POST['y'];

	//# Leer json
	$data = file_get_contents("data.json");
	$coordenadas = json_decode($data,true);

	//Retornar al ingreso de coordenadas de la Reina.
	echo "<a href=index.html>Regresar al juego</a><br><br>";

	//Coordenadas de la posición actual de la Reina.
	echo "La posición (x,y) de la reina es: ". $x. "," .$y;

	//2. Validación de posición izquierda.
	//Detectar si en el json hay obstáculos a la izquierda de la reina

	foreach ($coordenadas as $i) {
		if($y == $i['y']){
			if($i['x'] < $x)
				$coorXi = $i['x'];
			//echo "<br>".$coorXi;
		}else{
			//...
		}
	}

	$iz = 1;
	while($iz < $coorXi-1){
		$iz++;
	}	

	//3. Validación de posición derecha.

	foreach ($coordenadas as $i) {
		if($y == $i['y']){
			if($i['x'] > $x)
			$coorXd = $i['x'];
			//echo "<br>".$coorXd;
		}else{
			//...
		}
	}

	$j = $x;
	$de=1;
	while($j <= $coorXd){
		$j++;
		$de++;
	}

	//4. Validación de posición superior.
	
	foreach ($coordenadas as $i) {
		if($x == $i['x']){
			if($i['y'] < $y)
			$coorYs = $i['y'];
			//echo "<br>".$coorYs;
		}else{
			//...
		}
	}

	$su=1;
	while($su < $coorYs-1){
		$su++;
	}

	//5. Validación de posición inferior.
	
	foreach ($coordenadas as $i) {
		if($x == $i['x']){
			if($i['y'] > $y)
			$coorYi = $i['y'];
			//echo "<br>".$coorYi;
		}else{
			//...
		}
	}

	$l = $y;
	$in=1;
	while($l <= $coorYi){
		$l++;
		$in++;
	}

	//6. Visualización de coordenadas horizontales - verticales
	echo "<br><br><table border='1'>";
	echo "<tr><td colspan='2'><b>Descripción posiciones de ataque de la Reina</b></td></tr>";
	echo "<tr><td>Posiciones de ataque a la izquierda: </td><td>". $iz."</td></tr>";
	echo "<tr><td>Posiciones de ataque a la derecha: </td><td>". ($de-2)."</td></tr>";
	echo "<tr><td>Posiciones de ataque superior: </td><td>". $su."</td></tr>";
	echo "<tr><td>Posiciones de ataque inferior: </td><td>". ($in-2)."</td></tr>";

	//7. Visualización de coordenadas diagonales
	echo "<tr><td>Posiciones de ataque diagonal izq. arriba: </td><td>". $iz."</td></tr>";
	echo "<tr><td>Posiciones de ataque diagonal izq. abajo: </td><td>". $iz."</td></tr>";
	echo "<tr><td>Posiciones de ataque diagonal der. arriba: </td><td>". $iz."</td></tr>";
	echo "<tr><td>Posiciones de ataque diagonal der. abajo: </td><td>". $iz."</td></tr>";
?>