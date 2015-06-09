<!DOCTYPE html>
<html>
<head lang="pt-br">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
    <?php
		$v1 = $_GET["x"];
		$v2 = $_GET["y"];

		echo "Os valores recebidos: $v1 e $v2";
		echo "<br/>O valor absoluto de $v2 é " . abs($v2);
		echo "<br/>O valor de $v1 <sup>$v2</sup> é " . pow($v1,$v2);
		echo "<br/>A raiz quadrada de $v1 é " . sqrt($v1);
		echo "<br/>O valor arredondado de $v2 é " . round($v2); // ceil() -> p/ cima   floor() -> p/ baixo
		echo "<br/>A parte inteira de $v2 é " . intval($v2);
		echo "<br/>O valor de $v1 em moeda é R$ " . number_format($v1,2,",",".");
    ?>
</body>
</html>