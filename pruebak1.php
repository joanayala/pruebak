<?php
	$pos_tab = 8;
	//Prueba Nro. 1 Kommit;

	//1. Recepción de variables (Coordenadas x,y) por POST
	$x = $_POST['x'];
	$y = $_POST['y'];

	//Retornar al ingreso de coordenadas de la Reina.
	echo "<a href=index.html>Regresar al juego</a><br><br>";

	//Coordenadas de la posición actual de la Reina.
	echo "La posición (x,y) de la reina es: ". $x. "," .$y;

	//2. Validación de posición izquierda.
	$iz = 1;
	while($iz < $x-1){
		$iz++;
	}

	//3. Validación de posición derecha.
	$j = $x;
	$de=1;
	while($j <= $pos_tab){
		$j++;
		$de++;
	}

	//4. Validación de posición superior.
	$su=1;
	while($su < $y-1){
		$su++;
	}

	//5. Validación de posición inferior.
	$l = $y;
	$in=1;
	while($l <= $pos_tab){
		$l++;
		$in++;
	}	

	//6. Visualización de coordenadas horizontales - verticales
	echo "<br><br><table border='1'>";
	echo "<tr><td colspan='2'><b>Descripción posiciones de ataque de la Reina</b></td></tr>";
	echo "<tr><td>Posiciones de ataque a la izquierda: </td><td>". $iz."</td></tr>";
	echo "<tr><td>Posiciones de ataque a la derecha: </td><td>". ($de-2)."</td></tr>";
	echo "<tr><td>Posiciones de ataque superior: </td><td>". ($su)."</td></tr>";
	echo "<tr><td>Posiciones de ataque inferior: </td><td>". ($in-2)."</td></tr>";

	//7. Visualización de coordenadas diagonales
	echo "<tr><td>Posiciones de ataque diagonal izq. arriba: </td><td>". $iz."</td></tr>";
	echo "<tr><td>Posiciones de ataque diagonal izq. abajo: </td><td>". ($in-2)."</td></tr>";
	echo "<tr><td>Posiciones de ataque diagonal der. arriba: </td><td>". ($de-2)."</td></tr>";
	echo "<tr><td>Posiciones de ataque diagonal der. abajo: </td><td>". ($in-2)."</td></tr>";
?>