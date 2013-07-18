<?php
class SeguridadController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	var $uses = array('Contenido','Seccion','Imagene');
	
	public function lidermax($id) {
		 $contenidos = $this->Contenido->findById($id);
		 $imagenes = $this->Imagene->find('all',array(
			'conditions' => array('Imagene.contenido_id' => $id)
		));
		$element_menu = 'menu_seguridad';
		
		if (in_array($id,array(28))) {
			$current = 'first';
		} elseif (in_array($id,array(29))) {
			$current = 'second';
		} elseif (in_array($id,array(30))) {
			$current = 'third';
		} 
		//var_dump($imagenes);debug.die("ddf");
		  $this->set(compact('contenidos','imagenes','id','element_menu','current'));
	}
	
	public function first_view(){
       $contenidos = $this->Contenido->findById('28');
	   $this->set(compact('contenidos'));
    }
	
	public function second_view(){
         $contenidos = $this->Contenido->findById('29');
		  $this->set(compact('contenidos'));
    }
	
	public function third_view(){
         $contenidos = $this->Contenido->findById('30');
		  $this->set(compact('contenidos'));
    }
}