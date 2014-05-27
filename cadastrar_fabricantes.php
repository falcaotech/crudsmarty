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
	$categoria_id  = $_POST['categoria_id'];
	$fabricante_id = $_POST['fabricante_id'];
	//monta o comando de inserção no BD
	$comando = "INSERT INTO fabricante (nome, descricao) VALUES ('$nome', '$descricao')";
//	echo $comando;
//	exit;
	//executa e verifica se o comando foi realizado com sucesso
	if (mysqli_query($link, $comando)) {
	    //se foi cadastrado com sucesso
	    header("Location:fabricantes.php");	    
	} else {
	    //se deu erro
	    echo '<p>Erro ao cadastrar.</p>';
	    echo '<a href="javascript:history.back()">Voltar</a>';
	    die();
	}
    }
    //seleciona os fabricantes cadastrados no banco
    $comando = "SELECT * FROM fabricante";
     //executa a consulta
    $consulta = mysqli_query($link, $comando);
    //cria um array para os fabricantes
    $fabricantes = array();
    //laço para popular o array dos fabricantes
    while($fabricante = mysqli_fetch_assoc($consulta)){
	//adiciona o fabricante da vez ao array fabricantes 
	$fabricantes[] = $fabricante;
    }
     //envia a variável fabricantes para o template
    $tpl->assign('fabricantes', $fabricantes);
    
    //envia o título da página
    $tpl->assign("titulo", "Cadastro de fabricantes");
    
    
    //exibe o template
    $tpl->display("cadastrar_fabricantes.tpl");
    //$tpl->display(str_replace("/", "", str_replace(".php", ".tpl", $_SERVER['SCRIPT_NAME'])));