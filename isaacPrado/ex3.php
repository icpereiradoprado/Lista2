<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercío 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 3</h2>
        <form action="" method="POST">
                <label for="">Digite seu nome: </label>
                <input type="text" name="nome" id="nome" value=""> <br>

                <label for="">Digite sua idade: </label>
                <input type="number" name="idade" id="idade" min="0" value=""> <br>
                
                <label for="">Selecione seu sexo: </label>
                <select name="sexo" id="sexo">
                    <option value="0">---SELECIONE---</option>
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                </select> <br>

                <input type="submit" name="enviar" id="submit" value="Enviar">
            </form>
        

        <?php
            if(isset($_POST['enviar'])){
                $idade= $_POST['idade'];
                $nome = $_POST['nome'];
                $sexo = $_POST['sexo'];
                if($sexo == 1 && $idade == 18){
                    echo"<div class='resultado'>$nome, Você já pode realizar o seu alistamento militar</div>";
                }else if($sexo == 1 && $idade < 18){
                    echo"<div class='resultado'>$nome, Você só pode ser alistar quando completar 18 anos</div>";
                }else{
                    echo"<div class='resultado'>$nome, você não pode se alistar</div>";
                }
            }    
        ?>

        <div class="campo"><a href="index.php"><button class="home">HOME</button></a></div>
    </div>

    <div class="campoBtn">
        <a href="ex2.php" class="btnLink"><button class="btn">Voltar</button></a>
        <a href="ex4.php" class="btnLink"><button class="btn">Próximo</button></a>
    </div>
</body>
</html>