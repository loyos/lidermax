<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: '/img/img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>

<div class="container_slider">
	<div id="slides">
		<div class="slides_container">
			<?php
				foreach ($imagenes as $img) { ?>
					<div class="slide">
						<?php echo $this->Html->image('img/'.$img['Galeria']['imagen'], array('width' => '700')); ?>
						<div class="caption">
						</div>
					</div>
				<?php
				}
			?>
	</div>
		<?php //echo $this->Html->image('img/arrow-prev.png', array('width' => '24px', 'height' => '43', 'class' => 'prev')); ?>
		<?php //echo $this->Html->image('img/arrow-next.png', array('width' => '24px', 'height' => '43', 'class' => 'next')); ?>
	</div>
</div>

<div class= "index_fixer">
</div>

<div class= "index_content">
	<div class= "index_content_top">
		Somos Profesionales, Competitivos y Competentes <br>
		<span>Nuestros servicios son los número 1 a nivel nacional, nos comprometemos a lograr la satisfacción del cliente.</span>		
	</div>
	<div class= "index_button">
		<?php echo $this->Html->link('Consulta Online',array(
			'controller' => 'index',
			'action' => 'contacto'
			)
		); ?>
	<div>
</div>