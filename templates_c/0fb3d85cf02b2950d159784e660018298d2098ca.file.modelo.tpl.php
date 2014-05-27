<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 14:37:18
         compiled from ".\templates\modelo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23515384cce5eec280-22743665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fb3d85cf02b2950d159784e660018298d2098ca' => 
    array (
      0 => '.\\templates\\modelo.tpl',
      1 => 1401212237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23515384cce5eec280-22743665',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384cce5f420b1_50938738',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384cce5f420b1_50938738')) {function content_5384cce5f420b1_50938738($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
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
	
	<?php echo $_smarty_tpl->getSubTemplate ("inc/".((string)$_smarty_tpl->tpl_vars['miolo']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
    </body>
</html><?php }} ?>
