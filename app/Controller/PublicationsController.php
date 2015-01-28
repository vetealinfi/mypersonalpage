<?php
App::uses('AppController', 'Controller');
/**
 * Publications Controller
 *
 * @property Publication $Publication
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PublicationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index($user_id=null) {
		$this->onlyGroup(1);
		$this->layout='admin';
		// $this->Publication->recursive = 0;
		$publications=$this->Publication->find('all',array(
			'conditions'=>array(
				'Publication.user_id'=>$user_id
			)
		));
		$this->loadModel('User');
		$user=$this->User->findById($user_id);
		// $this->set('publications', $this->Paginator->paginate());
		
		$this->set(compact('publications','user','user_id'));
	}



/**
 * add method
 *
 * @return void
 */
	public function add($user_id=null) {
		$this->onlyGroup(1);
		$this->layout='admin';
		$this->request->data['Publication']['user_id']=$user_id;
		
		if ($this->request->is('post')) {
			$final=explode('/',$this->request->data['Publication']['publishing_date2']);
			$this->request->data['Publication']['publication_date']=$final[2].'-'.$final[0].'-'.$final[1];
			$this->request->data['Publication']['slug']=Inflector::slug($this->request->data['Publication']['title'],'-');
			
			$this->Publication->create();
			if ($this->Publication->save($this->request->data)) {
				$this->Session->setFlash(__('The publication has been saved.'));
				return $this->redirect(array('action' => 'index',$user_id));
			} else {
				$this->Session->setFlash(__('The publication could not be saved. Please, try again.'));
			}
		}
		
		
		$this->set(compact('user_id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->onlyGroup(1);
		$this->layout='admin';
		if (!$this->Publication->exists($id)) {
			throw new NotFoundException(__('Invalid publication'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$final=explode('/',$this->request->data['Publication']['publishing_date2']);
			$this->request->data['Publication']['publication_date']=$final[2].'-'.$final[0].'-'.$final[1];
			$this->request->data['Publication']['slug']=Inflector::slug($this->request->data['Publication']['title'],'-');
			
			if ($this->Publication->save($this->request->data)) {
				$this->Session->setFlash(__('The publication has been saved.'));
				return $this->redirect(array('action' => 'index',$this->request->data['Publication']['user_id']));
			} else {
				$this->Session->setFlash(__('The publication could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Publication.' . $this->Publication->primaryKey => $id));
			$this->request->data = $this->Publication->find('first', $options);
			
			$d1=explode('-',$this->request->data['Publication']['publication_date']);
			$this->request->data['Publication']['publishing_date2']=$d1[1].'/'.$d1[2].'/'.$d1[0];
		}
		$users = $this->Publication->User->find('list');
		$this->set(compact('users'));
	}

	
	public function publicaciones($user_slug=null){
		$this->layout='dii';
		$this->loadModel('User');
		$user=$this->User->findBySlug($user_slug);
		
		$publications=$this->Publication->find('all',array(
			'conditions'=>array(
				'Publication.user_id'=>$user['User']['id']
			)
		));
		
		$this->set(compact('user','publications'));
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->onlyGroup(1);
		$this->Publication->id = $id;
		if (!$this->Publication->exists()) {
			throw new NotFoundException(__('Invalid publication'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Publication->delete()) {
			$this->Session->setFlash(__('The publication has been deleted.'));
		} else {
			$this->Session->setFlash(__('The publication could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
