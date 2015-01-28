<?php
App::uses('AppController', 'Controller');
/**
 * SpecificCards Controller
 *
 * @property SpecificCard $SpecificCard
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SpecificCardsController extends AppController {

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
		$this->SpecificCard->recursive = 0;
		$this->set('specificCards', $this->Paginator->paginate());
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
		if (!$this->SpecificCard->exists($id)) {
			throw new NotFoundException(__('Invalid specific card'));
		}
		$options = array('conditions' => array('SpecificCard.' . $this->SpecificCard->primaryKey => $id));
		$this->set('specificCard', $this->SpecificCard->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->SpecificCard->create();
			if ($this->SpecificCard->save($this->request->data)) {
				$this->Session->setFlash(__('The specific card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specific card could not be saved. Please, try again.'));
			}
		}
		$editions = $this->SpecificCard->Edition->find('list');
		$cards = $this->SpecificCard->Card->find('list');
		$this->set(compact('editions', 'cards'));
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
		if (!$this->SpecificCard->exists($id)) {
			throw new NotFoundException(__('Invalid specific card'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SpecificCard->save($this->request->data)) {
				$this->Session->setFlash(__('The specific card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The specific card could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SpecificCard.' . $this->SpecificCard->primaryKey => $id));
			$this->request->data = $this->SpecificCard->find('first', $options);
		}
		$editions = $this->SpecificCard->Edition->find('list');
		$cards = $this->SpecificCard->Card->find('list');
		$this->set(compact('editions', 'cards'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SpecificCard->id = $id;
		if (!$this->SpecificCard->exists()) {
			throw new NotFoundException(__('Invalid specific card'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SpecificCard->delete()) {
			$this->Session->setFlash(__('The specific card has been deleted.'));
		} else {
			$this->Session->setFlash(__('The specific card could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
