<?php
class ServiciosController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	var $uses = array('Contenido','Seccion','Imagene');
	
	public function lidermax($id) {
		 $contenidos = $this->Contenido->findById($id);
		 $imagenes = $this->Imagene->find('all',array(
			'conditions' => array('Imagene.contenido_id' => $id)
		));
		$element_menu = 'menu_servicios';
		
		if (in_array($id,array(6))) {
			$current = 'first';
		} elseif (in_array($id,array(7))) {
			$current = 'second';
		} elseif (in_array($id,array(8))) {
			$current = 'third';
		} elseif (in_array($id,array(9))) {
			$current = 'fourth';
		} elseif (in_array($id,array(10))) {
			$current = 'fifth';
		} else
		if (in_array($id,array(11))) {
			$current = 'sixth';
		}
		//var_dump($imagenes);debug.die("ddf");
		  $this->set(compact('contenidos','imagenes','id','element_menu','current'));
	}
	
	public function first_view(){
       $contenidos = $this->Contenido->findById('6');
	   $this->set(compact('contenidos'));
    }
	
	public function second_view(){
         $contenidos = $this->Contenido->findById('7');
		 $this->set(compact('contenidos'));
    }
	
	public function third_view(){
         $contenidos = $this->Contenido->findById('8');
		 $this->set(compact('contenidos'));
    }
	
	public function fourth_view(){
         $contenidos = $this->Contenido->findById('9');
		 $this->set(compact('contenidos'));
    }
	
	public function fifth_view(){
         $contenidos = $this->Contenido->findById('10');
		 $this->set(compact('contenidos'));
    }
	
	public function sixth_view(){
		 $contenidos = $this->Contenido->findById('11');
		 $this->set(compact('contenidos'));
       
    }
}