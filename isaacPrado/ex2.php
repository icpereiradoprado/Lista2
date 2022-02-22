<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercío 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 2</h2>
        <form action="" method="POST">
                <label for="">Digite uma palavra:</label>
                <input type="text" name="palavra" id="palavra" value=""> <br>

                <input type="submit" name="enviar" id="submit" value="Enviar">
            </form>
        

        <?php
            if(isset($_POST['enviar'])){
                $php ="";
                $palavra = $_POST['palavra'];
                for($i = 0; $i < 4; $i++){
                    $php .= " ".$palavra;
                    // $palavra.=" ".$palavra;
                    echo "<div class='resultado'>$php <br><br></div>";
                }
            }    
        ?>

        <div class="campo"><a href="index.php"><button class="home">HOME</button></a></div>
    </div>

    <div class="campoBtn">
        <a href="ex1.php" class="btnLink"><button class="btn">Voltar</button></a>
        <a href="ex3.php" class="btnLink"><button class="btn">Próximo</button></a>
    </div>
</body>
</html>