<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>
	harjtus-3s - PHP põhitõed
	</title>
</head>

<body>

	<?php
	    $variable = 20;
	    echo $variable;
	    // Lisan veebilehitsejas parema loetavuse saamiseks reamurdmise elemendi:
	    echo "<br>";
	?>


		<h2> muutjad </h2>
		<?php echo "Hello world!"; ?><br>
		<?php echo 'Hello world!'; ?>

		<br>
		<?php
	    $variable = 24;
	    $variable2 = 26;
	    echo $variable . $variable2;
	   
	?>

	<h2>Nimekirja väljastamine muutujate ja stringide abil</h2>

	<?php
		$student1 = "<li>Margit</li>";
		$student2 = "<li>aigar</li>";
		$student3 = "<li>asdasdasd</li>";
		$student4 = "<li>1231231</li>";
		$student5 = "<li>Marasdasasdgit</li>";
		$firstname = "<li>Kaido</li>";
		$lastname = "<li>Soodla</li>";
		$fullname = "<li>$firstname" . "$lastname</li>";
		$test = "Testmime";

			



	?>



			<ul>
				<?php echo $student1; ?>
				<?php echo $student2; ?>
				<?php echo $student3; ?>
				<?php echo $student4; ?>
				<?php echo $student5; ?>
				<?php echo $fullname; ?>


			</ul>


			
		<?php echo "$test kas interpolatsioon töötab";?>







</body>

</html>