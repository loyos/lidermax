<?php
class SuministrosController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	var $uses = array('Contenido','Seccion','Imagene');
	
	public function lidermax($id) {
		 $contenidos = $this->Contenido->findById($id);
		 $imagenes = $this->Imagene->find('all',array(
			'conditions' => array('Imagene.contenido_id' => $id)
		));
		$element_menu = 'menu_suministros';
		
		if (in_array($id,array(26))) {
			$current = 'first';
		} elseif (in_array($id,array(27))) {
			$current = 'second';
		} 
		//var_dump($imagenes);debug.die("ddf");
		  $this->set(compact('contenidos','imagenes','id','element_menu','current'));
	}
	
	public function first_view(){
       $contenidos = $this->Contenido->findById('26');
	   $this->set(compact('contenidos'));
    }
	
	public function second_view(){
         $contenidos = $this->Contenido->findById('27');
		  $this->set(compact('contenidos'));
    }
}