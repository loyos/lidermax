<?php
App::uses('CakeEmail', 'Network/Email');
class IndexController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	var $uses = array('Galeria','Contacto','Contenido');


    public function index() {
		$slogan = $this->Config->find('first');
		$slogan = $slogan['Config']['slogan'];
		$this->set(compact('slogan'));
		$imagenes = $this->Galeria->find('all');
		$this->set(compact('imagenes'));
    }

	public function contacto(){
		$contenidos = $this->Contenido->find('first', array(
			'conditions' => array('id'=>'44')
		));
		$this->set(compact('contenidos'));
	}

	function busqueda(){
		if(!empty($this->data)){
			debug.die($this->data);
		}
	}
}