<?php echo $this->Html->image($contenidos['Contenido']['imagen']);
$i =0;
if(!empty($imagenes)) {
	foreach ($imagenes as $p) { 
		if($i == 0){ ?> 
		<a class="fancybox" href="/img/<?php echo $p['Imagene']['imagen']?>" data-fancybox-group="<?php echo $contenidos['Contenido']['id']?>">
		<div class="galeria_imagen">
			Ver fotos
		</div>
		</a>
		<?php
		} else { ?>
			<a class="fancybox"  href="/img/<?php echo $p['Imagene']['imagen'] ?>" style = "display:none" data-fancybox-group="<?php echo $contenidos['Contenido']['id'];?>"><img src="/img/<?php echo $p['Imagene']['imagen'] ?>" alt="" /></a>
		<?php
		}
		$i++;
	}	
}
?>