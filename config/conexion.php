<?php
	//Variables Globales
	header('Content-Type: text/html; charset=UTF-8'); 
	date_default_timezone_set('America/Bogota');
	
	class Connection{
		static public function connect(){
			try{
				$db = [
					"server" => "localhost",
					"user" => "root",
					"pass" => "",
					"datab" => "parqueadero",
				];
				$conn = new mysqli($db['server'], $db['user'], $db['pass'], $db['datab']);
			}
			catch(Exception $er){
				$_SESSION['er_user'] = $er;
				header('Location: views/error.php');
			}
			return $conn;
		}
	}
?>