<?php
class EmpresaController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	var $uses = array('Contenido','Seccion','Imagene','Empleado');
	
	public function lidermax($id) {
		 $contenidos = $this->Contenido->findById($id);
		 $imagenes = $this->Imagene->find('all',array(
			'conditions' => array('Imagene.contenido_id' => $id)
		));
		if (in_array($id,array(1,2,3,4,5))) {
			$element_menu = 'menu_empresa';
		} elseif (in_array($id,array(6,7,8,9,10,11))) {
			$element_menu = 'menu_servicios';
		}
		if (in_array($id,array(1,6))) {
			$current = 'first';
		} elseif (in_array($id,array(2,7))) {
			$current = 'second';
		} elseif (in_array($id,array(3,8))) {
			$current = 'third';
		} elseif (in_array($id,array(4,9))) {
			$current = 'fourth';
		} elseif (in_array($id,array(5,10))) {
			$current = 'fifth';
		} else
		if (in_array($id,array(0))) {
			$current = 'zero';
		}
		if (in_array($id,array(11))) {
			$current = 'sixth';
		} else
		if (in_array($id,array())) {
			$current = 'seventh';
		} else
		if (in_array($id,array())) {
			$current = 'eighth';
		} else
		if (in_array($id,array())) {
			$current = 'nineth';
		} else
		if (in_array($id,array())) {
			$current = 'tenth';
		} else
		if (in_array($id,array())) {
			$current = 'eleventh';
		}
		if (in_array($id,array())) {
			$current = 'twelveth';
		}
		if (in_array($id,array())) {
			$current = 'thirteenth';
		}
		if (in_array($id,array())) {
			$current = 'fourteenth';
		}
		//var_dump($imagenes);debug.die("ddf");
		  $this->set(compact('contenidos','imagenes','id','element_menu','current'));
	}
	
	public function nosotros(){
		$empleados = $this->Empleado->find('all');
		$element_menu = 'menu_empresa';
		$current = 'zero';
		$imagen = 'contacto.jpg';
		$this->set(compact('empleados','element_menu','current','imagen'));
	}
	
	public function sendFile($path) {
		$path = WWW_ROOT.'pdf/'.$path;
		$this->response->file($path, array('download' => false, 'name' => 'Curriculum'));
		//Return reponse object to prevent controller from trying to render a view
		return $this->response;
	}
	
	public function first_view(){
       $contenidos = $this->Contenido->findById('1');
	   $this->set(compact('contenidos'));
    }
	
	public function second_view(){
         $contenidos = $this->Contenido->findById('2');
		 $imagenes = $this->Imagene->find('all',array(
			'conditions' => array('Imagene.contenido_id' => 2)
		));
		//var_dump($imagenes);debug.die("ddf");
		  $this->set(compact('contenidos','imagenes'));
    }
	
	public function third_view(){
         $contenidos = $this->Contenido->findById('3');
		  $imagenes = $this->Imagene->find('all',array(
			'conditions' => array('Imagene.contenido_id' => 3)
		));
		var_dump($imagenes);debug.die("ddf");
		  $this->set(compact('contenidos'));
    }
	
	public function fourth_view(){
         $contenidos = $this->Contenido->findById('4');
		  $this->set(compact('contenidos'));
    }
	
	public function fifth_view(){
         $contenidos = $this->Contenido->findById('5');
		  $this->set(compact('contenidos'));
    }
}