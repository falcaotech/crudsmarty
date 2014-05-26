<?php

//incorpora o arquivo de configuração do smarty
require	'inc/conf.php';

//inclui o arquivo de conexão com o BD
include "inc/conexao.php";

$consulta = mysqli_query($link, "SELECT 
				    p.*, 
				    c.nome AS categoria_nome, 
				    f.nome AS fabricante_nome 
				    FROM produto p 
				    INNER JOIN categoria AS c ON p.categoria_id = c.id 
				    INNER JOIN fabricante AS f ON p.fabricante_id = f.id");
//cria um array para guardar os produtos
$produtos = array();

//laço para popular o array dos produtos
while($produto = mysqli_fetch_assoc($consulta)){
    //adiciona o produto da vez ao array produtos 
    $produtos[] = $produto;
}

//envia o array produtos para o template
$tpl->assign("produtos", $produtos);
//envia o título da página
$tpl->assign("titulo", "Página inicial - Listagem de produtos");

//exibe o template
$tpl->display('index.tpl');