<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercío 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 1</h2>
        <form action="" method="POST">
            <label for="">Nome da primeira criança:</label>
            <input type="text" name="nome1" id="nome1" value=""> <br>
            <label for="">Altura da primeira criança:</label>
            <input type="number" name="altura1" id="altura1" min="0" max="2.80" step="0.01"><br>
            <label for="">Nome da segunda criança:</label>
            <input type="text" name="nome2" id="nome2" value=""> <br>
            <label for="">Altura da segunda criança:</label>
            <input type="number" name="altura2" id="altura2" min="0" max="2.80" step="0.01"><br>

            <input type="submit" name="enviar" id="submit" value="Calcular">
        </form>
    

    <?php
        $ano = 0;
        if(isset($_POST['enviar'])){
            $altura1 = $_POST['altura1'];
            $altura2 = $_POST['altura2'];
            $nome1 = $_POST['nome1'];
            $nome2 = $_POST['nome2'];
            while($altura1 >= $altura2){
                $ano++;
                $altura1 += 0.02;
                $altura2 += 0.03;
            }
            echo"<div class='resultado'>Altura 1: $altura1<br>Altura 2: $altura2<br></div>";
            echo"<div class='resultado'>Demorou $ano anos para o(a) $nome2 ser maior que o(a) $nome1.</div>";
        }
    ?>
    
    <div class="campo"><a href="index.php"><button class="home">HOME</button></a></div>
    </div>
    <div class="campoBtn">
        <a href="index.php" class="btnLink"><button class="btn">Voltar</button></a>
        <a href="ex2.php" class="btnLink"><button class="btn">Próximo</button></a>
    </div>
</body>
</html>