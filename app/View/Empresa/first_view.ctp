<div class= "view_content_all">
	<?php echo $this->element('menu_empresa', array('current' => 'first')); ?>
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
