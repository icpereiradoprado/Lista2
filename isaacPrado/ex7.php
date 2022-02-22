<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercío 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Exercício 7</h2>
        <form method="POST">
                <label for="">Digite o primeiro número: </label><br>
                <input type="number" name="numero1" id="numero1" class="input_ex7" value=""> <br>
                <label for="">Digite o segundo número: </label><br>
                <input type="number" name="numero2" id="numero2" class="input_ex7" value=""> <br>
                <label for="">Digite o terceiro número: </label><br>
                <input type="number" name="numero3" id="numero3" class="input_ex7" value=""> <br>
                <label for="">Digite o quarto número: </label><br>
                <input type="number" name="numero4" id="numero4" class="input_ex7" value=""> <br>
                <label for="">Digite o quinto número: </label><br>
                <input type="number" name="numero5" id="numero5" class="input_ex7" value=""> <br>
                <label for="">Digite o sexto número: </label><br>
                <input type="number" name="numero6" id="numero6" class="input_ex7" value=""> <br>
                <label for="">Digite o sétimo número: </label><br>
                <input type="number" name="numero7" id="numero7" class="input_ex7" value=""> <br>
                <label for="">Digite o oitavo número: </label><br>
                <input type="number" name="numero8" id="numero8" class="input_ex7" value=""> <br>
                <label for="">Digite o nono número: </label><br>
                <input type="number" name="numero9" id="numero9" class="input_ex7" value=""> <br>
                <label for="">Digite o décimo número: </label><br>
                <input type="number" name="numero10" id="numero10" class="input_ex7" value=""> <br>
                

                <input type="submit" name="enviar" id="submit" value="Enviar">
        </form>
        

        <?php
            $soma = 0;
            $soma_negativo = 0;
            if(isset($_POST['enviar'])){
                $numero = array($_POST['numero1'],$_POST['numero2'],$_POST['numero3'],$_POST['numero4'],$_POST['numero5'],$_POST['numero6'],$_POST['numero7'],$_POST['numero8'],$_POST['numero9'],$_POST['numero10']);
                foreach($numero as $num){
                    if($num > 0){
                        $soma+=$num;
                    }else if($num<0){
                        $soma_negativo+=$num;
                    }
                }
            }
            echo"<div class='resultado'>A soma dos números positivos é: $soma</div>";
            echo"<div class='resultado'><br>A soma dos números negativos é: $soma_negativo</div>";

        ?>

        <div class="campo"><a href="index.php"><button class="home">HOME</button></a></div>
    </div>

    <div class="campoBtn" style="margin-top: 180px; margin-bottom: 20px;">
        <a href="ex6.php" class="btnLink"><button class="btn">Voltar</button></a>
        <a href="ex8.php" class="btnLink"><button class="btn">Próximo</button></a>
    </div>
</body>
</html>