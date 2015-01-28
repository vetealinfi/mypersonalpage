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
		$this->onlyGroup(1);
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
		$this->onlyGroup(1);
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
		$this->onlyGroup(1);
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->User->create();
			
			if(is_uploaded_file($this->request->data['User']['photo']['tmp_name']) && !empty($this->request->data['User']['photo']['tmp_name'])) {
				$path_info = pathinfo($this->request->data['User']['photo']['name']);
				chmod ($this->request->data['User']['photo']['tmp_name'], 0644);
				$photo=time().mt_rand().".".$path_info['extension'];
				$fullpath= WWW_ROOT.'img'.DS.'users';
				if(!is_dir($fullpath)) {
					mkdir($fullpath, 0777, true);
				}
				move_uploaded_file($this->request->data['User']['photo']['tmp_name'],$fullpath.DS.$photo);
				$this->request->data['User']['photo']=$photo;
				
			} else {
				unset($this->request->data['User']['photo']);
				
			}
			
			
			
			$this->request->data['User']['slug']=Inflector::slug($this->request->data['User']['full_name'],'-');
			$a=$this->User->save($this->request->data);
			
			//interests
			$interests=explode(',',$this->request->data['Interest']);
			$this->loadModel('Interest');
			foreach($interests as $interest){
				$this->Interest->create();
				$newInterest['Interest']['name']=$interest;
				$newInterest['Interest']['user_id']=$this->User->id;
				$this->Interest->save($newInterest);
			}

			if ($a) {
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
		$this->onlyGroup(1);
		$this->loadModel('Interest');
		$this->layout='admin';
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$oldInterests=array();
		if ($this->request->is(array('post', 'put'))) {
			
			if(is_uploaded_file($this->request->data['User']['photo']['tmp_name']) && !empty($this->request->data['User']['photo']['tmp_name'])) {
				$path_info = pathinfo($this->request->data['User']['photo']['name']);
				chmod ($this->request->data['User']['photo']['tmp_name'], 0644);
				$photo=time().mt_rand().".".$path_info['extension'];
				$fullpath= WWW_ROOT.'img'.DS.'users';
				if(!is_dir($fullpath)) {
					mkdir($fullpath, 0777, true);
				}
				move_uploaded_file($this->request->data['User']['photo']['tmp_name'],$fullpath.DS.$photo);
				$this->request->data['User']['photo']=$photo;
				
			} else {
				unset($this->request->data['User']['photo']);
				
			}
			
			$this->request->data['User']['slug']=Inflector::slug($this->request->data['User']['full_name'],'-');
			
			$a=$this->User->save($this->request->data);
			
			//interests
			$interests=explode(',',$this->request->data['Interest']['list']);
			
			
			$oldInterests=$this->Interest->find('all',array(
				'conditions'=>array(
					'Interest.user_id'=>$this->request->data['User']['id']
				)
			));
			
			foreach($oldInterests as $i){
				$this->Interest->delete($i['Interest']['id']);
			}
			
			foreach($interests as $interest){
				$oldInterest=$this->Interest->find('first',array(
					'conditions'=>array(
						'Interest.name'=>$interest,
						'Interest.user_id'=>$this->request->data['User']['id']
					)
				));
				if($oldInterest==null){
					$this->Interest->create();
					$newInterest['Interest']['name']=$interest;
					$newInterest['Interest']['user_id']=$this->request->data['User']['id'];
					$this->Interest->save($newInterest);
				}
			}

			if ($a) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
			
			$oldInterests=$this->Interest->find('all',array(
				'conditions'=>array(
					'Interest.user_id'=>$this->request->data['User']['id']
				)
			));
			
		}
		$oldInterestsList=null;
		if($oldInterests!=null){
			$ii=0;
			foreach($oldInterests as $oldInterest){
				if($ii==0){
					$oldInterestsList=$oldInterest['Interest']['name'];
					$ii=1;
				}else{
					$oldInterestsList.=','.$oldInterest['Interest']['name'];
				}
			}
		}
		$listInterests=$this->Interest->find('all',array(
				'fields' => 'DISTINCT Interest.name'
		));
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups','oldInterests','oldInterestsList','listInterests'));
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
		$this->onlyGroup(1);
		$this->layout='admin';
	
	}

	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function academico($slug = null) {
		$this->layout='dii';
		
		
		$user=$this->User->findBySlug($slug);
		
		$pagina_actual='/academicos';
		$this->set(compact('user','pagina_actual'));
		
	}
	
	public function academicos($group_id=3) {
		$this->layout='dii';
		
		
		// $users=$this->User->find('all',array(
			// 'conditions'=>array(
				// 'User.group_id'=>3
			// )
		// ));
		
		$this->loadModel('Group');
		$group=$this->Group->findById($group_id);
		
		$conditions=array(
			'User.group_id'=>$group_id
		);
		
		$this->paginate = array(  
			'conditions'=>$conditions,
			'limit' => 6
		);
		$users=$this->paginate('User');	
		
		if($group_id==3)$pagina_actual='/academicos';
		else $pagina_actual='/academicos/'.$group_id;
		
		
		$this->set(compact('users','pagina_actual','group'));
		
	}
	
	
	

	
}
