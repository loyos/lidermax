
<div class= "vertical_menu">

	<div class= "title">
		Nuestra Empresa
	</div>
	<ul>
		<li class=<?php if ($current== 'zero') echo 'current' ?> ><?php echo $this->Html->link('Nosotros', array('controller' => 'empresa', 'action'=> 'nosotros'));?></li>
		<li class=<?php if ($current== 'first') echo 'current' ?> ><?php echo $this->Html->link('Misión, Visión y Valores', array('controller' => 'empresa', 'action'=> 'lidermax',1));?></li>
		<li class=<?php if ($current== 'second') echo 'current' ?>><?php echo $this->Html->link('Historia', array('controller' => 'empresa', 'action'=> 'lidermax',2));?></li>
		<li class=<?php if ($current== 'third') echo 'current' ?>><?php echo $this->Html->link('Ética Profesional', array('controller' => 'empresa', 'action'=> 'lidermax',3));?></li>
		<li class=<?php if ($current== 'fourth') echo 'current' ?>><?php echo $this->Html->link('Capital Humano', array('controller' => 'empresa', 'action'=> 'lidermax',4));?></li>
		<li class=<?php if ($current== 'fifth') echo 'current' ?>><?php echo $this->Html->link('Experiencia', array('controller' => 'empresa', 'action'=> 'lidermax',5));?></li>
	</ul>
</div>