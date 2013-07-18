
<div class= "vertical_menu">

	<div class= "title">
		Suministros
	</div>
	<ul>
		<li class=<?php if ($current== 'first') echo 'current' ?> ><?php echo $this->Html->link('Cocinas Industriales', array('controller' => 'suministros', 'action'=> 'first_view'));?></li>
		<li class=<?php if ($current== 'second') echo 'current' ?>><?php echo $this->Html->link('Equipos Médicos y Odontológicos', array('controller' => 'suministros', 'action'=> 'second_view'));?></li>
	</ul>
</div>