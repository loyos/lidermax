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
		echo $this->Html->css('global');
		echo $this->Html->script('jquery-1.9.1.min');
		echo $this->Html->script('slides.min.jquery');
		echo $this->Html->script('init');
		echo $this->Html->script('tiny_mce');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div id="container">
		<div class = "header">
			<div class = "logo_container">
				<div id= "logo">
				<?php echo $this->Html->image('/logo_text.png', array('width' => '400px')); ?>
				</div>
				<div id="contacto">
					<?php echo $this->Html->link('Contáctenos',array('controller' => 'empresa', 'action' => 'edit', 44)); ?> <br>
					<?php echo $this->Html->link('Cerrar Sesión', array('controller' => 'users', 'action'=> 'logout')); ?> 
				</div>				
			</div>
			<ul class = "menu">
				<li id= "home">
					<?php echo $this->Html->link('HOME', array('controller' => 'index', 'action'=> 'index'));?>
				</li>
				<li id = "empresa">
					<?php echo $this->Html->link('NUESTRA EMPRESA', array('controller' => 'empresa', 'action'=> 'nosotros'));?>
						<ul id = "empresa_ul" class = "ulul">
							<li><?php echo $this->Html->link('Nosotros', array('controller' => 'empresa', 'action'=> 'nosotros'));?></li>
							<li id= "vision"><?php echo $this->Html->link('Misión, Visión y Valores', array('controller' => 'empresa', 'action'=> 'edit',1));?></li>
							<li><?php echo $this->Html->link('Historia', array('controller' => 'empresa', 'action'=> 'edit',2));?></li>
							<li><?php echo $this->Html->link('Ética Profesional', array('controller' => 'empresa', 'action'=> 'edit',3));?></li>
							<li><?php echo $this->Html->link('Capital Humano', array('controller' => 'empresa', 'action'=> 'edit',4));?></li>
							<li><?php echo $this->Html->link('Experiencia', array('controller' => 'empresa', 'action'=> 'edit',5));?></li>
						</ul>
				</li>
				<li id = "servicios">
					<?php echo $this->Html->link('SERVICIOS', array('controller' => 'empresa', 'action'=> 'edit',6));?>
						<ul id = "servicios_ul" class = "ulul">
							<li><?php echo $this->Html->link('Elaboración de Proyectos', array('controller' => 'empresa', 'action'=> 'edit',6));?></li>
							<li><?php echo $this->Html->link('Inspección y Supervisión', array('controller' => 'empresa', 'action'=> 'edit',7));?></li>
							<li><?php echo $this->Html->link('Operación y Mantenimiento', array('controller' => 'empresa', 'action'=> 'edit',8));?></li>
							<li><?php echo $this->Html->link('Ejecución de Obras', array('controller' => 'empresa', 'action'=> 'edit',9));?></li>
							<li><?php echo $this->Html->link('Asesorías', array('controller' => 'empresa', 'action'=> 'edit',10));?></li>
							<li><?php echo $this->Html->link('Gerencia de Proyectos', array('controller' => 'empresa', 'action'=> 'edit',11));?></li>
						</ul>
				</li>
				<li id = "proyectos">
					<?php echo $this->Html->link('PROYECTOS', array('controller' => 'empresa', 'action'=> 'edit',12));?>
						<ul id = "proyectos_ul" class = "ulul">
							<li><?php echo $this->Html->link('Aire Acondicionado',  array('controller' => 'empresa', 'action'=> 'edit',12));?></li>
							<li><?php echo $this->Html->link('Ventilación Forzada',  array('controller' => 'empresa', 'action'=> 'edit',13));?></li>
							<li><?php echo $this->Html->link('Refrigeración', array('controller' => 'empresa', 'action'=> 'edit',14));?></li>
							<li><?php echo $this->Html->link('Protección contra Incendios', array('controller' => 'empresa', 'action'=> 'edit',15));?></li>
							<li><?php echo $this->Html->link('Gases Medicinales', array('controller' => 'empresa', 'action'=> 'edit',16));?></li>
							<li><?php echo $this->Html->link('Gas Combustible', array('controller' => 'empresa', 'action'=> 'edit',17));?></li>
							<li><?php echo $this->Html->link('Generación y Dist. de Vapor', array('controller' => 'empresa', 'action'=> 'edit',18));?></li>
							<li><?php echo $this->Html->link('Aire Comprimido', array('controller' => 'empresa', 'action'=> 'edit',19));?></li>
							<li><?php echo $this->Html->link('Almacenaje y Distribución de Combustible', array('controller' => 'empresa', 'action'=> 'edit',20));?></li>
							<li><?php echo $this->Html->link('Tanques Atmosféricos y Recipientes a Presión', array('controller' => 'empresa', 'action'=> 'edit',21));?></li>
							<li><?php echo $this->Html->link('Plantas de Silos', array('controller' => 'empresa', 'action'=> 'edit',22));?></li>
							<li><?php echo $this->Html->link('Obras de Infraestructura', array('controller' => 'empresa', 'action'=> 'edit',23));?></li>
							<li><?php echo $this->Html->link('Mantenimiento / Técnicas Predictivas', array('controller' => 'empresa', 'action'=> 'edit',24));?></li>
							<li><?php echo $this->Html->link('Generación de Potencia / Plantas Eléctricas', array('controller' => 'empresa', 'action'=> 'edit',25));?></li>
						</ul>
				</li>
				<li id = "suministros">
					<?php echo $this->Html->link('SUMINISTROS', array('controller' => 'empresa', 'action'=> 'edit',26));?>
						<ul id = "suministros_ul" class = "ulul">
							<li><?php echo $this->Html->link('Cocinas Industriales', array('controller' => 'empresa', 'action'=> 'edit',26));?></li>
							<li><?php echo $this->Html->link('Equipos Médicos y Odontológicos', array('controller' => 'empresa', 'action'=> 'edit',27));?></li>
						</ul>
				</li>
				<li id = "seguridad">
					<?php echo $this->Html->link('SEGURIDAD', array('controller' => 'empresa', 'action'=> 'edit',28));?>
						<ul id = "seguridad_ul" class = "ulul">
							<li><?php echo $this->Html->link('Cámaras de Seguridad', array('controller' => 'empresa', 'action'=> 'edit',28));?></li>
							<li><?php echo $this->Html->link('GPS', array('controller' => 'empresa', 'action'=> 'edit',29));?></li>
							<li><?php echo $this->Html->link('Alarmas Comunitarias', array('controller' => 'empresa', 'action'=> 'edit',30));?></li>
						</ul>
				</li>
				<li id = "capacitacion">
					<?php echo $this->Html->link('CAPACITACIÓN', array('controller' => 'empresa', 'action'=> 'cursos'));?>
						
				</li>
			</ul>
		</div>

			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->fetch('content'); ?>
			</div>


		<div class ="footer">

		</div>
	</div>
	<?php echo $this->element('sql_dump');
	if(!isset($id)) {
		$id="";
}
 ?>

