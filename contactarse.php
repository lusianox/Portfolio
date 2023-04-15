<?php 

include("conexion.php");

if (isset($_POST['enviar'])){
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$asunto = trim($_POST['asunto']);
		$mensaje =  trim($_POST['mensaje']);
	    $consulta = "INSERT INTO portafolio(nombre, email, asunto, mensaje) VALUES ('$name','$email','$asunto','$mensaje')";
	    $resultado = mysqli_query($conex_db,$consulta);

	    if ($resultado){
	    	?> 
	    	<br> <h3 class="bien">¡GRACIAS! Pronto me contactaré contigo</h3>
           <?php
	    } else {
	    	?> 
	        <br> <h3 class="error">¡ERROR! - La página no logró enviar la información. Intente más tarde</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<br> <h3 class="campos">Es necesario completar todos los campos</h3>
           <?php
    }
}