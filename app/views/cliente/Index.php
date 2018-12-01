<div class="base-home">
	<h1 class="titulo"><span class="cor">Lista de</span> contatos</h1>
	<div class="base-lista">
		<span class="qtde"><b>18</b> clientes cadastrados</span>
		<div class="tabela">	
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
				<thead>
					<tr>
						<th width="25%" align="left">Nome</th>
						<th width="25%" align="left">Email</th>
						<th width="10%" align="left">Telefone</th>
						<th width="20%" colspan="2" align="center">Alterar</th>
					</tr>
				</thead>
				<tbody>

				  	<?php foreach ($clientes as $cliente) {
				  		# code...
				  		
				  	?>

					<tr class="cor1">
						<td>Manoel Jailton Nascimento</td>
						<td>mjailton @gmail.com</td>
						<td>335550221</td>
						<td align="center">
						<a href="index.php?link=2" class="btn">Editar</a>
						</td>
						<td align="center">
						<a href="index.php?link=2" class="btn excluir">excluir</a>
						</td>
					 </tr>

					<?php } ?>

				</tbody>
			</table>
		</div>								
	</div>	
</div>