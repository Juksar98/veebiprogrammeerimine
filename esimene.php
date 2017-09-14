<?php
	//muutujad
	$myName = "Oskar";
	$myFamilyName = "Juksar";
	
	//hindan päeva osa, (võrdlemine < > <= >= == !=)
	$hourNow = date("H");
	$partOfDay = "";
	if ($hourNow < 8){
		$partOfDay = "varajane hommik";
	}	
	if ($hourNow >= 8 and < 16){
		$partOfDay = "koolipäev";
	}	
	if ($hourNow > 16){
		$partOfDay = "vaba aeg";
	}
	//echo $partOfDay;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset"utf-8">
	<title>Oskar Juksar</title>
</head>
<body>
	<h1><?php echo $myName ." " .$myFamilyName; ?></h1>
	<p>See veebileht on loodud õppetöö raames ning ei sisalda mingisugust tõsiseltvõetavat sisu!</p>
	<p>Ei tule pähe hetkel mitte ühtegi loomingulist ideed, mida siia kirjutada, aga tere olen Oskar Juksar
	ja see on minu esimene veebileht.</p>
	<?php
		echo "<p>Algas php õppimine</p>";
		echo "<p>Täna on ";
		echo date("d.m.Y") .", kell oli lehe avamise hetkel " .date("H:i:s");
		echo ", hetkel on " .$partOfDay .".</p>";
		
	?>
	
	
</body>
</html>