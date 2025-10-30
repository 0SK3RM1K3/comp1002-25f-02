<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Pizza Petes</title>
		<link rel="stylesheet" href="css/styles.css" />
	</head>
	<body>
		<header>
			<img src="images/Pizza.png" height="150" width="150" alt="Sliced Pizza"/>
            <h1><strong>Pizza Petes</strong></h1>
		</header>
		<main>
			<h2>Account Information and Settings Updated</h2>
<?php
    
	$name = $_GET["name"];
	
	$number_of_pizzas = $_GET["number_of_pizzas"];

    $sizes = $_GET["sizes"];

    $shape = $_GET["shape"];

    $style = $_GET["style"];

    $dinning_options = $_GET["dinning_options"];

    $cheese = $_GET["cheese"];
    
    $toppings = $_GET["toppings"];

    $address = $_GET["address"];

    $sp_inst = $_GET["sp_inst"];
	
	echo('<p>Thank you, '.$name.' for your order!</p>');

	echo('<p>Your order is as follows:</p>');

    echo('<p>'.$number_of_pizzas.$sizes.$style.' pizzas, with '.$cheese.' cheese.'.$shape.' cut, for '.$dinning_options.'</p>');

    echo('<p>Toppings:</p>');
	
    echo('<ul>');
		
		foreach ($toppings as $item) {
			echo('<li>'.$item.'</li>');
		};

	echo('</ul>');

    echo('<p>Delivered to '.$address.'</p>');

    echo('<p>Special Instructions:'.$sp_inst.'</p>');
?>
		</main>
        <footer>
            <p><small>© 2025 Acme LLC</small></p>
        </footer>
	</body>
</html>
