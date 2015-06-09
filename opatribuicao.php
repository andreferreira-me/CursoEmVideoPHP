<!DOCTYPE html>
<html>
<head lang="pt-br">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
    <?php
		/*
		Operadores de Atibuição

		Adição $a += $b
		Subtração $a -= $b
		Multiplicação $a *= $b
		Divisão $a /= $b
		Módulo $a %= $b
		Concatenação $a .= $b
		*/

    	$preco = $_GET["p"];
		echo "O preço do produto é R$ " . number_format($preco,2);

		//$preco += ($preco*10/100);
		//echo "<br/>O preço com 10% de juros será R$ $preco";

		$preco -= ($preco*10/100);
		echo "<br/>O preço com 10% de desconto será R$ " . number_format($preco,2);
    ?>
</body>
</html>