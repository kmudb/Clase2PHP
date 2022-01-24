
<html>
	<head>
	</head>
	<body>
		<form method="POST">
			<input type="text" name="num1">
			<br>
            <input type="text" name="num2">
			<br>
			<input type="submit" name="submit" value="Enviar Formulario">
		</form>
	</body>
</html>
<?php
	if(isset($_POST["submit"]) && !empty($_POST["submit"])) {

        $numero1 = $_POST["num1"];
        $numero2= $_POST["num2"];
        $suma = $numero1+$numero2;


		echo "<b>La suma de los dos numeros es:" .$suma. "</b><br>";

        $var="No hay limites para concatenar ";
        $msj=$var.$numero2;
        echo $msj;
	}
?>