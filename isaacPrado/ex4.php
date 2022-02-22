<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercío 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Exercício 4</h2>
        <form action="" method="POST">
                <label for="">Digite o preço do primeiro produto: </label>
                <input type="number" name="produto1" id="produto1" step=0.01 min=0 value=""> <br>

                <label for="">Digite o preço do segundo produto: </label>
                <input type="number" name="produto2" id="produto2" step=0.01 min=0 value=""> <br>

                <input type="submit" name="calcular" id="submit" value="Calcular">
            </form>
        

        <?php
            if(isset($_POST['calcular'])){
                $produto1= $_POST['produto1'];
                $produto2 = $_POST['produto2'];
                $produto1_desc = $produto1 - ($produto1 * 0.08);
                $produto2_desc = $produto2 - ($produto2 * 0.11);

                $valor_total = $produto1_desc + $produto2_desc;
                $valor_total = number_format($valor_total, 2, ',' , '');
                echo "<div class='resultado'>O valor final com desconto a ser pago é R\$ $valor_total</div>";
            }    
        ?>

        <div class="campo"><a href="index.php"><button class="home">HOME</button></a></div>
    </div>

    <div class="campoBtn">
        <a href="ex3.php" class="btnLink"><button class="btn">Voltar</button></a>
        <a href="ex5.php" class="btnLink"><button class="btn">Próximo</button></a>
    </div>
</body>
</html>