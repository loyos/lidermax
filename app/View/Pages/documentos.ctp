<div class="container_contacto_photo">
	<?php
	// echo $this->Html->image($contenidos['Contenido']['imagen'], array('width'=>'970px','height'=>'200px'));
	$documentos = array(array('nombre' => 'primero', 'resumen' => 'segundo', 'url' => 'aqui va el link'),array('nombre' => 'primero', 'resumen' => 'segundo', 'url' => 'aqui va el link'),array('nombre' => 'primero', 'resumen' => 'segundo', 'url' => 'aqui va el link'));
	// $documentos = array('prueba', 'asdas', 'adsddd');
	?>
</div>
<div class="container_documentos">
	<div class="documentos_title">
	<?php
	echo 'Documentos Importantes';
	?>
	</div>
	
	<table>
		<tr>
			<th>
				Documento
			</th>
			<th>
				Resumen
			</th>
			<th>
				Link de Descarga
			</th>
		</tr>
		<?php foreach($documentos as $docs){ ?>
		<tr>
			<td>
				<?php echo $docs['nombre']; ?>
			</td>
			<td>
				<?php echo $docs['resumen']; ?>
			</td>
			<td>
				<?php echo $this->Html->link(
					'Descargar programa',
					array('controller' => 'capacitacion', 'action' => 'sendFile', 'aireacon.pdf')
					);
				?>
			</td>
		</tr>
		<?php }?>
	</table>
</div>