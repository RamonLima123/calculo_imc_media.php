<doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>calculo</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="form_imc.php">
        <link rel="stylesheet" href="index.html">
    </head>
    <body>
    <?php
		$peso = $_POST["peso"];
		$altura = $_POST["altura"];

        $peso = str_replace(',','.',$peso);  
        $altura = str_replace(',','.',$altura);  

		$imc = $peso / ($altura * $altura);

		echo "<p>Seu peso é $peso kg e sua altura é $altura m.</p>";
		echo "<p>Seu IMC é de " . number_format($imc, 2) . " .</p>";
        

        if ($imc < 17) {
			echo "<p>Você está muito abaixo do peso.</p>";
		} elseif ($imc >= 17 && $imc < 18.49) {
			echo "<p>Você está abaixo do peso.</p>";
		} elseif ($imc >= 18.5 && $imc < 24.99) {
			echo "<p>Seu peso está normal.</p>";
		} elseif ($imc >= 25 && $imc < 29.99 ) {
			echo "<p>Você está acima do peso.</p>";
		} elseif ($imc >=30 && $imc < 34.99) {
            echo "<p>Você está com obesidade 1!</p>";
        } elseif ($imc >=35 && $imc < 39.99) {
            echo "<p>Você está com obesidade 2!(grave)</P>";
        } else {
            echo "<p>Você está com obesidade 3!(mórbida)</p>";
        }

	?> 
        
    </body>
</html>