<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 15:24:33
         compiled from ".\templates\fabricantes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176025384b9d01208b7-06401945%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a363bb49d7e66cb116f13a146dd75dc3ed5f22d1' => 
    array (
      0 => '.\\templates\\fabricantes.tpl',
      1 => 1401214811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176025384b9d01208b7-06401945',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384b9d01a0378_02547534',
  'variables' => 
  array (
    'fabricantes' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384b9d01a0378_02547534')) {function content_5384b9d01a0378_02547534($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1>Fabricantes</h1>
<a href="cadastrar_fabricantes.php">Novo fabricante</a>
<table id="fabricantes" width="100%" border="1">
    <tr>
	<th>Nome do fabricante</th>
	<th>Descrição do fabricante</th>
	<th>Ações</th>
    </tr>

    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fabricantes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
    <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['descricao'];?>
</td>
	<td>
	    <a href="editar_fabricante.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Editar</a>
	    <a href="excluir_fabricante.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Excluir</a>
	</td>
	
    </tr>
    <?php } ?>

</table>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
