
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "advanced",
		skin : "o2k7",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,inlinepopups,autosave",
		
		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example word content CSS (should be your site CSS) this one removes paragraph margins
		content_css : "css/word.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}

	});
</script>
<div class= "view_content_all">
	<div class= "view_content">

		<?php //echo $this->Html->image('mision.jpg'); ?>
		<div class= "view_content_text">
			<?php

	echo $this->Form->create('Contenido', array('type' => 'file'));
	echo "<h3>Escribe el contenido</h3>";
	echo '<br>';
	echo $this->Form->input('cont',array(
		'label' => false,
		'cols'=> '50',
		'rows' => '15',
		'value' => $contenidos['Contenido']['cont']
	));
	echo '<br>';
	echo '<h3>Agrega una imagen principal</h3>';
	echo $this->Form->file('Imagen_grande',array(
		'label' => 'Agrega una imagen principal'
	));
	
	echo '<br><br>';
	
	echo '<h3>Agrega una imagen a la galeria</h3>';
	echo $this->Form->file('Imagen',array(
		'label' => 'Agrega una imagen'
	));
	
	echo '<br><br>';
	echo $this->Form->submit('Guardar', array('class' => 'button'));
	echo $this->Form->end;
	echo '<br><br>';
	if (!empty($contenidos['Contenido']['imagen'])) {
		echo '<table border="1">';
		echo '<tr><td>Imagen principal</td></tr>';
		echo '<tr><td>';
		echo $this->Html->image('/'.$contenidos['Contenido']['imagen'],array('width'=>'70px','height' => '50px'));
		echo '</td>';
		echo '</tr>';
		echo '<table>';
	}
	echo '<br><br>';
	if(!empty($imagenes)){
		echo '<table border="1">';
		echo '<tr><td>Imagen</td><td>Eliminar</td></tr>';
		foreach ($imagenes as $img){
			echo '<tr><td>';
			echo $this->Html->image('/'.$img['Imagene']['imagen'],array('width'=>'70px','height' => '50px'));
			echo '</td><td>';
			echo $this->Html->link('Eliminar',array(
				'controller' => 'empresa',
				'action' => 'edit',$contenidos['Contenido']['id'],'delete',$img['Imagene']['id']
			),
			null,
			'Estas seguro que deseas eliminar esta imagen?'
			);
			echo '</td></tr>';
		}
	}
	echo '</table>';
	// if(!empty($contenidos['Contenido']['imagen'])){
		// echo '<table border="1">';
		// echo '<tr><td>Imagen</td><td>Eliminar</td></tr>';
		// echo '<tr><td>'.$this->Html->image('/'.$contenidos['Contenido']['imagen'],array('width'=>'70px','height'=>'70px')).'</td>';
		// echo '<td>'.$this->Html->link('ELiminar',array('action'=>'edit',$contenidos['Contenido']['id'],'delete'),null,'Estas seguro de eliminar la imagen').'</td></tr></table>';
	// }
	if(!empty($contactos)){
		echo '<br><br>';
		echo '<table border="1">';
		echo '<tr><td>Nombre</td><td>Correo</td><td>Mensaje</td><td>Eliminar</td></tr>';
		foreach ($contactos as $contacto){
			echo '<tr><td>'.$contacto['Contacto']['nombre'].'</td>';
			echo '<td>'.$contacto['Contacto']['correo'].'</td>';
			echo '<td>'.$contacto['Contacto']['mensaje'].'</td>';
			echo '<td>'.$this->Html->link('ELiminar',array('action'=>'edit',$contenidos['Contenido']['id'],'delete_contact',$contacto['Contacto']['id']),null,'Estas seguro de eliminar el contacto').'</td>';
			echo '</tr>';
		}
		echo '</table>';
	}
	?>

		</div>
	</div>
</div>

