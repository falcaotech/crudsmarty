<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 15:18:10
         compiled from ".\templates\cadastrar_fabricantes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:274065384cb33e8a867-45350765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aa6bbc1f716b08f5fef4ed47dc122b0c9f53feb' => 
    array (
      0 => '.\\templates\\cadastrar_fabricantes.tpl',
      1 => 1401214685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274065384cb33e8a867-45350765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384cb33f1fe49_30678641',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384cb33f1fe49_30678641')) {function content_5384cb33f1fe49_30678641($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<h1>Novo fabricante</h1>
	
	<form action="cadastrar_fabricantes.php" method="post">
	    
	    <label for="nome" style="display: inline-block; width: 75px;">Nome</label>
	    <input type="text" name="nome" id="nome" />
	      
	    <br />
	    
	    <label for="descricao" style="display: inline-block; width: 75px;">Descrição</label>
	    <textarea name="descricao" id="descricao" ></textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="index.php">Voltar</a>
	
<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
