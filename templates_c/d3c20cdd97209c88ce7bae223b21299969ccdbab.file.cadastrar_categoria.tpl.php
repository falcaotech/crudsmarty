<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 14:19:18
         compiled from ".\templates\cadastrar_categoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48195384c54d93e0b1-43505192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3c20cdd97209c88ce7bae223b21299969ccdbab' => 
    array (
      0 => '.\\templates\\cadastrar_categoria.tpl',
      1 => 1401211156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48195384c54d93e0b1-43505192',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384c54d9eeda3_04525718',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384c54d9eeda3_04525718')) {function content_5384c54d9eeda3_04525718($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<h1>Nova categoria</h1>
	
	<form action="cadastrar_categoria.php" method="post">
	    
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
