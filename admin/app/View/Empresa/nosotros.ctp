<div class= "view_content_all">
	<div class= "view_content">

		<?php //echo $this->Html->image('mision.jpg'); ?>
		<div class= "view_content_text">
		<?php
		echo $this->Html->link('Agregar',array('action' => 'editar_nosotros'),array('class'=>'button'));
		echo '<br><br>';
			foreach($empleados as $e) { ?>
			<table class="tabla">
				<tr>
					<td><?php echo $this->Html->image('/'.$e['Empleado']['foto'], array('class' => 'foto_empleado')); ?></td>
					<td>
						<table>
							<tr><th>Nombre:</th><td><?php echo $e['Empleado']['nombre'].' '.$e['Empleado']['apellido']?></td></tr>
							<tr><th>Profesión:</th><td><?php echo $e['Empleado']['telefono']?></td></tr>
						</table>
					</td>
					<td class="descripcion_empleado">
						<table>
							<tr>
								<th>Descripción: </th>
								<td><?php echo $e['Empleado']['resumen_cv']?></td>
							</tr>
						</table>
					</td>
					<td><?php echo $this->Html->link('Editar',array('controller' => 'empresa', 'action' => 'editar_nosotros', $e['Empleado']['id']))?>
					<br>
					<?php echo $this->Html->link('Eliminar',array('controller' => 'empresa', 'action' => 'eliminar_nosotros', $e['Empleado']['id']))?>
					</td>
				</tr>
			</table>
			<br><br>
			<?php 
			}?>

		</div>
	</div>
</div>

