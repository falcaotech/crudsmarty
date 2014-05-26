
	
	<h1>Novo produto</h1>
	
	<form action="cadastrar.php" method="post">
	    
	    <label for="nome">Nome</label>
	    <input type="text" name="nome" id="nome" />
	      
	    <br />
	    
	    <label for="categoria_id">Categoria</label>
	    <select name="categoria_id" id="nome" value="<?php echo $produto['nome']; ?>">
		<option></option>
		{foreach from=$categorias item='cat'}
		    <option value="{$cat['id']}">{$cat['nome']}</option>
		{/foreach}
	    </select>
	    
	    <br />
	    
	    <label for="fabricante_id">Fabricante</label>
	    <select name="fabricante_id" id="nome" value="<?php echo $produto['nome']; ?>">
		
		<option></option>
		<?php while($fabricante = mysql_fetch_assoc($fabricantes)){ ?>
		<option value="<?php echo $fabricante['id']; ?>"><?php echo $fabricante['nome']; ?></option>
		<?php } ?>
	    </select>
	    
	    <br />
	    
	    <label for="descricao">Descrição</label>
	    <textarea name="descricao" id="descricao" ></textarea>
	    
	    <br />
	    
	    <input type="submit" value="Salvar" />
		
	</form>
	
	<a href="index.php">Voltar</a>
	