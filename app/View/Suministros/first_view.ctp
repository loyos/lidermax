<div class= "view_content_all">
	<?php echo $this->element('menu_suministros', array('current' => 'first')); ?>
	<div class= "view_content">
		
		<?php echo $this->element('imagen_suministros'); ?>
		<div class= "view_content_text">
			<?php
			if(!empty($contenidos['Contenido']['imagen'])) {
				echo $this->Html->image($contenidos['Contenido']['imagen'], array('class' => 'img_right'));
			}
			echo $contenidos['Contenido']['cont'];?>
		</div>
	</div>
</div>
