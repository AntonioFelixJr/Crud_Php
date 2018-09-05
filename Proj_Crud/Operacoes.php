<?php
	require_once 'Cliente.php';
	$servername = "localhost";
	$username = "root";
	$password = "12345";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=bdTeste", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully";
	    }
	catch(PDOException $e)
	    {
	    echo "Connection failed: " . $e->getMessage();
	    }



		$sql = "SELECT * FROM tbCliente;";	
		$result = $conn->query($sql);
		$cliente = new Cliente();
		$info = array();
		public function pegarClienteBanco(){
			
				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				    	$cliente->setIdCliente($row["idCliente"]);
				    	$cliente->setNomeCliente($row["nomeCliente"]);
				    	$cliente->setIdadeCliente($row["idadeCliente"]);
				      
				    }
        			$info[] = $cliente;
        		}
        		return $info;
		}