<div class="container_contacto_photo">
</div>
<div class="container_documentos">
	<div class="documentos_title">
	<?php
	// debug($documentos);
	echo 'Documentos Importantes';
	?>
	</div>
	
	<table>
		<tr>
			<th>
				Documento
			</th>
			<th>
				Autor
			</th>
			<th>
				Resumen
			</th>
			<th>
				Descarga Directa
			</th>
		</tr>
		<?php foreach($documentos as $docs){ ?>
		<tr>
			<td>
				<?php echo $docs['Documento']['nombre']; ?>
			</td>
			<td>
				<?php echo $docs['Documento']['autor']; ?>
			</td>
			<td>
				<?php echo $docs['Documento']['resumen']; ?>
			</td>
			<td>
				<?php echo $this->Html->link(
					'Descargar',
					array('controller' => 'capacitacion', 'action' => 'sendFile', $docs['Documento']['ruta'])
					);
				?>
			</td>
		</tr>
		<?php }?>
	</table>
</div>