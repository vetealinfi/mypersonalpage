<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

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
	public function index() {
		$this->layout='admin';
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout='admin';
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->layout='admin';
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
/**
 * login method
 *
 * @throws NotFoundException
 * @param 
 * @return void
 */
	public function login() {
		$this->layout='admin_login';
		
		if ($this->request->is(array('post', 'put'))) {
			//buscaremos el usuario
			$usuario=$this->User->findByUsername($this->request->data['User']['username']);
			if($usuario!=null){
				//se encontro, ahora pregunto pass
				if(md5($this->request->data['User']['password'])==$usuario['User']['password']){
					//password coincidieron
					//seteo session
					//redirecciono a dashboard
					if($this->Session->check('User')){
						$this->Session->delete('User');
					}else{
						$this->Session->write('User', $usuario);
					}
					$this->redirect(array('action' => 'dashboard'));
					
					
				}else{
					$this->Session->setFlash(__('Password Incorrecta. Intente de nuevo.'));
				}
			}else{
				$this->Session->setFlash(__('Username Incorrecto. Intente de nuevo.'));
			}
		}
	}	
	
/**
 * logout method
 *
 * @throws 
 * @param 
 * @return void
 */
	public function logout() {
		$this->layout='admin_login';
		

		//redirecciono a dashboard
		if($this->Session->check('User')){
			$this->Session->delete('User');
		}
		$this->redirect(array('action' => 'login'));
	
	}	
	
/**
 * Dashboard method
 *
 * @throws 
 * @param 
 * @return void
 */
	public function dashboard() {
		$this->layout='admin';
	
	}

}