</body>


</html>

<script>

	$("#empresa").mouseover(function () {
		$('#empresa_ul').slideDown(200);
	});
	$("#empresa").mouseleave(function () {
		$('#empresa_ul').slideUp(200);
	});

	$("#servicios").mouseover(function () {
		$('#servicios_ul').slideDown(200);
	});
	$("#servicios").mouseleave(function () {
		$('#servicios_ul').slideUp(200);
	});

	$("#proyectos").mouseover(function () {
		$('#proyectos_ul').slideDown(200);
	});
	$("#proyectos").mouseleave(function () {
		$('#proyectos_ul').slideUp(200);
	});

	$("#suministros").mouseover(function () {
		$('#suministros_ul').slideDown(200);
	});
	$("#suministros").mouseleave(function () {
		$('#suministros_ul').slideUp(200);
	});

	$("#seguridad").mouseover(function () {
		$('#seguridad_ul').slideDown(200);
	});
	$("#seguridad").mouseleave(function () {
		$('#seguridad_ul').slideUp(200);
	});

	$("#capacitacion").mouseover(function () {
		$('#capacitacion_ul').slideDown(200);
	});
	$("#capacitacion").mouseleave(function () {
		$('#capacitacion_ul').slideUp(200);
	});

	$("#clients").mouseover(function () {
		$('#clients_ul').slideDown(200);
	});
	$("#clients").mouseleave(function () {
		$('#clients_ul').slideUp(200);
	});

	var pos_actual = "<?php echo $this->name;?>";
	var id = "<?php echo $id ?>";
	if(id == "1" || id == "2" || id == "3" || id == "4" || id == "5") {
		$("#empresa").css("background-image","url('/img/menu-act.gif')");
		$("#empresa").css("background-repeat","repeat-x");
		$("#empresa a:first").css("color",'white');
	}

	if(pos_actual == "Index"){
		$("#home").css("background-image","url('/img/menu-act.gif')");
		$("#home").css("background-repeat","repeat-x");
		$("#home").css("border-radius","4px 0 0 10px");
		$("#home a").css("color",'white');

	}

	if(id == "6" || id == "7" || id == "8" || id == "9" || id == "10" || id == "11") {
		$("#servicios").css("background-image","url('/img/menu-act.gif')");
		$("#servicios").css("background-repeat","repeat-x");
		$("#servicios a:first").css("color",'white');
	}

	if(id == "12" || id == "13" || id == "14" || id == "15" || id == "16" || id == "17" || id == "18" || id == "19" || id == "20" || id == "21" || id == "22" || id == "23" || id == "24" || id == "25") {
		$("#proyectos").css("background-image","url('/img/menu-act.gif')");
		$("#proyectos").css("background-repeat","repeat-x");
		$("#proyectos a:first").css("color",'white');
	}

	if(id == "26" || id == "27") {
		$("#suministros").css("background-image","url('/img/menu-act.gif')");
		$("#suministros").css("background-repeat","repeat-x");
		$("#suministros a:first").css("color",'white');
	}

	if(id == "28" || id == "29" || id == "30") {
		$("#seguridad").css("background-image","url('/img/menu-act.gif')");
		$("#seguridad").css("background-repeat","repeat-x");
		$("#seguridad a:first").css("color",'white');
	}

	if(id == "31" || id == "32" || id == "33" || id == "34" || id == "35" || id == "36" || id == "37" || id == "38" || id == "39") {
		$("#capacitacion").css("background-image","url('/img/menu-act.gif')");
		$("#capacitacion").css("background-repeat","repeat-x");
		$("#capacitacion").css("border-radius","0 4px 10px 0");
		$("#capacitacion a:first").css("color",'white');
	}


</script>
