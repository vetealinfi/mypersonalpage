<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class CategoriesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->onlyGroup(1);
		$this->layout='admin';
		$this->Category->recursive = 0;
		$this->set('categories', $this->Paginator->paginate());
		
		$categorias_listado = $this->Category->generateTreeList(
          null,
          null,
          null,
          '-'
        );
		$this->set(compact('categorias_listado'));
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
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
		$this->set('category', $this->Category->find('first', $options));
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
			$this->Category->create();
			
			if(is_uploaded_file($this->request->data['Category']['photo']['tmp_name']) && !empty($this->request->data['Category']['photo']['tmp_name'])) {
				$path_info = pathinfo($this->request->data['Category']['photo']['name']);
				chmod ($this->request->data['Category']['photo']['tmp_name'], 0644);
				$photo=time().mt_rand().".".$path_info['extension'];
				$fullpath= WWW_ROOT.'img'.DS.'categories';
				if(!is_dir($fullpath)) {
					mkdir($fullpath, 0777, true);
				}
				move_uploaded_file($this->request->data['Category']['photo']['tmp_name'],$fullpath.DS.$photo);
				$this->request->data['Category']['photo']=$photo;
				
			} else {
				unset($this->request->data['Category']['photo']);
				
			}
			
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Category->generateTreeList(
          null,
          null,
          null,
          '-'
        );
		$this->set(compact('categorias'));
		
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
		
		$categorias = $this->Category->generateTreeList(
          null,
          null,
          null,
          '-'
        );
		$this->set(compact('categorias'));
		if (!$this->Category->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			debug($this->request->data);
			if($this->request->data['Category']['photo']!=array()){
				if(is_uploaded_file($this->request->data['Category']['photo']['tmp_name']) && !empty($this->request->data['Category']['photo']['tmp_name'])) {
					$path_info = pathinfo($this->request->data['Category']['photo']['name']);
					chmod ($this->request->data['Category']['photo']['tmp_name'], 0644);
					$photo=time().mt_rand().".".$path_info['extension'];
					$fullpath= WWW_ROOT.'img'.DS.'categories';
					if(!is_dir($fullpath)) {
						mkdir($fullpath, 0777, true);
					}
					move_uploaded_file($this->request->data['Category']['photo']['tmp_name'],$fullpath.DS.$photo);
					$this->request->data['Category']['photo']=$photo;
					
				} else {
					unset($this->request->data['Category']['photo']);
					
				}
			}
			
			
			if ($this->Category->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Category.' . $this->Category->primaryKey => $id));
			$this->request->data = $this->Category->find('first', $options);
		}
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
		$this->Category->id = $id;
		if (!$this->Category->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Category->delete()) {
			$this->Session->setFlash(__('The category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	
	
	
	public function getCategoriesMenu(){
		$categories = $this->Category->find('all',array(
			'conditions'=>array(
				'Category.in_menu'=>1
			)
		));
		
		return $categories;
	}
	
	public function getCategoriesSlider(){
		$categories = $this->Category->find('all',array(
			'conditions'=>array(
				'Category.in_slider'=>1
			)
		));
		
		return $categories;
	}
	
	public function getCategoriesSliderNews(){
		$this->loadModel('Post');
		$categories = $this->Category->find('all',array(
			'conditions'=>array(
				'Category.in_slider'=>1
			)
		));
		$news=array();
		foreach($categories as $c){
			$news[$c['Category']['id']]=$this->Post->find('all',array(
				'conditions'=>array(
					'Post.category_id'=>$c['Category']['id']
				)
			));
		}
		return $news;
	}
	
	public function prueba() {
		$this->Category->create();
		$data['Category']['parent_id'] = 17;
		$data['Category']['name'] = 'Debajo de 17';
		$this->Category->save($data);
		
		// $this->Category->create();
		// $data['Category']['name'] = 'Other People\'s Categories';
		// $this->Category->save($data);
		
        $data = $this->Category->generateTreeList(
          null,
          null,
          null,
          '-'
        );
        debug($data); die;
    }
}
