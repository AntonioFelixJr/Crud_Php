<html>
    <head
        <meta charset="UTF-8">
        <title>Conta no Banco</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <div id="principal">
			<?php
				require_once 'BankAccount.php';
			 
				$client = new BankAccount();
				$client->setNumAccount("1012235-2");
				$client->setType("cp");
				$client->setProprietor("Jubileu");
			 
				echo $client->openAccount();
				echo $client->deposit(300);
				echo $client->draw(400);
				echo $client->payMonthly();
				//echo $client->closeAccount();
			 
				$client2 = new BankAccount();
				$client2->setNumAccount("1012235-9");
				$client2->setType("cc");
				$client2->setProprietor("Clêusa");
			 
				echo $client2->openAccount();
				echo $client2->deposit(400);
				echo $client2->draw(100);		
				echo $client2->payMonthly();
				//echo $cliente->closeAccount();
			 	echo "<pre>";
				var_dump($client);
				echo "<br>";
				echo "<br>";
				var_dump($client2);
			 	echo "</pre>";
			 
			?>
        </div>
    </body>
</html>
