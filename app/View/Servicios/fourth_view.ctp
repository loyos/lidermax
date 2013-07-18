<div class= "view_content_all">
	<?php echo $this->element('menu_servicios', array('current' => 'fourth')); ?>
	<div class= "view_content">
		
		<?php echo $this->element('imagen_contenido'); ?>
		<div class= "view_content_text">
			<?php
			if(!empty($contenidos['Contenido']['imagen'])) {
				echo $this->Html->image($contenidos['Contenido']['imagen'], array('class' => 'img_right'));
			}
			echo $contenidos['Contenido']['cont'];?>
		</div>
	</div>
</div>
