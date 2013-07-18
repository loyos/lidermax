
<div class= "vertical_menu">

	<div class= "title">
		Nuestra Empresa
	</div>
	<ul>
		<li class=<?php if ($current== 'first') echo 'current' ?> ><?php echo $this->Html->link('Misión, Visión y Valores', array('controller' => 'empresa', 'action'=> 'first_view'));?></li>
		<li class=<?php if ($current== 'second') echo 'current' ?>><?php echo $this->Html->link('Historia', array('controller' => 'empresa', 'action'=> 'second_view'));?></li>
		<li class=<?php if ($current== 'third') echo 'current' ?>><?php echo $this->Html->link('Ética Profesional', array('controller' => 'empresa', 'action'=> 'third_view'));?></li>
		<li class=<?php if ($current== 'fourth') echo 'current' ?>><?php echo $this->Html->link('Capital Humano', array('controller' => 'empresa', 'action'=> 'fourth_view'));?></li>
		<li class=<?php if ($current== 'fifth') echo 'current' ?>><?php echo $this->Html->link('Experiencia', array('controller' => 'empresa', 'action'=> 'fifth_view'));?></li>
	</ul>
</div>