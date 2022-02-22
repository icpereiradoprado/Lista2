<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercío 8</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h2>Exercício 8</h2>
        <form action="" method="POST">
                <label for="">Digite um número para o cálculo da tabuada: </label>
                <input type="number" name="numero" id="numero" min=0 value=""> <br>

                <input type="submit" name="calcular" id="submit" value="Calcular">
            </form>
        

        <?php
            if(isset($_POST['calcular'])){
                $numero = $_POST['numero'];
                $tabuada = 0;
                if($numero == 5){
                    for($i = 0; $i<=10; $i++){
                        $tabuada = $i * $numero;
                        echo "<div class='resultado_tabuada'><br>$numero X $i = $tabuada</div>";
                    }
                }else{
                    for($i = 0; $i<=10; $i++){
                        if($i == 5){
                            $i=6;
                        }
                        $tabuada = $i * $numero;
                        echo "<div class='resultado_tabuada'><br>$numero X $i = $tabuada</div>";
                    }
                }
            }    
        ?>

        <div class="campo"><a href="index.php"><button class="home">HOME</button></a></div>
    </div>

    <div class="campoBtn" style="margin-bottom: 20px;">
        <a href="ex7.php" class="btnLink"><button class="btn">Voltar</button></a>
    </div>
</body>
</html>