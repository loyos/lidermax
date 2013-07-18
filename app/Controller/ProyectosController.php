<?php
class ProyectosController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	var $uses = array('Contenido','Seccion','Imagene');
	
	public function lidermax($id) {
		 $contenidos = $this->Contenido->findById($id);
		 $imagenes = $this->Imagene->find('all',array(
			'conditions' => array('Imagene.contenido_id' => $id)
		));
		$element_menu = 'menu_proyectos';
		
		if (in_array($id,array(12))) {
			$current = 'first';
		} elseif (in_array($id,array(13))) {
			$current = 'second';
		} elseif (in_array($id,array(14))) {
			$current = 'third';
		} elseif (in_array($id,array(15))) {
			$current = 'fourth';
		} elseif (in_array($id,array(16))) {
			$current = 'fifth';
		} else
		if (in_array($id,array(17))) {
			$current = 'sixth';
		} else
		if (in_array($id,array(18))) {
			$current = 'seventh';
		} else
		if (in_array($id,array(19))) {
			$current = 'eighth';
		} else
		if (in_array($id,array(20))) {
			$current = 'nineth';
		} else
		if (in_array($id,array(21))) {
			$current = 'tenth';
		} else
		if (in_array($id,array(22))) {
			$current = 'eleventh';
		}
		if (in_array($id,array(23))) {
			$current = 'twelveth';
		}
		if (in_array($id,array(24))) {
			$current = 'thirteenth';
		}
		if (in_array($id,array(25))) {
			$current = 'fourteenth';
		}
		//var_dump($imagenes);debug.die("ddf");
		  $this->set(compact('contenidos','imagenes','id','element_menu','current'));
	}
	
	public function first_view(){
       $contenidos = $this->Contenido->findById('12');
	   $this->set(compact('contenidos'));
    }
	
	public function second_view(){
         $contenidos = $this->Contenido->findById('13');
		  $this->set(compact('contenidos'));
    }
	
	public function third_view(){
         $contenidos = $this->Contenido->findById('14');
		  $this->set(compact('contenidos'));
    }
	
	public function fourth_view(){
         $contenidos = $this->Contenido->findById('15');
		  $this->set(compact('contenidos'));
    }
	
	public function fifth_view(){
         $contenidos = $this->Contenido->findById('16');
		  $this->set(compact('contenidos'));
    }
	
	public function sixth_view(){
        $contenidos = $this->Contenido->findById('17');
		$this->set(compact('contenidos'));
    }
	
	public function seventh_view(){
       $contenidos = $this->Contenido->findById('18');
		$this->set(compact('contenidos'));
    }
	
	public function eighth_view(){
       $contenidos = $this->Contenido->findById('19');
		$this->set(compact('contenidos'));
    }
	
	public function nineth_view(){
       $contenidos = $this->Contenido->findById('20');
		$this->set(compact('contenidos'));
    }
	
	public function tenth_view(){
       $contenidos = $this->Contenido->findById('21');
		$this->set(compact('contenidos'));
    }
	
	public function eleventh_view(){
       $contenidos = $this->Contenido->findById('22');
		$this->set(compact('contenidos'));
    }
	
	public function twelveth_view(){
       $contenidos = $this->Contenido->findById('23');
	   $this->set(compact('contenidos'));
    }
	
	public function thirteenth_view(){
       $contenidos = $this->Contenido->findById('24');
		$this->set(compact('contenidos'));
    }
	
	public function fourteenth_view(){
		$contenidos = $this->Contenido->findById('25');
		$this->set(compact('contenidos'));
    }
}