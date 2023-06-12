<?php 
	//Reemplaze el scrip
	session_start();
	//Llegada de datos
	include 'conexion.php';
	$rol=$_POST['rol'];
	$login= $_POST['user'];
    $contraseña = $_POST['password'];

	//Autenticar si es usuario
	if($rol == 'Usuario'){
	
		$validar_login=mysqli_query($conn,"SELECT * FROM usuario WHERE login='$login' and password='$contraseña'");
		if(mysqli_num_rows($validar_login)>0){
			$result= mysqli_query($conn,"SELECT id FROM usuario WHERE login='$login'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$ids=$consulta['id'];
					$_SESSION['loginsesion'] = $ids;
					header("location: usuario.php");
				}
			}   			 	
			exit;
		}else{
			echo'
				<script>
					alert("Usuario no existente, Favor de verificar los datos introducidos");
					window.location= "logeo.html";
				</script>
			';
			exit;
		}
	}
	//Autenticar si es administrador
	if($rol == 'Administrador'){

		$validar_login=mysqli_query($conn,"SELECT * FROM usuario_master WHERE login='$login' and password='$contraseña'");

		if(mysqli_num_rows($validar_login)>0){
			$result= mysqli_query($conn,"SELECT id FROM usuario_master WHERE login='$login'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$ids=$consulta['id'];
					$_SESSION['loginAdmin'] = $ids;
					header("location: administrador.php");
				}
			}   			 	
			exit;
		}else{
			echo'
				<script>
					alert("Administrador no existente, Favor de verificar los datos introducidos");
					window.location= "logeo.html";
				</script>
			';
			exit;
		}
	}
	
	else{
		echo'
			<script>
				alert("Usuario no existe, Favor de verificar los datos introducidos");
				window.location= "logeo.html";
			</script>
		';
		exit;
	}
?>