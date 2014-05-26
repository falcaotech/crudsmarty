<?php /*%%SmartyHeaderCode:721853838fbe0a11a0-42584650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1401133504,
      2 => 'file',
    ),
    '546a32bcfbb138d8d869a8a597e33eacaa062f6a' => 
    array (
      0 => '.\\templates\\includes\\header.tpl',
      1 => 1401132430,
      2 => 'file',
    ),
    'fcc8756e8275e4cc7658da0cbe9f3cac45ac7647' => 
    array (
      0 => '.\\templates\\includes\\footer.tpl',
      1 => 1401131573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '721853838fbe0a11a0-42584650',
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538399ca52f912_49608422',
  'variables' => 
  array (
    'produtos' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538399ca52f912_49608422')) {function content_538399ca52f912_49608422($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Página inicial - Listagem de produtos</title>
        <!--favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<style>
	    body {
		background:#EEE;
	    }
	</style>
    </head>
    <body>
	<nav>
	    <ul>
		<li><a href="index.php">Produtos</a></li>
		<li><a href="categorias.php">Categorias</a></li>
		<li><a href="fabricantes.php">Fabricantes</a></li>
		
	    </ul>
	</nav>

<h1>Produtos</h1>
<a href="cadastrar.php">Novo produto</a>
<table id="produtos" width="100%" border="1">
    <tr>
	<th>Nome</th>
	<th>Descrição</th>
	<th>Categoria</th>
	<th>Fabricante</th>
	<th>Ações</th>
    </tr>
    
    	<tr>
	    <td colspan="5">Nenhum produto cadastrado.</td>
	</tr>
    </table>

    </body>
</html><?php }} ?>
