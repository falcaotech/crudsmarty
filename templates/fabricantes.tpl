{include file="includes/header.tpl"}

<h1>Fabricantes</h1>
<a href="cadastrar_fabricantes.php">Novo fabricante</a>
<table id="fabricantes" width="100%" border="1">
    <tr>
	<th>Nome do fabricante</th>
	<th>Descrição do fabricante</th>
	<th>Ações</th>
    </tr>

    {foreach from=$fabricantes item="item"}
    <tr>
	<td>{$item['nome']}</td>
	<td>{$item['descricao']}</td>
	<td>
	    <a href="editar_fabricante.php?id={$item['id']}">Editar</a>
	    <a href="excluir_fabricante.php?id={$item['id']}">Excluir</a>
	</td>
	
    </tr>
    {/foreach}

</table>

{include file="includes/footer.tpl"}