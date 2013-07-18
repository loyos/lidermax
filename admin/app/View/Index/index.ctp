<div class= "view_content_all">
	<div class= "view_content">
		<div class= "view_content_text">
			<h1>Inicio - Galeria de Fotos</h1>
			<?php
				echo $this->Form->create('Galeria', array('type' => 'file')); 
				echo '<h3>Agrega una imagen a la galeria principal</h3>';
				echo $this->Form->file('Imagen',array(
					'label' => 'Agrega una imagen'
				));
				echo '<br><br>';
				echo $this->Form->submit('Guardar', array('class' => 'button'));
				echo $this->Form->end;
				echo '<br><br>';
				echo '<table border="1">';
				echo '<tr><td>Imagen</td><td>Eliminar</td></tr>';
				if(!empty($imagenes)){
					foreach ($imagenes as $img){
						echo '<tr><td>';
						echo $this->Html->image('/img/'.$img['Galeria']['imagen'],array('width'=>'70px','height' => '50px'));
						echo '</td><td>';
						echo $this->Html->link('Eliminar',array(
							'controller' => 'index',
							'action' => 'index',$img['Galeria']['id'],'delete'
						),
						null,
						'Estas seguro que deseas eliminar esta imagen?'
						);
						echo '</td></tr>';
					}
				}
				echo '</table>';
			?>
		</div>
	</div>
</div>