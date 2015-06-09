<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Operadores Aritméticos</title>
</head>
<body>
<?php

    /*
    Adição +
    Subtração -
    Multiplicação *
    Divisão /
    Módulo %;
    */

	// /projetos/CursoEmVideoPHP/oparitmeticos.php?a=3&b=2

    $n1 = $_GET["a"];
	$n2 = $_GET["b"];
	echo "Valores recebidos pela URL com GET: $n1 e $n2";

    //$n1 = 3;
    //$n2 = 2;
	$m = ($n1 + $n2) / 2;

    $s = $n1 + $n2;
	//echo "A soma de $n1 e $n2 é igual a $s";

    echo "<br/>A soma vale ". ($n1 + $n2);
	echo "<br/>A subtração vale ". ($n1 - $n2);
	echo "<br/>A multiplicação vale ". ($n1 * $n2);
	echo "<br/>A divisão vale ". ($n1 / $n2);
	echo "<br/>O módulo vale ". ($n1 % $n2);
	echo "<br/>A média vale ". $m;

?>
</body>
</html>