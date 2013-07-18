<div class= "view_content_all">
	<div class= "view_content">

		<?php //echo $this->Html->image('mision.jpg'); ?>
		<div class= "view_content_text">
		<?php
		echo $this->Html->link('Agregar',array('action' => 'editar_cursos'),array('class'=>'button'));
		echo '<br><br>';
			foreach($cursos as $c) { ?>
			<table class="tabla">
				<tr>
					<td style=""><?php echo $c['Curso']['resumen'] ?></td>
					<td><?php echo $this->Html->link('Editar',array('controller' => 'empresa', 'action' => 'editar_cursos', $c['Curso']['id']))?>
					<br>
					<?php echo $this->Html->link('Eliminar',array('controller' => 'empresa', 'action' => 'eliminar_cursos', $c['Curso']['id']))?>
					</td>
				</tr>
			</table>
			<br><br>
			<?php 
			}?>

		</div>
	</div>
</div>

