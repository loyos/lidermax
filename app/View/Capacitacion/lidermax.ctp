<div class= "view_content_all">
	<?php echo $this->element($element_menu); ?>
	<div class= "view_content">
		<?php echo $this->element('imagen_contenido'); ?>
		<div class= "view_content_text">
			<?php
			echo $contenidos['Curso']['resumen'];?>	
			<p><span>Persona a cargo:</span> <?php echo $contenidos['Curso']['persona_a_cargo']?></p>
			<?php
				// $this->Html->link('Enter', array('class' => 'button', 'target' => '_blank'));
				echo $this->Html->link(
					'Descargar programa',
					array('controller' => 'capacitacion', 'action' => 'sendFile', $contenidos['Curso']['programa'])
				);
			?>
		</div>
	</div>
</div>
