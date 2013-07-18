<div class= "view_content_all">
	<?php echo $this->element($element_menu, array('current' => $current)); ?>
	<div class= "view_content">

		<?php echo $this->element('imagen_contenido'); ?>
		<div class= "view_content_text">
			<?php
			if(!empty($imagenes)) {
				//echo $this->Html->image($contenidos['Contenido']['imagen'], array('class' => 'img_right'));
				echo $this->element('imagenes');
			}
			echo $contenidos['Contenido']['cont'];?>
		</div>
	</div>
</div>
