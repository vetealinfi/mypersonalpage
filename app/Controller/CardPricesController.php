<?php
App::uses('AppController', 'Controller');
/**
 * CardPrices Controller
 *
 * @property CardPrice $CardPrice
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CardPricesController extends AppController {

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
		$this->CardPrice->recursive = 0;
		$this->set('cardPrices', $this->Paginator->paginate());
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
		if (!$this->CardPrice->exists($id)) {
			throw new NotFoundException(__('Invalid card price'));
		}
		$options = array('conditions' => array('CardPrice.' . $this->CardPrice->primaryKey => $id));
		$this->set('cardPrice', $this->CardPrice->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->CardPrice->create();
			if ($this->CardPrice->save($this->request->data)) {
				$this->Session->setFlash(__('The card price has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card price could not be saved. Please, try again.'));
			}
		}
		$cardPages = $this->CardPrice->CardPage->find('list');
		$specificCards = $this->CardPrice->SpecificCard->find('list');
		$this->set(compact('cardPages', 'specificCards'));
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
		if (!$this->CardPrice->exists($id)) {
			throw new NotFoundException(__('Invalid card price'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CardPrice->save($this->request->data)) {
				$this->Session->setFlash(__('The card price has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card price could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CardPrice.' . $this->CardPrice->primaryKey => $id));
			$this->request->data = $this->CardPrice->find('first', $options);
		}
		$cardPages = $this->CardPrice->CardPage->find('list');
		$specificCards = $this->CardPrice->SpecificCard->find('list');
		$this->set(compact('cardPages', 'specificCards'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CardPrice->id = $id;
		if (!$this->CardPrice->exists()) {
			throw new NotFoundException(__('Invalid card price'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CardPrice->delete()) {
			$this->Session->setFlash(__('The card price has been deleted.'));
		} else {
			$this->Session->setFlash(__('The card price could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
