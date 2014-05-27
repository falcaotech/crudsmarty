<?php

    //incorpora o arquivo de configuração do smarty
    require 'inc/conf.php';

     //inclui o arquivo de conexão com o BD
    include "inc/conexao.php";

    //verifica se foi passada a variável 'nome' pelo $_POST
    if (isset($_POST["nome"])) {
	//recebe as variáveis
	$nome	    = $_POST['nome'];
	$descricao  = $_POST['descricao'];
	//monta o comando de inserção no BD
	$comando = "INSERT INTO categoria (nome, descricao) VALUES ('$nome', '$descricao')";
//	echo $comando;
//	exit;
	//executa e verifica se o comando foi realizado com sucesso
	if (mysqli_query($link, $comando)) {
	    //se foi cadastrado com sucesso
	    header("Location:categorias.php");	    
	} else {
	    //se deu erro
	    echo '<p>Erro ao cadastrar.</p>';
	    echo '<a href="javascript:history.back()">Voltar</a>';
	    die();
	}
    }
    
    //envia o título da página
    $tpl->assign("titulo", "Cadastro de categorias");
    
    //exibe o template
    $tpl->display("cadastrar_categoria.tpl");
    //$tpl->display(str_replace("/", "", str_replace(".php", ".tpl", $_SERVER['SCRIPT_NAME'])));