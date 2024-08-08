<?php include "conecta.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head> <link rel="stylesheet" type="text/css" href="trab.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-family: Arial">

    <h2 style="text-align:center"> Produtos </h2>







    <?php
     $sql = "SELECT id, descricao, fabricante, qntd, preco_custo, preco_venda, imagem FROM produtos";
     $resultado = mysqli_query($conexao, $sql);
     echo "<br>";
     if (mysqli_num_rows($resultado) > 0) {
         while ($registro = mysqli_fetch_assoc($resultado)){
             echo " <br>ID: " . $registro["id"]."<br> Descricao: " . $registro["descricao"].
             " <br>Fabricante: " . $registro["fabricante"]." <br>Quantidade: " . $registro["qntd"].
             " <br>Preço de custo: " . $registro["preco_custo"]."<br>Preço de venda : " . $registro["preco_venda"].
             " <br>Imagem: " . $registro["imagem"]. "<br><br>";
         }
     } else {
         echo "Nenhum registro encontrado!";
     }

    ?>

    
</body>
</html>