
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",

	});
</script>
<?php
	echo $this->Form->create('Contenido', array('type' => 'file'));
	echo "<h3>Escribe el contenido</h3>";
	echo '<br>';
	echo $this->Form->input('cont',array(
		'label' => false,
		'cols'=> '50',
		'rows' => '15',
		'value' => $contenidos['Contenido']['cont']
	));
	echo '<br>';
	echo '<h3>Agrega una imagen </h3>';
	echo $this->Form->file('Imagen',array(
		'label' => 'Agrega una imagen'
	));
	echo '<br><br>';
	echo $this->Form->submit('Guardar', array('class' => 'button'));
	echo $this->Form->end;
?>