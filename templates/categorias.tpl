{include file="includes/header.tpl"}

<h1>Categorias</h1>
<a href="cadastrar_categoria.php">Novo categoria</a>
<table id="categorias" width="100%" border="1">
    <tr>
	<th>Nome da categoria</th>
	<th>Descrição da categoria</th>
	<th>Ações</th>
    </tr>

    {foreach from=$categorias item="item"}
    <tr>
	<td>{$item['nome']}</td>
	<td>{$item['descricao']}</td>
	<td>
	    <a href="editar_categoria.php?id={$item['id']}">Editar</a>
	    <a href="excluir_categoria.php?id={$item['id']}">Excluir</a>
	</td>
	
    </tr>
    {/foreach}

</table>

{include file="includes/footer.tpl"}