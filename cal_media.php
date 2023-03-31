<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulário</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="index.html">
        <link rel="stylesheet" href="form_media.html">
    </head>
    <body>
    <?php
        $n1 = $_POST["n1"];
		$n2 = $_POST["n2"];
        $nome = $_POST["nome"];

        $n1 = str_replace(',','.',$n1);  
        $n2 = str_replace(',','.',$n2);      

		$media = ($n1 + $n2) / 2;

		echo "<p> A primeira nota imformada foi: $n1 <br> A segunda nota informada foi: $n2 .</p>";
		echo "<p>A média do aluno(a) ". $nome . " é: " . number_format($media, 2) . " .</p>";

        if ($media <=3){ 
            echo "<p> O aluno(a) está reprovado</p>";
        } elseif ($media > 3 && $media <6 ){
            echo "<p> O aluno(a) está no exame final</p>";
        }  elseif ($media >= 6 ){
            echo "<p> O aluno(a) está aprovado</p>";
        }        
    ?>

    </body>