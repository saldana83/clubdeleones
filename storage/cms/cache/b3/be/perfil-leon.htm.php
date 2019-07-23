<?php 
class Cms5d2b5f204fed7066758615_62e193c2ca590244cbd6be9ba0907163Class extends Cms\Classes\PageCode
{
public function onStart(){
    //conectamos Con el servidor
	$conectar= mysqli_connect('localhost','root','','clubdeleonesdedavid');
	mysqli_set_charset($conectar,'utf8');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysqli_select_db($conectar,'clubdeleonesdedavid');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
    $sql= "select name from users where `last_login`=(select max(`last_login`)from users)";
    $ejecutar = mysqli_query($conectar,$sql);
    $name = mysqli_fetch_array($ejecutar);
    $name2=$name['name'];
    
    
    $sql1 = "SELECT `id_domadora` , `primernombre`, `segundonombre`, `primerapellido`, `segundoapellido`, `cedula`, `estado_activo_inactivo`, `fechadeingreso`, `correo`, `fechanac`, `telefonocasa`, `telefonooficina`, `telefonocelular`, `estadocivil`, `codigoleon`, `profesion`, `empresa`, `cargo`, `facebook`, `twitter`, `instagram`, `linkedin`, `tiposangre` FROM `usuarioleon` where '$name2' = primernombre ";
	$ejecutar1 = mysqli_query($conectar,$sql1);
	$datos = mysqli_fetch_array($ejecutar1);
	
	if (!$ejecutar1){
		echo 'hay un error en la sentencia sql';
	}else{
	
	$this['primernombre']=$datos['primernombre'];
	$this['segundonombre']=$datos['segundonombre'];
	$this['primerapellido']=$datos['primerapellido'];
	$this['segundoapellido']=$datos['segundoapellido'];
	$this['cedula']=$datos['cedula'];
	$this['estado_activo_inactivo']=$datos['estado_activo_inactivo'];
	$this['fechadeingres']=$datos['fechadeingreso'];
	$this['correo']=$datos['correo'];
	$this['fechanac']=$datos['fechanac'];
	$this['telefonocasa']=$datos['telefonocasa'];
	$this['telefonooficina']=$datos['telefonooficina'];
	$this['estadocivil']=$datos['estadocivil'];
	$this['codigoleon']=$datos['codigoleon'];
	$this['profesion']=$datos['profesion'];
	$this['empresa']=$datos['empresa'];
	$this['cargo']=$datos['cargo'];
	$this['facebook']=$datos['facebook'];
	$this['twitter']=$datos['twitter'];
	$this['instagram']=$datos['instagram'];
	$this['linkedin']=$datos['linkedin'];
	$this['tiposangre']=$datos['tiposangre'];
	
	$iddom=$datos['id_domadora'];
	$sql2="SELECT `nombre`, `apellido`, `cedula`, `fecha_nac`, `celular`, `tipodesangre` FROM `domadoras` WHERE $iddom= id_domadora";
	$ejecutar2 = mysqli_query($conectar,$sql2);
	if (!$ejecutar2){
	echo 'hay un error en la sentencia sql';
	    }else{
	$datos2=mysqli_fetch_array($ejecutar2);
	
	
	$this['dnombre']=$datos2['nombre'];
	$this['dapellido']=$datos2['apellido'];
	$this['dcedula']=$datos2['cedula'];
	$this['dfecha_nac']=$datos2['fecha_nac'];
	$this['dcelular']=$datos2['celular'];
	$this['dtipodesangre']=$datos2['tipodesangre'];
	}
	}
	
}
public function onUsuario(){

	
}
}
