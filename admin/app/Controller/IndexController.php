<?php
class IndexController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session','JqImgcrop');
	public $uses = array('Galeria', 'Config');


    public function index($id=null, $type=null) {
		if (!empty($type) && !empty($id)) {
			if($type=='delete'){
				$this->Galeria->delete($id);
				$this->redirect(array(
					'action' => 'index',null,null
				));
			}
		}
		if (!empty($this->data['Galeria']['Imagen']['name'])) {
			
			$data = $this->data;
			$save = $this->JqImgcrop->uploadImage($this->data['Galeria']['Imagen'], 'img/img/', '');
			$data['Galeria']['imagen'] = $this->data['Galeria']['Imagen']['name'];
			if ($save) {
				$this->Galeria->save($data);
				$this->Session->setFlash("La imágen se guardo con exito");
			}
	   }
	   
		if(!empty($this->data['Config']['slogan'])){
			$this->Config->id = 1;
			$valido = $this->Config->save($this->data);
		}
	   $imagenes = $this->Galeria->find('all');
	   $this->data = $this->Config->find('first');
	   $this->set(compact('imagenes'));
    }
	
}