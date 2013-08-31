<div class= "view_content_all">
	<div class= "view_content">

		<?php //echo $this->Html->image('mision.jpg'); ?>
		<div class= "view_content_text">
		<?php
		echo $this->Html->link('Agregar',array('action' => 'editar_documentos'),array('class'=>'button'));
		echo '<br><br>';
			foreach($documentos as $c) { ?>
			<table class="tabla" style= "width: 100%;">
				<tr>
					<th> Nombre </th>
					<th> Autor </th>
					<th> Acción </th>
				</tr>
				<tr>
					<td style="text-align: center;"><?php echo $c['Documento']['nombre'] ?></td>
					<td style="text-align: center;"><?php echo $c['Documento']['autor'] ?></td>
					<td style="text-align: center;"> <?php echo $this->Html->link('Editar',array('controller' => 'empresa', 'action' => 'editar_documentos', $c['Documento']['id']))?>
					<br>
					<?php echo $this->Html->link('Eliminar',array('controller' => 'empresa', 'action' => 'eliminar_documentos', $c['Documento']['id']))?>
					</td>
				</tr>
			</table>
			<br><br>
			<?php 
			}?>

		</div>
	</div>
</div>

