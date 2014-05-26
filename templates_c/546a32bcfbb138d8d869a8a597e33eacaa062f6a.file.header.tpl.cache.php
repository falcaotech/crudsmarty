<?php /* Smarty version Smarty-3.1.18, created on 2014-05-26 16:27:26
         compiled from ".\templates\includes\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:971753839163145745-40188563%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '546a32bcfbb138d8d869a8a597e33eacaa062f6a' => 
    array (
      0 => '.\\templates\\includes\\header.tpl',
      1 => 1401132430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '971753839163145745-40188563',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53839163159060_89606292',
  'variables' => 
  array (
    'titulo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53839163159060_89606292')) {function content_53839163159060_89606292($_smarty_tpl) {?><!DOCTYPE html>
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
	</nav><?php }} ?>
