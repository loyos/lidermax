
<div class= "vertical_menu">

	<div class= "title">
		Seguridad
	</div>
	<ul>
		<li class=<?php if ($current== 'first') echo 'current' ?> ><?php echo $this->Html->link('Cámaras de Seguridad', array('controller' => 'seguridad', 'action'=> 'lidermax',28));?></li>
		<li class=<?php if ($current== 'second') echo 'current' ?>><?php echo $this->Html->link('GPS', array('controller' => 'seguridad', 'action'=> 'lidermax',29));?></li>
		<li class=<?php if ($current== 'third') echo 'current' ?>><?php echo $this->Html->link('Alarmas Comunitarias', array('controller' => 'seguridad', 'action'=> 'lidermax',30));?></li>
	</ul>
</div>