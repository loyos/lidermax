<?php
class CapacitacionController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	var $uses = array('Contenido','Seccion','Imagene','Curso');
	
	public function sendFile($path) {
		$path = WWW_ROOT.'pdf/'.$path;
		$this->response->file($path, array('download' => true, 'name' => 'Bombashidráulicas'));
		//Return reponse object to prevent controller from trying to render a view
		return $this->response;
	}
	
	public function lidermax($id) {
		$contenidos = $this->Curso->findById($id);
		$element_menu = 'menu_capacitacion';
		$cursos = $this->Curso->find('all');
		$imagen = 'contacto.jpg';
		// if (in_array($id,array(31))) {
			// $current = 'first';
		// } elseif (in_array($id,array(32))) {
			// $current = 'second';
		// } elseif (in_array($id,array(33))) {
			// $current = 'third';
		// } elseif (in_array($id,array(34))) {
			// $current = 'fourth';
		// } elseif (in_array($id,array(35))) {
			// $current = 'fifth';
		// } else
		// if (in_array($id,array(36))) {
			// $current = 'sixth';
		// } else
		// if (in_array($id,array(37))) {
			// $current = 'seventh';
		// } else
		// if (in_array($id,array(38))) {
			// $current = 'eighth';
		// } else
		// if (in_array($id,array(39))) {
			// $current = 'eighth';
		// } 
		//var_dump($imagenes);debug.die("ddf");
		  $this->set(compact('contenidos','id','element_menu','cursos','imagen'));
	}
	
	public function first_view(){
       $contenidos = $this->Contenido->findById('31');
	   $this->set(compact('contenidos'));
    }
	
	public function second_view(){
         $contenidos = $this->Contenido->findById('32');
		  $this->set(compact('contenidos'));
    }
	
	public function third_view(){
         $contenidos = $this->Contenido->findById('33');
		  $this->set(compact('contenidos'));
    }
	
	public function fourth_view(){
         $contenidos = $this->Contenido->findById('34');
		  $this->set(compact('contenidos'));
    }
	
	public function fifth_view(){
         $contenidos = $this->Contenido->findById('35');
		  $this->set(compact('contenidos'));
    }
	
	public function sixth_view(){
        $contenidos = $this->Contenido->findById('36');
		$this->set(compact('contenidos'));
    }
	
	public function seventh_view(){
       $contenidos = $this->Contenido->findById('37');
		$this->set(compact('contenidos'));
    }
	
	public function eighth_view(){
       $contenidos = $this->Contenido->findById('38');
		$this->set(compact('contenidos'));
    }
	
	public function nineth_view(){
       $contenidos = $this->Contenido->findById('39');
		$this->set(compact('contenidos'));
    }
}