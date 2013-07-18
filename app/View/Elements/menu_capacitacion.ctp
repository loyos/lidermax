
<div class= "vertical_menu">
	
	<div class= "title">
		Capacitación
	</div>
	<ul>
		<?php
		foreach ($cursos as $c) { ?>
			<li class=<?php if ($id== $c['Curso']['id']) echo 'current' ?> >
			<?php echo $this->Html->link($c['Curso']['nombre'], array('controller' => 'capacitacion', 'action'=> 'lidermax',$c['Curso']['id']));?></li>
		<?php
		}
		?>
	</ul>
</div>