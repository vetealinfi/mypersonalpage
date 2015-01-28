<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class MenusController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Session');
	
	
	public function getMenuWithChildrens($level=2){
		$menu_list=array();
		
		$the_menus=$this->Menu->find('all',array('conditions'=>array('Menu.parent_id'=>null),'order'=>array('Menu.lft ASC')));
		// debug($the_menus);
		$menu_list['Level1']=$the_menus;
		foreach($the_menus as $menu){
			// debug($menu);
			
			$menu_list['Level2'][$menu['Menu']['id']]=array();
			// $menu_list['Level3']=array();
			// $menu_list['Level4']=array();
			if($level>=2){
				$menu_list['Level2'][$menu['Menu']['id']]=$this->Menu->find('all',array('conditions'=>array('Menu.parent_id'=>$menu['Menu']['id']),'order'=>array('Menu.lft ASC')));
			}
			if($level>=3){
				foreach($menu_list['Level2'][$menu['Menu']['id']] as $subMenu){
					$menu_list['Level3'][$subMenu['Menu']['id']]=$this->Menu->find('all',array('conditions'=>array('Menu.parent_id'=>$subMenu['Menu']['id']),'order'=>array('Menu.lft ASC')));
				}
			}
			if($level>=4){
				foreach($menu_list['Level3'][$menu['Menu']['id']] as $subMenu){
					$menu_list['Level4'][$subMenu['Menu']['id']]=$this->Menu->find('all',array('conditions'=>array('Menu.parent_id'=>$subMenu['Menu']['id']),'order'=>array('Menu.lft ASC')));
				}
			}
		}
		return $menu_list;
		
	}
	
	
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->onlyGroup(1);
		$this->layout='admin';
		$this->Menu->recursive = 0;
		$this->set('menus', $this->Paginator->paginate());
		
		$menus_listado = $this->Menu->generateTreeList(
          null,
          null,
          null,
          '--'
        );
		
		$the_menus=$this->Menu->find('all');
		$menu_list=array();
		foreach($the_menus as $menu){
			$menu_list[$menu['Menu']['id']]=$menu;
		}
		
		
		$this->set(compact('menus_listado','menu_list'));
	}

	
	
	public function movedown($id = null, $delta = null) {
		$this->onlyGroup(1);
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
		   throw new NotFoundException(__('Invalid category'));
		}

		if ($delta > 0) {
			$this->Menu->moveDown($this->Menu->id, abs($delta));
		} else {
			$this->Session->setFlash(
			  'Please provide the number of positions the field should be' .
			  'moved down.'
			);
		}

		return $this->redirect(array('action' => 'index'));
	}
	
	
	public function moveup($id = null, $delta = null) {
		$this->onlyGroup(1);
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
		   throw new NotFoundException(__('Invalid category'));
		}

		if ($delta > 0) {
			$this->Menu->moveUp($this->Menu->id, abs($delta));
		} else {
			$this->Session->setFlash(
			  'Please provide a number of positions the category should' .
			  'be moved up.'
			);
		}

		return $this->redirect(array('action' => 'index'));
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
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
		$this->set('menu', $this->Menu->find('first', $options));
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
			$this->Menu->create();
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		}
		$menus = $this->Menu->generateTreeList(
          null,
          null,
          null,
          '-'
        );
		$this->set(compact('menus'));
		
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
		
		$menus = $this->Menu->generateTreeList(
          null,
          null,
          null,
          '-'
        );
		$this->set(compact('menus'));
		if (!$this->Menu->exists($id)) {
			throw new NotFoundException(__('Invalid category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Menu->save($this->request->data)) {
				$this->Session->setFlash(__('The category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
			$this->request->data = $this->Menu->find('first', $options);
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
		$this->Menu->id = $id;
		if (!$this->Menu->exists()) {
			throw new NotFoundException(__('Invalid category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Menu->delete()) {
			$this->Session->setFlash(__('The category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
	
	
	
	public function prueba() {
		$this->Menu->create();
		$data['Menu']['parent_id'] = 17;
		$data['Menu']['name'] = 'Debajo de 17';
		$this->Menu->save($data);
		
		// $this->Category->create();
		// $data['Category']['name'] = 'Other People\'s Categories';
		// $this->Category->save($data);
		
        $data = $this->Menu->generateTreeList(
          null,
          null,
          null,
          '-'
        );
        debug($data); die;
    }
}
