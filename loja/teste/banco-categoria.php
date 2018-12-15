<?php

    function listaCategorias($conexao){
    $categorias = array();

    $query = "Select * from categorias";

    $resultado = mysqli_query($conexao, $query);

    while ($categoria = mysqli_fetch_assoc($resultado)){
        array_push($categorias, $categoria);
    }

    return $categorias;
    }
