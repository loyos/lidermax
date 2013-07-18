
<div class= "vertical_menu">

	<div class= "title">
		Capacitación
	</div>
	<ul>
		<li class=<?php if ($current== 'first') echo 'current' ?> ><?php echo $this->Html->link('Aire Acondicionado', array('controller' => 'capacitacion', 'action'=> 'first_view'));?></li>
		<li class=<?php if ($current== 'second') echo 'current' ?>><?php echo $this->Html->link('Ventilación Forzada', array('controller' => 'capacitacion', 'action'=> 'second_view'));?></li>
		<li class=<?php if ($current== 'third') echo 'current' ?>><?php echo $this->Html->link('Protección contra Incendios', array('controller' => 'capacitacion', 'action'=> 'third_view'));?></li>
		<li class=<?php if ($current== 'fourth') echo 'current' ?>><?php echo $this->Html->link('Gases Medicinales', array('controller' => 'capacitacion', 'action'=> 'fourth_view'));?></li>
		<li class=<?php if ($current== 'fifth') echo 'current' ?>><?php echo $this->Html->link('Bombas Hidráulicas', array('controller' => 'capacitacion', 'action'=> 'fifth_view'));?></li>
		<li class=<?php if ($current== 'sixth') echo 'current' ?>><?php echo $this->Html->link('Mantenimiento', array('controller' => 'capacitacion', 'action'=> 'sixth_view'));?></li>
		<li class=<?php if ($current== 'seventh') echo 'current' ?>><?php echo $this->Html->link('Gerencia Proy. / Estratégica', array('controller' => 'capacitacion', 'action'=> 'seventh_view'));?></li>
		<li class=<?php if ($current== 'eighth') echo 'current' ?>><?php echo $this->Html->link('Soldadura', array('controller' => 'capacitacion', 'action'=> 'eighth_view'));?></li>
		<li class=<?php if ($current== 'nineth') echo 'current' ?>><?php echo $this->Html->link('Ensayos No Destructivos', array('controller' => 'capacitacion', 'action'=> 'nineth_view'));?></li>
	</ul>
</div>