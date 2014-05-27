<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 15:10:47
         compiled from ".\templates\editar_categoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:252025384d327339144-91961787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f139036d2880fc1cc908c05ea8799d6015087ebe' => 
    array (
      0 => '.\\templates\\editar_categoria.tpl',
      1 => 1401214246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '252025384d327339144-91961787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384d3273ea2e9_89037243',
  'variables' => 
  array (
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384d3273ea2e9_89037243')) {function content_5384d3273ea2e9_89037243($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<h1>Edição de categoria</h1>
	
	<form action="editar_categoria.php?id=<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" method="post">
	    
	    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id'];?>
" />
	    
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['nome'];?>
" />
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" ><?php echo $_smarty_tpl->tpl_vars['categoria']->value['descricao'];?>
</textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="index.php">Voltar</a>
	
    <?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
