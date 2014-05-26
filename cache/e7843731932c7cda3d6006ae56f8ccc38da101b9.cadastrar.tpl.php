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
  'cache_lifetime' => 120,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53839896da3010_60013324',
  'variables' => 
  array (
    'categorias' => 0,
    'cat' => 0,
  ),
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53839896da3010_60013324')) {function content_53839896da3010_60013324($_smarty_tpl) {?>	
	<h1>Novo produto</h1>
	
	<form action="cadastrar.php" method="post">
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" />
	      
	    <br />
	    
	    <label for="categoria_id">Categoria</label>
	    <select name="categoria_id" id="nome" value="<?php echo '<?php'; ?>
 echo $produto['nome']; <?php echo '?>'; ?>
">
		<option></option>
				    <option value="3">Categoria 01</option>
				    <option value="4">Categoria 02</option>
				    <option value="5">Categoria 03</option>
			    </select>
	    
	    <br />
	    
	    <label for="fabricante_id">Fabricante</label>
	    <select name="fabricante_id" id="nome" value="<?php echo '<?php'; ?>
 echo $produto['nome']; <?php echo '?>'; ?>
">
		
		<option></option>
		<?php echo '<?php'; ?>
 while($fabricante = mysql_fetch_assoc($fabricantes)){ <?php echo '?>'; ?>

		<option value="<?php echo '<?php'; ?>
 echo $fabricante['id']; <?php echo '?>'; ?>
"><?php echo '<?php'; ?>
 echo $fabricante['nome']; <?php echo '?>'; ?>
</option>
		<?php echo '<?php'; ?>
 } <?php echo '?>'; ?>

	    </select>
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" ></textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="index.php">Voltar</a>
	<?php }} ?>
