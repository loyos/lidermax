
<div class= "vertical_menu">

	<div class= "title">
		Servicios
	</div>
	<ul>
		<li class=<?php if ($current== 'first') echo 'current' ?> ><?php echo $this->Html->link('Elaboración de Proyectos', array('controller' => 'servicios', 'action'=> 'first_view'));?></li>
		<li class=<?php if ($current== 'second') echo 'current' ?>><?php echo $this->Html->link('Inspección y Supervisión', array('controller' => 'servicios', 'action'=> 'second_view'));?></li>
		<li class=<?php if ($current== 'third') echo 'current' ?>><?php echo $this->Html->link('Operación y Mantenimiento', array('controller' => 'servicios', 'action'=> 'third_view'));?></li>
		<li class=<?php if ($current== 'fourth') echo 'current' ?>><?php echo $this->Html->link('Ejecución de Obras', array('controller' => 'servicios', 'action'=> 'fourth_view'));?></li>
		<li class=<?php if ($current== 'fifth') echo 'current' ?>><?php echo $this->Html->link('Asesorías', array('controller' => 'servicios', 'action'=> 'fifth_view'));?></li>
		<li class=<?php if ($current== 'sixth') echo 'current' ?>><?php echo $this->Html->link('Gerencia de Proyectos', array('controller' => 'servicios', 'action'=> 'sixth_view'));?></li>
	</ul>
</div>