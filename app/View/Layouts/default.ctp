<?php


/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php //echo $cakeDescription ?>
		<?php //echo $title_for_layout; ?>
		LiderMax
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		echo $this->Html->css('jquery-ui');
		echo $this->Html->css('global');
		echo $this->Html->script('jquery-1.9.1.min');
		echo $this->Html->script('jquery-ui');
		echo $this->Html->script('slides.min.jquery');
		echo $this->Html->css('fancybox/jquery.fancybox');
		echo $this->Html->css('fancybox/jquery.fancybox-buttons');
		echo $this->Html->css('fancybox/jquery.fancybox-thumbs');
		echo $this->Html->script('fancybox/jquery.fancybox');	
		echo $this->Html->script('fancybox/jquery.fancybox-buttons');	
		echo $this->Html->script('fancybox/jquery.fancybox-thumbs');	
		echo $this->Html->script('fancybox/jquery.fancybox-media');	
		echo $this->Html->script('fancybox/jquery.mousewheel-3.0.6.pack');
	?>
</head>
<body>

	<div id="container">
		<div class = "header">
			<div class = "logo_container">
				<div id= "logo">
				<?php echo $this->Html->image('logo_text.png', array('width' => '400px')); ?>
				</div>
				<div id="contacto">
					<?php echo $this->Html->link('Contáctanos',array('controller' => 'index', 'action' => 'contacto')); ?>
				</div>
				<div id="busqueda">
					<?php
					echo $this->Form->create('Busqueda',array('action' => 'contacto'));
					echo $this->Form->input('Busqueda.titulo', array(
						'label' => false,
						'value' => null
					));
					?>
				</div>
				<?php
				echo $this->Form->submit('', array('class' => 'icono_busqueda'));
				echo $this->Form->end;
				?>
			</div>
			<ul class = "menu">
				<li id= "home">
					<?php echo $this->Html->link('HOME', array('controller' => 'index', 'action'=> 'index'));?>
				</li>
				<li id = "empresa">
					<?php echo $this->Html->link('NUESTRA EMPRESA', array('controller' => 'empresa', 'action'=> 'nosotros'));?>
						<ul id = "empresa_ul" class = "ulul">
							<li><?php echo $this->Html->link('Nosotros', array('controller' => 'empresa', 'action'=> 'nosotros'));?></li>
							<li id= "vision"><?php echo $this->Html->link('Misión, Visión y Valores', array('controller' => 'empresa', 'action'=> 'lidermax',1));?></li>
							<li><?php echo $this->Html->link('Historia', array('controller' => 'empresa', 'action'=> 'lidermax',2));?></li>
							<li><?php echo $this->Html->link('Ética Profesional', array('controller' => 'empresa', 'action'=> 'lidermax',3));?></li>
							<li><?php echo $this->Html->link('Capital Humano', array('controller' => 'empresa', 'action'=> 'lidermax',4));?></li>
							<li><?php echo $this->Html->link('Experiencia', array('controller' => 'empresa', 'action'=> 'lidermax',5));?></li>
						</ul>
				</li>
				<li id = "servicios">
					<?php echo $this->Html->link('SERVICIOS', array('controller' => 'servicios', 'action'=> 'lidermax',6));?>
						<ul id = "servicios_ul" class = "ulul">
							<li><?php echo $this->Html->link('Elaboración de Proyectos', array('controller' => 'servicios', 'action'=> 'lidermax',6));?></li>
							<li><?php echo $this->Html->link('Inspección y Supervisión', array('controller' => 'servicios', 'action'=> 'lidermax',7));?></li>
							<li><?php echo $this->Html->link('Operación y Mantenimiento', array('controller' => 'servicios', 'action'=> 'lidermax',8));?></li>
							<li><?php echo $this->Html->link('Ejecución de Obras', array('controller' => 'servicios', 'action'=> 'lidermax',9));?></li>
							<li><?php echo $this->Html->link('Asesorías', array('controller' => 'servicios', 'action'=> 'lidermax',10));?></li>
							<li><?php echo $this->Html->link('Gerencia de Proyectos', array('controller' => 'servicios', 'action'=> 'lidermax',11));?></li>
						</ul>
				</li>
				<li id = "proyectos">
					<?php echo $this->Html->link('PROYECTOS', array('controller' => 'proyectos', 'action'=> 'lidermax',12));?>
						<ul id = "proyectos_ul" class = "ulul">
							<li><?php echo $this->Html->link('Aire Acondicionado', array('controller' => 'proyectos', 'action'=> 'lidermax',12));?></li>
							<li><?php echo $this->Html->link('Ventilación Forzada', array('controller' => 'proyectos', 'action'=> 'lidermax',13));?></li>
							<li><?php echo $this->Html->link('Refrigeración', array('controller' => 'proyectos', 'action'=> 'lidermax',14));?></li>
							<li><?php echo $this->Html->link('Protección contra Incendios', array('controller' => 'proyectos', 'action'=> 'lidermax',15));?></li>
							<li><?php echo $this->Html->link('Gases Medicinales', array('controller' => 'proyectos', 'action'=> 'lidermax',16));?></li>
							<li><?php echo $this->Html->link('Gas Combustible', array('controller' => 'proyectos', 'action'=> 'lidermax',17));?></li>
							<li><?php echo $this->Html->link('Generación y Dist. de Vapor', array('controller' => 'proyectos', 'action'=> 'lidermax',18));?></li>
							<li><?php echo $this->Html->link('Aire Comprimido', array('controller' => 'proyectos', 'action'=> 'lidermax',19));?></li>
							<li><?php echo $this->Html->link('Almacenaje y Distribución de Combustible', array('controller' => 'proyectos', 'action'=> 'lidermax',20));?></li>
							<li><?php echo $this->Html->link('Tanques Atmosféricos y Recipientes a Presión', array('controller' => 'proyectos', 'action'=> 'lidermax',21));?></li>
							<li><?php echo $this->Html->link('Plantas de Silos', array('controller' => 'proyectos', 'action'=> 'lidermax',22));?></li>
							<li><?php echo $this->Html->link('Obras de Infraestructura', array('controller' => 'proyectos', 'action'=> 'lidermax',23));?></li>
							<li><?php echo $this->Html->link('Mantenimiento / Técnicas Predictivas', array('controller' => 'proyectos', 'action'=> 'lidermax',24));?></li>
							<li><?php echo $this->Html->link('Generación de Potencia / Plantas Eléctricas', array('controller' => 'proyectos', 'action'=> 'lidermax',25));?></li>
						</ul>
				</li>
				<li id = "suministros">
					<?php echo $this->Html->link('SUMINISTROS', array('controller' => 'suministros', 'action'=> 'lidermax',26));?>
						<ul id = "suministros_ul" class = "ulul">
							<li><?php echo $this->Html->link('Cocinas Industriales', array('controller' => 'suministros', 'action'=> 'lidermax',26));?></li>
							<li><?php echo $this->Html->link('Equipos Médicos y Odontológicos', array('controller' => 'suministros', 'action'=> 'lidermax',27));?></li>
						</ul>
				</li>
				<li id = "seguridad">
					<?php echo $this->Html->link('SEGURIDAD', array('controller' => 'seguridad', 'action'=> 'lidermax',28));?>
						<ul id = "seguridad_ul" class = "ulul">
							<li><?php echo $this->Html->link('Cámaras de Seguridad', array('controller' => 'seguridad', 'action'=> 'lidermax',28));?></li>
							<li><?php echo $this->Html->link('GPS', array('controller' => 'seguridad', 'action'=> 'lidermax',29));?></li>
							<li><?php echo $this->Html->link('Alarmas Comunitarias', array('controller' => 'seguridad', 'action'=> 'lidermax',30));?></li>
						</ul>
				</li>
				<li id = "capacitacion">
					<?php echo $this->Html->link('FORMACIÓN', array('controller' => 'capacitacion', 'action'=> 'lidermax',$primer_curso));?>
						<ul id = "capacitacion_ul" class = "ulul">
							<?php
								foreach($menu_capacitacion as $cap){
									echo '<li>'. $this->Html->link($cap['Curso']['nombre'], array('controller' => 'capacitacion', 'action'=> 'lidermax', $cap['Curso']['id'])). '</li>';
								}
							
							?>
						</ul>
					
					<!-- 	<ul id = "capacitacion_ul" class = "ulul">
							<li><?php // echo $this->Html->link('Aire Acondicionado', array('controller' => 'capacitacion', 'action'=> 'lidermax',31));?></li>
							<li><?php // echo $this->Html->link('Ventilación Forzada', array('controller' => 'capacitacion', 'action'=> 'lidermax',32));?></li>
							<li><?php // echo $this->Html->link('Protección contra Incendios', array('controller' => 'capacitacion', 'action'=> 'lidermax',33));?></li>
							<li><?php // echo $this->Html->link('Gases Medicinales', array('controller' => 'capacitacion', 'action'=> 'lidermax',34));?></li>
							<li><?php // echo $this->Html->link('Bombas Hidráulicas', array('controller' => 'capacitacion', 'action'=> 'lidermax',35));?></li>
							<li><?php // echo $this->Html->link('Mantenimiento', array('controller' => 'capacitacion', 'action'=> 'lidermax',36));?></li>
							<li><?php // echo $this->Html->link('Gerencia Proy. / Estratégica', array('controller' => 'capacitacion', 'action'=> 'lidermax',37));?></li>
							<li><?php // echo $this->Html->link('Soldadura', array('controller' => 'capacitacion', 'action'=> 'lidermax',38));?></li>
							<li><?php // echo $this->Html->link('Ensayos No Destructivos', array('controller' => 'capacitacion', 'action'=> 'lidermax',39));?></li>
						</ul> -->
				</li>
			</ul>
		</div>

			<div id="content">

				<?php echo $this->fetch('content'); ?>
				<?php echo $this->Session->flash(); ?>
			</div>


		<div class ="footer">

		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>


