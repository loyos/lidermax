<?php

class Contenido extends AppModel {
    var $name = 'Contenido';
	public $hasMany = array(
        'Imagene' => array(
            'className'  => 'Imagene',
			'foreignKey'    => 'contenido_id',
        )
    );
}

?>