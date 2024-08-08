<?php 
    include "conecta.php";
    $sql = "SELECT id, nome, senha, email FROM usuario";
    $resultado = mysqli_query($conexao, $sql);
    echo "<b><br> Todos os registros <br><br> <b>";
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0) {
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo " id: " . $registro["id"]." nome: " . $registro["nome"].
            " senha: " . $registro["senha"]." email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!";
    };



    echo "<b><br><br> Nomes que começam com C: <br><b>";
    $sql = "SELECT id, nome, senha, email FROM usuario WHERE nome like 'c%'";

     $resultado = mysqli_query($conexao, $sql);
    echo "<br>";
    if (mysqli_num_rows($resultado) > 0) {
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo " id: " . $registro["id"]." nome: " . $registro["nome"].
            " senha: " . $registro["senha"]." email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!"; }


    echo "<b><br><br> Ordenado pelo email: <br><b>";
    $sql = "SELECT id, nome, senha, email FROM usuario ORDER BY email";
    
        $resultado = mysqli_query($conexao, $sql);
        echo "<br>";
        if (mysqli_num_rows($resultado) > 0) {
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo " id: " . $registro["id"]." nome: " . $registro["nome"].
            " senha: " . $registro["senha"]." email: " . $registro["email"]. "<br>";
        }
    } else {
        echo "Nenhum registro encontrado!"; }



        echo "<b><br><br> Verificar se existe um usuario 'Caio' e senha '140404': <br><b>";
    $sql = "SELECT id, nome, senha, email FROM usuario where nome='Caio Resende de Souza' and senha ='14042004'";
    
        $resultado = mysqli_query($conexao, $sql);
        echo "<br>";
        if (mysqli_num_rows($resultado) > 0) {
        while ($registro = mysqli_fetch_assoc($resultado)){
            echo " email: " . $registro["email"]. "<br>";
        }

        
    } else {
        echo "Nenhum registro encontrado!"; }

?>