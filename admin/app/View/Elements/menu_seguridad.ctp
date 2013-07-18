
<div class= "vertical_menu">

	<div class= "title">
		Seguridad
	</div>
	<ul>
		<li class=<?php if ($current== 'first') echo 'current' ?> ><?php echo $this->Html->link('Cámaras de Seguridad', array('controller' => 'seguridad', 'action'=> 'first_view'));?></li>
		<li class=<?php if ($current== 'second') echo 'current' ?>><?php echo $this->Html->link('GPS', array('controller' => 'seguridad', 'action'=> 'second_view'));?></li>
		<li class=<?php if ($current== 'third') echo 'current' ?>><?php echo $this->Html->link('Alarmas Comunitarias', array('controller' => 'seguridad', 'action'=> 'third_view'));?></li>
	</ul>
</div>