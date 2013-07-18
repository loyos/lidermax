<?php

class Imagene extends AppModel {
    var $name = 'Imagene';
     
   var $belongsTo = array(
        'Contenido' => array(
            'className'    => 'Contenido',
            'foreignKey'   => 'contenido_id'
        )
    );
	
}

?>