</html>

<script>

	$("#empresa").mouseenter(function () {
		$('#empresa_ul').slideDown(200);
	});
	$("#empresa").mouseleave(function () {
		$('#empresa_ul').slideUp(200);
	});

	$("#servicios").mouseenter(function () {
		$('#servicios_ul').slideDown(200);
	});
	$("#servicios").mouseleave(function () {
		$('#servicios_ul').slideUp(200);
	});
	
	$('#proyectos').promise().done(
		function(){
			$("#proyectos").mouseenter(function () {
				$('#proyectos_ul').slideDown(200);
			});
			$("#proyectos").mouseleave(function () {
				$('#proyectos_ul').slideUp(200);
			});
		}
	);
	
	$("#suministros").mouseenter(function () {
		$('#suministros_ul').slideDown(200);
	});
	$("#suministros").mouseleave(function () {
		$('#suministros_ul').slideUp(200);
	});

	$("#seguridad").mouseenter(function () {
		$('#seguridad_ul').slideDown(200);
	});
	$("#seguridad").mouseleave(function () {
		$('#seguridad_ul').slideUp(200);
	});

	$("#capacitacion").mouseenter(function () {
		$('#capacitacion_ul').slideDown(200);
	});
	$("#capacitacion").mouseleave(function () {
		$('#capacitacion_ul').slideUp(200);
	});

	$("#clients").mouseenter(function () {
		$('#clients_ul').slideDown(200);
	});
	$("#clients").mouseleave(function () {
		$('#clients_ul').slideUp(200);
	});

	var pos_actual = "<?php echo $this->name;?>";
	if(pos_actual == "Empresa"){
		$("#empresa").css("background-image","url('/img/menu-act.gif')");
		$("#empresa").css("background-repeat","repeat-x");
		$("#empresa a:first").css("color",'white');
	}

	if(pos_actual == "Index"){
		$("#home").css("background-image","url('/img/menu-act.gif')");
		$("#home").css("background-repeat","repeat-x");
		$("#home a:first").css("color",'white');
	}

	if(pos_actual == "Servicios"){
		$("#servicios").css("background-image","url('/img/menu-act.gif')");
		$("#servicios").css("background-repeat","repeat-x");
		$("#servicios a:first").css("color",'white');
	}

	if(pos_actual == "Proyectos"){
		$("#proyectos").css("background-image","url('/img/menu-act.gif')");
		$("#proyectos").css("background-repeat","repeat-x");
		$("#proyectos a:first").css("color",'white');
	}

	if(pos_actual == "Suministros"){
		$("#suministros").css("background-image","url('/img/menu-act.gif')");
		$("#suministros").css("background-repeat","repeat-x");
		$("#suministros a:first").css("color",'white');
	}

	if(pos_actual == "Seguridad"){
		$("#seguridad").css("background-image","url('/img/menu-act.gif')");
		$("#seguridad").css("background-repeat","repeat-x");
		$("#seguridad a:first").css("color",'white');
	}

	if(pos_actual == "Capacitacion"){
		$("#capacitacion").css("background-image","url('/img/menu-act.gif')");
		$("#capacitacion").css("background-repeat","repeat-x");
		$("#capacitacion a:first").css("color",'white');
	}

$(document).ready(function() {
	$('#flashMessage').delay(4500).fadeOut(1500);
	
 });
</script>
