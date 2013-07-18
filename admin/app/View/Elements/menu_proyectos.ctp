
<div class= "vertical_menu">

	<div class= "title">
		Proyectos
	</div>
	<ul>
		<li class=<?php if ($current== 'first') echo 'current' ?> ><?php echo $this->Html->link('Aire Acondicionado', array('controller' => 'proyectos', 'action'=> 'first_view'));?></li>
		<li class=<?php if ($current== 'second') echo 'current' ?>><?php echo $this->Html->link('Ventilación Forzada', array('controller' => 'proyectos', 'action'=> 'second_view'));?></li>
		<li class=<?php if ($current== 'third') echo 'current' ?>><?php echo $this->Html->link('Refrigeración', array('controller' => 'proyectos', 'action'=> 'third_view'));?></li>
		<li class=<?php if ($current== 'fourth') echo 'current' ?>><?php echo $this->Html->link('Protección contra Incendios', array('controller' => 'proyectos', 'action'=> 'fourth_view'));?></li>
		<li class=<?php if ($current== 'fifth') echo 'current' ?>><?php echo $this->Html->link('Gases Medicinales', array('controller' => 'proyectos', 'action'=> 'fifth_view'));?></li>
		<li class=<?php if ($current== 'sixth') echo 'current' ?>><?php echo $this->Html->link('Gas Combustible', array('controller' => 'proyectos', 'action'=> 'sixth_view'));?></li>
		<li class=<?php if ($current== 'seventh') echo 'current' ?>><?php echo $this->Html->link('Generación y Dist. de Vapor', array('controller' => 'proyectos', 'action'=> 'seventh_view'));?></li>
		<li class=<?php if ($current== 'eighth') echo 'current' ?>><?php echo $this->Html->link('Aire Comprimido', array('controller' => 'proyectos', 'action'=> 'eighth_view'));?></li>
		<li class=<?php if ($current== 'nineth') echo 'current' ?>><?php echo $this->Html->link('Almacenaje y Distribución de Combustible', array('controller' => 'proyectos', 'action'=> 'nineth_view'));?></li>
		<li class=<?php if ($current== 'tenth') echo 'current' ?>><?php echo $this->Html->link('Tanques Atmosféricos y Recipientes a Presión', array('controller' => 'proyectos', 'action'=> 'tenth_view'));?></li>
		<li class=<?php if ($current== 'eleventh') echo 'current' ?>><?php echo $this->Html->link('Plantas de Silos', array('controller' => 'proyectos', 'action'=> 'eleventh_view'));?></li>
		<li class=<?php if ($current== 'twelveth') echo 'current' ?>><?php echo $this->Html->link('Obras de Infraestructura', array('controller' => 'proyectos', 'action'=> 'twelveth_view'));?></li>
		<li class=<?php if ($current== 'thirteenth') echo 'current' ?>><?php echo $this->Html->link('Mantenimiento / Técnicas Predictivas', array('controller' => 'proyectos', 'action'=> 'thirteenth_view'));?></li>
		<li class=<?php if ($current== 'fourteenth') echo 'current' ?>><?php echo $this->Html->link('Generación de Potencia / Plantas Eléctricas', array('controller' => 'proyectos', 'action'=> 'fourteenth_view'));?></li>
	</ul>
</div>