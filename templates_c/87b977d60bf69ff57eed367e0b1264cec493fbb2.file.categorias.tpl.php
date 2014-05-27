<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 15:27:55
         compiled from ".\templates\categorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238215384b9b0dda379-37555644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87b977d60bf69ff57eed367e0b1264cec493fbb2' => 
    array (
      0 => '.\\templates\\categorias.tpl',
      1 => 1401215193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238215384b9b0dda379-37555644',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384b9b0e59fd1_51738536',
  'variables' => 
  array (
    'categorias' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384b9b0e59fd1_51738536')) {function content_5384b9b0e59fd1_51738536($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<h1>Categorias</h1>
<a href="cadastrar_categoria.php">Novo categoria</a>
<table id="categorias" width="100%" border="1">
    <tr>
	<th>Nome da categoria</th>
	<th>Descrição da categoria</th>
	<th>Ações</th>
    </tr>

    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
?>
    <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['nome'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['item']->value['descricao'];?>
</td>
	<td>
	    <a href="editar_categoria.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Editar</a>
	    <a href="excluir_categoria.php?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">Excluir</a>
	</td>
	
    </tr>
    <?php } ?>

</table>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
