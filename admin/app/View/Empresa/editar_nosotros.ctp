<div class= "view_content_all">
	<div class= "view_content">

		<?php //echo $this->Html->image('mision.jpg'); ?>
		<div class= "view_content_text">
			<?php

	echo $this->Form->create('Contenido', array('type' => 'file'));
	echo $this->Form->input('Empleado.nombre');
	echo '<br><br>';
	echo $this->Form->input('Empleado.apellido');
	echo '<br><br>';
	echo $this->Form->input('Empleado.telefono', array('label' => 'Profesión'));
	echo '<br><br>';
	echo $this->Form->input('Empleado.resumen_cv',array(
		'label' => 'Resumen del curriculum'
	));
	echo '<br><br>';
	echo '<h2>Agrega una foto</h2><br>';
	echo $this->Form->file('Empleado.Foto',array(
		'label' => 'Foto'
	));
	echo '<br><br>';
	echo '<h2>Agrega el curriculum</h2><br>';
	echo $this->Form->file('Empleado.Curriculum',array(
		'label' => 'Foto'
	));
	echo '<br><br>';
	if (!empty($id)) {
		echo $this->Form->input('Empleado.id',array(
			'type' => 'hidden'
		));
	}
	echo $this->Form->submit('Guardar', array('class' => 'button'));
	echo $this->Form->end;
	?>

		</div>
	</div>
</div>

