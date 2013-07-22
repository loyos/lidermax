<script>
$(document).ready(function() {
	$('.fancybox').fancybox();
})
</script>
<div class="centro">
	<div class ="fotos">
		<?php 
		$i = 0;
		foreach ($imagenes as $p) { 
			if($i == 0){ ?> 
			<a class="fancybox primera" href="/img/<?php echo $p['Imagene']['imagen']?>" data-fancybox-group="<?php echo $contenidos['Contenido']['id']?>">
			<img src="/img/<?php echo $p['Imagene']['imagen']?>" alt="" class="img_right"/>
			<!-- <div class= "galeria">
				Ver fotos
			</div> -->
			</a>
			<?php
			} else { ?>
				<a class="fancybox"  href="/img/<?php echo $p['Imagene']['imagen'] ?>" style = "display:none" data-fancybox-group="<?php echo $contenidos['Contenido']['id'];?>"><img src="/img/<?php echo $p['Imagene']['imagen'] ?>" alt="" /></a>
			<?php
			}
			$i++;
		}
		?>
	</div>
</div>