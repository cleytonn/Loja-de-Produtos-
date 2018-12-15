<?php include ("cabecalho.php");
include ("banco-produto.php");
include ("conecta.php")?>

    <?php

        $nome = $_POST["nome"];                  //leitura do nome em produto-formulario.php
        $preco = $_POST["preco"];                //leitura do preco em produto-formulario.php
        $descricao = $_POST["descricao"];        //leitura da descricao em produto-formulario.php
        $categorias_id = $_POST["categorias_id"];

        if(insereProduto($conexao, $nome, $preco, $descricao, $categorias_id)){ ?>
            <p class="text-success">O Produto <?= $nome; ?>, <?= $preco; ?> foi adicionado!</p>
        <?php
        }else{
            $msg = mysqli_error($conexao);?>

            <p class="text-success">O Produto <?= $nome; ?>, nao foi adicionado: <?= $msg ?></p>
        <?php
        }
        ?>

<?php include ("rodape.php"); ?>