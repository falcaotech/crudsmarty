<?php /* Smarty version Smarty-3.1.18, created on 2014-05-27 11:27:30
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47655384a0d29fdac0-25858290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1401198775,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47655384a0d29fdac0-25858290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'produtos' => 0,
    'produto' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5384a0d2a8e815_82319535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5384a0d2a8e815_82319535')) {function content_5384a0d2a8e815_82319535($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("includes/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
    
    <?php  $_smarty_tpl->tpl_vars["produto"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["produto"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['produtos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["produto"]->key => $_smarty_tpl->tpl_vars["produto"]->value) {
$_smarty_tpl->tpl_vars["produto"]->_loop = true;
?>
    <tr>
	<td><?php echo $_smarty_tpl->tpl_vars['produto']->value['nome'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['produto']->value['descricao'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['produto']->value['categoria_nome'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['produto']->value['fabricante_nome'];?>
</td>
	<td>
	    <a href="editar.php?id=<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
">Editar</a>
	    <a href="excluir.php?id=<?php echo $_smarty_tpl->tpl_vars['produto']->value['id'];?>
">Excluir</a>
	</td>
    </tr>
    <?php }
if (!$_smarty_tpl->tpl_vars["produto"]->_loop) {
?>
	<tr>
	    <td colspan="5">Nenhum produto cadastrado.</td>
	</tr>
    <?php } ?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("includes/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
