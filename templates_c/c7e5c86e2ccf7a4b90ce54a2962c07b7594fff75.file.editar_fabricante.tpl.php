<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 15:25:17
         compiled from ".\templates\editar_fabricante.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70205384d88d783ee1-10315671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7e5c86e2ccf7a4b90ce54a2962c07b7594fff75' => 
    array (
      0 => '.\\templates\\editar_fabricante.tpl',
      1 => 1401214890,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70205384d88d783ee1-10315671',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fabricante' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384d88d7f2237_17255045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384d88d7f2237_17255045')) {function content_5384d88d7f2237_17255045($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<h1>Edição de fabricante</h1>
	
	<form action="editar_fabricante.php?id=<?php echo $_smarty_tpl->tpl_vars['fabricante']->value['id'];?>
" method="post">
	    
	    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['fabricante']->value['id'];?>
" />
	    
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" value="<?php echo $_smarty_tpl->tpl_vars['fabricante']->value['nome'];?>
" />
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" ><?php echo $_smarty_tpl->tpl_vars['fabricante']->value['descricao'];?>
</textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="index.php">Voltar</a>
	
    <?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
