<?php

	require 'animal.php';
	require 'frog.php';
	require 'ape.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar-OOP</title>
</head>
<body>

<?php

	$sheep = new Animal("shaun");

	echo $sheep->name; // "shaun"
	echo $sheep->legs; // 2
	echo $sheep->cold_blooded; // false
	
		
	// index.php
	$sungokong = new Ape("kera sakti");
	echo $sungokong->name;
	echo $sungokong->legs;
	echo $sungokong->yell(); // "Auooo"

	$kodok = new Frog("buduk");
	echo $kodok->name;
	echo $kodok->legs; 
	echo $kodok->jump(); // "hop hop"
	
?>
    
</body>
</html>