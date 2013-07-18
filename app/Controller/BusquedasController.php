<?php
App::uses('CakeEmail', 'Network/Email');
class BusquedasController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
	var $uses = array('Contacto','Busqueda',);

	function busqueda(){

	}

	public function contacto(){
		if(!empty($this->data['Contacto']['correo']) ){
			$correo = $this->data['Contacto']['correo'];
			$nombre = $this->data['Contacto']['nombre'];
			$mensaje = $this->data['Contacto']['mensaje'];
			$ciudad = $this->data['Contacto']['ciudad'];
			$empresa = $this->data['Contacto']['empresa'];
			$Email = new CakeEmail();
			$Email->viewVars(array('correo' => $correo, 'nombre' => $nombre, 'mensaje' => $mensaje, 'ciudad' => $ciudad, 'empresa' => $empresa));
			$Email->template('contact');
			$Email->emailFormat('html');
			$Email->from(array('no-reply@lidermax.com' => 'Lidermax'));
			$Email->to('loyenrique1@gmail.com');
			$Email->subject('Solicitud de contacto');
			$Email->send();
			$this->Contacto->save($this->data);
			unset($this->data);
			$this->Session->setFlash('Se ha enviado tu solicitud, pronto serás contactado');
			$this->redirect(array('controller'=>'index','action'=>'contacto' ));
		} elseif(!empty($this->data['Busqueda']['titulo'])) {
			$busquedas = $this->Busqueda->find('all');
			$titulo = $this->data['Busqueda']['titulo'];
			foreach ($busquedas as $b) {
				if(strpos($b['Busqueda']['titulo'],$titulo)!== false) {
					$url = explode(",",$b['Busqueda']['url']);
					$this->redirect(array('controller'=>$url[0],'action'=>$url[1]));
				}
			}

		}
		$this->redirect(array('controller'=>'index','action'=>'index' ));
	}
}
?>