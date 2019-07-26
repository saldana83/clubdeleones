<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "clubdeleonesdedavid";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM historial_de_pagos ORDER By codigo_de_pago";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT codigo_de_pago, categoria, descripcion, saldo FROM historial_de_pagos WHERE codigo_de_pago LIKE '%$q%' OR categoria LIKE '%$q%' OR descripcion LIKE '%$q%' OR saldo LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if ($resultado->num_rows>0) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>Codigo León</td>
    					<td>Categoria</td>
    					<td>Descripción</td>
    					<td>Saldo</td>
    				</tr>

    			</thead>

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['codigo_de_pago']."</td>
    					<td>".$fila['categoria']."</td>
    					<td>".$fila['descripcion']."</td>
    					<td>".$fila['saldo']."</td>

    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }

    echo $salida;

    $conn->close();
?>