<div class="container_contacto_photo">
	<?php
	echo $this->Html->image($contenidos['Contenido']['imagen'], array('width'=>'970px','height'=>'200px'));
	?>
</div>
<div class="container_contacto">
	<div class="cont" style="float:left;">
	<?php
	echo $contenidos['Contenido']['cont'];
	?>
	</div>
	<div class="form" style="float:right; margin-right:5%;">
	<?php
		echo $this->Form->create('Contacto');
		echo $this->Form->input('Contacto.nombre',array(
			'label' => 'Nombre completo:<br>',
			'value' => ''
		));
		echo '<br><br>';
		echo $this->Form->input('Contacto.empresa',array(
			'label' => 'Empresa:<br>',
			'value' => ''
		));
		echo '<br><br>';
		echo $this->Form->input('Contacto.ciudad',array(
			'label' => 'Ciudad y/o Pais:<br>',
			'value' => ''
		));
		echo '<br><br>';
		echo $this->Form->input('Contacto.correo',array(
			'label' => 'Correo Electrónico :<br>',
			'value' => ''
		));
		echo '<br><br>';
		echo $this->Form->input('Contacto.mensaje',array(
			'label' => 'Mensaje:<br>',
			'value' => ''
		));
		echo '<br>';
		echo $this->Form->submit('Enviar', array('class' => 'button', 'id' => 'button_contacto'));
		echo $this->Form->end();
	?>
	</div>
	<div id="dialog" title="Contacto" style="display:none">
	<p>Tu solicitud ha sido enviada, pronto serás contactado</p>
	</div>
</div>