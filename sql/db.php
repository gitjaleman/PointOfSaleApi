<?php
	class conn extends mysqli{
		function __construct(){
			parent::__construct("localhost","root","","venta");
			if (mysqli_connect_error()) {
				print("error de conexion");
			}
		}
	}
	
?>