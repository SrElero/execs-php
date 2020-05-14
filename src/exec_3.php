<!DOCTYPE html>
<html>
<head>
	<title> Exercicio 3 </title>
</head>
<body>

	<form name="form_exec3" action="processa_exec3.php" method="GET">
		Nome:
		<input type="text" name="nome" required="required">
		<br> <br>

		Sexo:
		<select name="sexo">
			<option value="m"> Masculino </option>
			<option value="f"> Feminino </option>
		</select>
		<br> <br>

		Idade:
		<input type="number" name="idade" required="required">
		<br> <br>

		<input type="submit" name="enviar" value="Enviar">

	</form>

</body>
</html>