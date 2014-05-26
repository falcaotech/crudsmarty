<?php /* Smarty version Smarty-3.1.18, created on 2014-05-26 16:40:06
         compiled from ".\templates\cadastrar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2323153839793c54302-20486414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7843731932c7cda3d6006ae56f8ccc38da101b9' => 
    array (
      0 => '.\\templates\\cadastrar.tpl',
      1 => 1401133152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2323153839793c54302-20486414',
  'function' => 
  array (
  ),
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53839793cc5813_82719630',
  'variables' => 
  array (
    'categorias' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53839793cc5813_82719630')) {function content_53839793cc5813_82719630($_smarty_tpl) {?>
	
	<h1>Novo produto</h1>
	
	<form action="cadastrar.php" method="post">
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" />
	      
	    <br />
	    
	    <label for="categoria_id">Categoria</label>
	    <select name="categoria_id" id="nome" value="<<?php ?>?php echo $produto['nome']; ?<?php ?>>">
		<option></option>
		<?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
		    <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['nome'];?>
</option>
		<?php } ?>
	    </select>
	    
	    <br />
	    
	    <label for="fabricante_id">Fabricante</label>
	    <select name="fabricante_id" id="nome" value="<<?php ?>?php echo $produto['nome']; ?<?php ?>>">
		
		<option></option>
		<<?php ?>?php while($fabricante = mysql_fetch_assoc($fabricantes)){ ?<?php ?>>
		<option value="<<?php ?>?php echo $fabricante['id']; ?<?php ?>>"><<?php ?>?php echo $fabricante['nome']; ?<?php ?>></option>
		<<?php ?>?php } ?<?php ?>>
	    </select>
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" ></textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="index.php">Voltar</a>
	<?php }} ?>
