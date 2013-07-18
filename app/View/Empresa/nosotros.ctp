<div class= "view_content_all">
	<?php echo $this->element($element_menu, array('current' => $current)); ?>
	<div class= "view_content">
		<?php echo $this->element('imagen_contenido'); ?>
		<div class= "view_content_text">
		<h1>Equipo de Trabajo Lidermax</h1>
		<?php
			foreach($empleados as $e) { ?>
			<table class="tabla">
				<tr>
					<td><?php echo $this->Html->image($e['Empleado']['foto'], array('class' => 'foto_empleado')); ?></td>
					<td>
						<table>
							<tr><th><?php echo $e['Empleado']['nombre'].' '.$e['Empleado']['apellido']?></th></tr>
							<tr><th><?php echo $e['Empleado']['telefono']?></th></tr>
						</table>
					</td>
					<td class="descripcion_empleado">
						<table>
							<tr>
								<td><?php echo $e['Empleado']['resumen_cv']?></td>
							</tr>
						</table>
					</td>
					<td style = "font-size: 11px;"><?php 
					$this->Html->link('Enter', array('class' => 'button', 'target' => '_blank'));
					echo $this->Html->link('Ver Curriculum',array('controller' => 'empresa', 'action' => 'sendFile', $e['Empleado']['cv']))?></td>
				</tr>
			</table>
			<br><br>
			<?php 
			}?>
		</div>
	</div>
</div>