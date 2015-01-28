<?php
App::uses('AppController', 'Controller');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PostsController extends AppController {

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
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
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
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
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
			$this->Post->create();
			
			if(is_uploaded_file($this->request->data['Post']['photo']['tmp_name']) && !empty($this->request->data['Post']['photo']['tmp_name'])) {
				$path_info = pathinfo($this->request->data['Post']['photo']['name']);
				chmod ($this->request->data['Post']['photo']['tmp_name'], 0644);
				$photo=time().mt_rand().".".$path_info['extension'];
				// $fullpath= WWW_ROOT.'img'.DS.'posts'.DS.'main_img';
				$fullpath= WWW_ROOT.'img'.DS.'posts';
				if(!is_dir($fullpath)) {
					mkdir($fullpath, 0777, true);
				}
				move_uploaded_file($this->request->data['Post']['photo']['tmp_name'],$fullpath.DS.$photo);
				$this->request->data['Post']['photo']=$photo;
				
			} else {
				unset($this->request->data['Post']['photo']);
			}
			
			if(isset($this->request->data['Post']['date']) && $this->request->data['Post']['date']!=''){
				//llega como mes/dia/año
				//debe quedar año-mes-dia h:m:s
				$dates=explode(' - ',$this->request->data['Post']['date']);
				$initial=explode('/',$dates[0]);
				$this->request->data['Post']['publishing_date']=$initial[2].'-'.$initial[0].'-'.$initial[1];
			}
		
			$this->request->data['Post']['slug']=Inflector::slug($this->request->data['Post']['title'],'-');
			
			$this->request->data['Post']['slug']=Inflector::slug($this->request->data['Post']['title'],'-');
			
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		$users = $this->Post->User->find('list');
		// $categories = $this->Post->Category->find('list');
		$categories = $this->Post->Category->generateTreeList(
          null,
          null,
          null,
          '-'
        );
		$this->set(compact('users', 'categories'));
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
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			if(is_uploaded_file($this->request->data['Post']['photo']['tmp_name']) && !empty($this->request->data['Post']['photo']['tmp_name'])) {
				$path_info = pathinfo($this->request->data['Post']['photo']['name']);
				chmod ($this->request->data['Post']['photo']['tmp_name'], 0644);
				$photo=time().mt_rand().".".$path_info['extension'];
				// $fullpath= WWW_ROOT.'img'.DS.'posts'.DS.'main_img';
				$fullpath= WWW_ROOT.'img'.DS.'posts';
				if(!is_dir($fullpath)) {
					mkdir($fullpath, 0777, true);
				}
				move_uploaded_file($this->request->data['Post']['photo']['tmp_name'],$fullpath.DS.$photo);
				$this->request->data['Post']['photo']=$photo;
				
			} else {
				unset($this->request->data['Post']['photo']);
			}
			
			if(isset($this->request->data['Post']['dates']) && $this->request->data['Post']['dates']!=''){
				//llega como mes/dia/año
				//debe quedar año-mes-dia h:m:s
				$dates=explode(' - ',$this->request->data['Event']['date']);
				$initial=explode('/',$dates[0]);
				$this->request->data['Post']['publishing_date']=$initial[2].'-'.$initial[0].'-'.$initial[1];
			}
			
			$this->request->data['Post']['slug']=Inflector::slug($this->request->data['Post']['title'],'-');
			
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
			
			$initial_date=explode(' ',$this->request->data['Post']['publishing_date']);
			$d1=explode('-',$initial_date[0]);
			
			//llega como año-mes-dia h:m:s
			//debe quedar mes/dia/año
			
			$this->request->data['Post']['publishing_date']=$d1[1].'/'.$d1[2].'/'.$d1[0];
			
			
		}
		$users = $this->Post->User->find('list');
		// $categories = $this->Post->Category->find('list');
		$categories = $this->Post->Category->generateTreeList(
          null,
          null,
          null,
          '-'
        );
		
		$this->set(compact('users', 'categories'));
	}

	public function notice($slug=null) {
		$this->layout='dii';
		
		$post = $this->Post->findBySlug($slug);
		$pagina_actual='/noticias';
		
		
		
		
		
		
		$this->set(compact('post','pagina_actual'));
		
	}
	
	public function notices($categoria=null) {
		$this->layout='dii';
		
		$conditions=array(
			'Category.slug'=>$categoria
		);
		
		$this->paginate = array( 
			'conditions'=>$conditions,
			'order'=>'Post.publishing_date DESC',
			'limit' => 3
		);
		$posts=$this->paginate('Post');	
		
		$this->loadModel('Category');
		$cat=$this->Category->findBySlug($categoria);
		
		$pagina_actual='/noticias';
		$this->set(compact('posts','pagina_actual','cat'));
		
	}
	
	public function dropzone(){
		$this->layout='admin';
		
		
		if ($this->request->is('post')) {
			debug($this->request->data);
			$datos=serialize($this->request->data);
			
		}
	}
	
	public function prueba(){
		$this->layout='admin';
		$datos=array();
		if(!empty($this->request->data)){
			$datos=$this->request->data;
		}
		$this->set(compact('datos'));
		
		
		
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
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
