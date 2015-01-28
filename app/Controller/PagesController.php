<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

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
		$pages=$this->Page->find('all');
		$this->set(compact('pages'));
		// $this->Page->recursive = 0;
		// $this->set('pages', $this->Paginator->paginate());
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
			
			$slug=Inflector::slug($this->request->data['Page']['name'],'-');
			$this->loadModel('Menu');
			$this->Menu->create();
			$menu['Menu']['name']=$this->request->data['Page']['name'];
			$menu['Menu']['url']='/dii/'.$slug;
			$menu['Menu']['parent_id']=$this->request->data['Page']['parent_id'];
			$this->Menu->save($menu);
			$this->request->data['Page']['menu_id']=$this->Menu->id;
			$this->request->data['Page']['slug']=$slug;
			$this->Page->create();
			if ($this->Page->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		
		// $menus = $this->Page->Menu->generateTreeList(
          // null,
          // null,
          // null,
          // '-'
        // );
		$menus = $this->Page->Menu->find('list',array('conditions'=>array('Menu.parent_id'=>null)));
		$this->set(compact('users', 'menus'));
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
		$this->Page->id = $id;
		if (!$this->Page->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Page->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
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
		if (!$this->Page->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Page->save($this->request->data)) {
				$this->loadModel('Menu');
				
				$menu=$this->Menu->findById($this->request->data['Page']['menu_id']);
				$menu['Menu']['name']=$this->request->data['Page']['name'];
				$this->Menu->save($menu);
				
				$this->Session->setFlash(__('The post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Page.' . $this->Page->primaryKey => $id));
			$this->request->data = $this->Page->find('first', $options);
		}
		
		
		// $this->set(compact('users', 'categories'));
	}	
	
	
	
	public function contacto(){
		$this->layout='dii';
		$this->loadModel('Configuration');
		
		$mail=$this->Configuration->findBySlug('Mail-Envio-de-Contacto');
		$info=$this->Configuration->findBySlug('Informacion-de-Contacto');
		
		if(!empty($this->request->data)){
			$Email = new CakeEmail();
			$Email->from(array($this->request->data['Contact']['email']=> $this->request->data['Contact']['name']))
				->to($mail['Configuration']['value'])
				->subject($this->request->data['Contact']['subject'])
				->send($this->request->data['Contact']['message']);
		}
		
		
		$this->set(compact('mail','info'));
	}
	
	public function analize($slug=null){
		$this->layout='dii';
	
		$page=$this->Page->findBySlug($slug);
		
		
		$this->set(compact('page'));
	}
	
	
	public function formulario(){
	
		$this->layout='admin';
		
	
	
	}
	public function tablas(){
	
		$this->layout='admin';

	}
	
	public function principal(){
		$this->layout='dii';
	}
	public function quienes_somos(){
		$this->layout='dii';
	}
	public function perfil_ingeniero(){
		$this->layout='dii';
	}
	
	public function malla_curricular(){
		$this->layout='dii';
		
		$pagina_actual='/malla-curricular';
		$this->set(compact('pagina_actual'));
		
	}
	public function admision_y_becas(){
		$this->layout='dii';
	}
	public function estudiantes(){
		$this->layout='dii';
	}
	public function alumni(){
		$this->layout='dii';
	}
	public function convenios(){
		$this->layout='dii';
	}
	public function magister_ingenieria_industrial(){
		$this->layout='dii';
	}
	public function magister_gestion_industrial(){
		$this->layout='dii';
	}
	public function noticias(){
		$this->layout='dii';
	}
	public function academicos(){
		$this->layout='dii';
	}
	public function funcionarios(){
		$this->layout='dii';
	}
	
	
	
	
}
