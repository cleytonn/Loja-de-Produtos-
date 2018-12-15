<?php
    function listaProdutos($conexao){
        $produtos = array();

        $query = "select * from produtos";
        $resultado = mysqli_query($conexao, $query);

        while($produto = mysqli_fetch_assoc($resultado)) {
            array_push($produtos, $produto);
        }
        return $produtos;
    }

    function insereProduto($conexao, $nome, $preco, $descricao, $categorias_id){
        $query = "Insert into produtos (nome, preco, descricao, categorias_id) values ('{$nome}', {$preco}, '{$descricao}', {$categorias_id})";  //Criação de uma string para armazenar valoress
        return mysqli_query($conexao, $query);
    }

    function removeProduto($conexao, $id){
        $query = "delete from produtos where id = {$id}";
        return mysqli_query($conexao, $query);
    }
?>