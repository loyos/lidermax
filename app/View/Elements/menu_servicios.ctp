
<div class= "vertical_menu">

	<div class= "title">
		Servicios
	</div>
	<ul>
		<li class=<?php if ($current== 'first') echo 'current' ?> ><?php echo $this->Html->link('Elaboración de Proyectos', array('controller' => 'servicios', 'action'=> 'lidermax',6));?></li>
		<li class=<?php if ($current== 'second') echo 'current' ?>><?php echo $this->Html->link('Inspección y Supervisión', array('controller' => 'servicios', 'action'=> 'lidermax',7));?></li>
		<li class=<?php if ($current== 'third') echo 'current' ?>><?php echo $this->Html->link('Operación y Mantenimiento', array('controller' => 'servicios', 'action'=> 'lidermax',8));?></li>
		<li class=<?php if ($current== 'fourth') echo 'current' ?>><?php echo $this->Html->link('Ejecución de Obras', array('controller' => 'servicios', 'action'=> 'lidermax',9));?></li>
		<li class=<?php if ($current== 'fifth') echo 'current' ?>><?php echo $this->Html->link('Asesorías', array('controller' => 'servicios', 'action'=> 'lidermax',10));?></li>
		<li class=<?php if ($current== 'sixth') echo 'current' ?>><?php echo $this->Html->link('Gerencia de Proyectos', array('controller' => 'servicios', 'action'=> 'lidermax',11));?></li>
	</ul>
</div>