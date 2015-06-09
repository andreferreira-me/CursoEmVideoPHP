<!DOCTYPE html>
<html>
<head lang="pt-br">
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
    <?php

		/*
		Incremento e Decremento

		pré-incremento ++x
		pós-incremento x++
		pré-decremento --x
		pós-decremento x--
		*/

		$atual = $_GET['aa'];
		echo "O ano atual é $atual e o ano anterior é " . --$atual;

		// Variáveis Referenciadas
		// As duas variaáveis ficam "ligadas" recebendo o mesmo valor da outra

		$a = 3;
		$b = &$a;
		$b += 5;

		echo "<br/><br/>Valor de \$a vale $a";
		echo "<br/>Valor de \$b vale $b";

		// Variável de variável

		$abc = null;
		$x = "abc";
		$$x = "def";

		echo "<br/><br/>O conteúdo da variável X é $x";
		echo "<br/>A variável criada recebeu o valor $abc";
    ?>
</body>
</html>