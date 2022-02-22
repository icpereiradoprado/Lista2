<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercío 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 5</h2>
        <form action="" method="POST">
                <label for="">Digite seu nome: </label>
                <input type="text" name="nome" id="nome" value=""> <br>

                <label for="">Selecione seu sexo: </label>
                <select name="sexo" id="sexo">
                    <option value="0">---SELECIONE---</option>
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                </select> <br>

                <label for="">Digite sua idade: </label>
                <input type="number" name="idade" id="idade" min="0" value=""> <br>
                
                <input type="submit" name="enviar" id="submit" value="Enviar">
            </form>
        

        <?php
            if(isset($_POST['enviar'])){
                $idade= $_POST['idade'];
                $nome = $_POST['nome'];
                $sexo = $_POST['sexo'];
                if($sexo == 2 && $idade < 25){
                    echo"<div class='resultado'>$nome, ACEITA.</div>";
                }else{
                    echo"<div class='resultado'>$nome, NÃO ACEITA.</div>";
                }
            }    
        ?>

        <div class="campo"><a href="index.php"><button class="home">HOME</button></a></div>
    </div>

    <div class="campoBtn">
        <a href="ex4.php" class="btnLink"><button class="btn">Voltar</button></a>
        <a href="ex6.php" class="btnLink"><button class="btn">Próximo</button></a>
    </div>
</body>
</html>