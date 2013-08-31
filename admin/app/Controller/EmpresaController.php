<?php
class EmpresaController extends AppController {
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session','JqImgcrop');
	public $uses = array('Contenido','Seccion','Contacto','Imagene','Empleado','Curso','Documento');


	function edit($id,$type=null,$id_delete = null){
		if ($type=='delete' && !empty($id_delete)){
			$this->Imagene->delete($id_delete);
			$this->redirect(array('action' => 'edit',$id));
		}

		if ($type == 'delete_contact' && !empty($id_contacto)){
			$this->Contacto->delete($id_contacto);
			$this->redirect(array('action' => 'edit',$id));
		}

		if (!empty($this->data)){
			$data = $this->data;
			$data['Contenido']['id'] = $id;
			$save = true;
			if (!empty($this->data['Contenido']['Imagen']['name'])) {
				$save = $this->JqImgcrop->uploadImage($this->data['Contenido']['Imagen'], 'img/', '');
				$data_img['Imagene']['contenido_id'] = $id;
				$data_img['Imagene']['imagen'] = $this->data['Contenido']['Imagen']['name'];
				$this->Imagene->save($data_img);
				
			}
			if (!empty($this->data['Contenido']['Imagen_grande']['name'])) {
				$save = $this->JqImgcrop->uploadImage($this->data['Contenido']['Imagen_grande'], 'img/', '');
				$data['Contenido']['id'] = $id;
				$data['Contenido']['imagen'] = $this->data['Contenido']['Imagen_grande']['name'];
				
			}
			if ($save) {
				$this->Contenido->save($data);
				//$this->setFlash("La informacion se guardo con exito");
			}
		}
		$contenidos = $this->Contenido->find('first',array(
			'conditions' => array('Contenido.id' => $id)
		));
		$imagenes = $this->Imagene->find('all',array(
			'conditions' => array('Imagene.contenido_id' => $id)
		));
		if ($id==44){
			$contactos  = $this->Contacto->find("all");
			$this->set(compact('contactos'));
		}
		$this->set(compact('contenidos','id','imagenes'));
		//$this->redirect(array('action'=>'edit',$id));
	}
	
	public function nosotros() {
		$empleados = $this->Empleado->find('all');
		$this->set(compact('empleados'));
	}

	public function editar_nosotros($id = null) {
		if (!empty($this->data)) {
			$data = $this->data;
			if (!empty($this->data['Empleado']['Foto']['name'])) {
				$save = $this->JqImgcrop->uploadImage($this->data['Empleado']['Foto'], 'img/', '');
				$data['Empleado']['foto'] = $this->data['Empleado']['Foto']['name'];
			}
			if( $this->data['Empleado']['Curriculum']['error'] == 0 &&  $this->data['Empleado']['Curriculum']['size'] > 0){
                  $destino = '/home/ingenili/public_html/app/webroot/pdf'.DS;
                  move_uploaded_file($this->data['Empleado']['Curriculum']['tmp_name'], $destino.$this->data['Empleado']['Curriculum']['name']);
				  $data['Empleado']['cv'] = $this->data['Empleado']['Curriculum']['name'];
            }
			$this->Empleado->save($data);
			$this->redirect(array('action' => 'nosotros'));
		} elseif (!empty($id)) {
			$this->data = $this->Empleado->findById($id);
		}
		$this->set(compact('id'));
    }

	public function eliminar_nosotros($id){
		$this->Empleado->delete($id);
		$this->redirect(array('action' => 'nosotros'));
    }

	public function cursos(){
		$cursos = $this->Curso->find('all');
		$this->set(compact('cursos'));
    }

	public function editar_cursos($id = null){
		if(!empty($this->data)) {
			$data = $this->data;
			if( $this->data['Curso']['Programa']['error'] == 0 &&  $this->data['Curso']['Programa']['size'] > 0){
                  $destino = '/home/ingenili/public_html/app/webroot/pdf'.DS;
                  move_uploaded_file($this->data['Curso']['Programa']['tmp_name'], $destino.$this->data['Curso']['Programa']['name']);
				  $data['Curso']['programa'] = $this->data['Curso']['Programa']['name'];
            }
			$this->Curso->save($data);
			$this->redirect(array('action'=>'cursos'));
		} elseif (!empty($id)) {
			$this->data = $this->Curso->findById($id);
		}
		$this->set(compact('id'));
    }
	
	public function ver_documentos(){
		$documentos = $this->Documento->find('all');
		$this->set(compact('documentos'));
	}
	
	public function editar_documentos($id = null){
		debug($this->data);
		if(!empty($this->data)) {
			$data = $this->data;
			if( $this->data['Documento']['ruta']['error'] == 0 &&  $this->data['Documento']['ruta']['size'] > 0){
                  // $destino = '/home/ingenili/public_html/app/webroot/pdf/docs'.DS;
				  
				  $destino = 'C:/xampp/htdocs/lidermax/app/webroot/pdf' . DS;
				  debug($destino);
                  move_uploaded_file($this->data['Documento']['ruta']['tmp_name'], $destino.$this->data['Documento']['ruta']['name']);
				  $data['Documento']['ruta'] = $this->data['Documento']['ruta']['name'];
            }
			$salvo = $this->Documento->save($data);
			if($salvo){
				$this->Session->setFlash("El documento se guardo con éxito");
			}else{
				$this->Session->setFlash("La documento no se pudo guardar");
			}
			$this->redirect(array('action'=>'cursos'));
		} elseif (!empty($id)) {
			$this->data = $this->Documento->findById($id);
		}
		$this->set(compact('id'));
	}

	public function eliminar_cursos($id){
		$this->Curso->delete($id);
		$this->redirect(array('action' => 'cursos'));
    }
	public function eliminar_documentos($id){
		$this->Documento->delete($id);
		$this->redirect(array('action' => 'cursos'));
    }
}