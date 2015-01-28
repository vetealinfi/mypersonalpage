<?php
App::uses('AppController', 'Controller');
/**
 * CardPages Controller
 *
 * @property CardPage $CardPage
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CardPagesController extends AppController {

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
		$this->CardPage->recursive = 0;
		$this->set('cardPages', $this->Paginator->paginate());
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
		if (!$this->CardPage->exists($id)) {
			throw new NotFoundException(__('Invalid card page'));
		}
		$options = array('conditions' => array('CardPage.' . $this->CardPage->primaryKey => $id));
		$this->set('cardPage', $this->CardPage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->CardPage->create();
			if ($this->CardPage->save($this->request->data)) {
				$this->Session->setFlash(__('The card page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card page could not be saved. Please, try again.'));
			}
		}
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
		if (!$this->CardPage->exists($id)) {
			throw new NotFoundException(__('Invalid card page'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CardPage->save($this->request->data)) {
				$this->Session->setFlash(__('The card page has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card page could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CardPage.' . $this->CardPage->primaryKey => $id));
			$this->request->data = $this->CardPage->find('first', $options);
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
		$this->CardPage->id = $id;
		if (!$this->CardPage->exists()) {
			throw new NotFoundException(__('Invalid card page'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CardPage->delete()) {
			$this->Session->setFlash(__('The card page has been deleted.'));
		} else {
			$this->Session->setFlash(__('The card page could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
