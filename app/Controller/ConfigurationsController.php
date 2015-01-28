<?php

App::uses('AppController', 'Controller');

class ConfigurationsController extends AppController {

	public $components = array('Paginator', 'Session');
	/*
		*********************************************************************************
			
		********************************************************************************
	*/
	
	
	/*
		*********************************************************************************
			Getters
		********************************************************************************
	*/
	public function getConfig($config_slug=null){
		$config = $this->Configuration->find('first',array(
			'conditions'=>array(
				'Configuration.slug'=>$config_slug
			)
		));
		return $config;
	}
	
	
	public function getConfigValue($config_slug=null){
		$config = $this->Configuration->find('first',array(
			'conditions'=>array(
				'Configuration.slug'=>$config_slug
			)
		));
		if($config!=null)return $config['Configuration']['value'];
		else return null;
	}
	
	public function getConfigTypes(){
		$config_types=array(
			'1'=>'Texto',
			'2'=>'Valor'
		);
		return $config_types;
	}
	/*
		*********************************************************************************
			Administrador de configuraciones
		********************************************************************************
	*/
	
	
	/*
		*********************************************************************************
			Agregar Config
		********************************************************************************
	*/
	public function add_config(){
		$this->onlyGroup(1);
		$config_types=$this->getConfigTypes();
		
		if(!empty($this->request->data)){
		
			// $user_id=$this->UserAuth->getUserId();
			$user_id=1;
			$this->Configuration->create();
			$this->request->data['Configuration']['user_id']=$user_id;
			$this->Configuration->save($this->request->data);
			
			$this->Session->setFlash(__('Configuracion creada exitosamente'));
			return $this->redirect(array('action' => 'ver_configuraciones'));
		}
		
		
		
		$this->set(compact('config_types'));
	}
	/*
		*********************************************************************************
			Agregar Config
		********************************************************************************
	*/
	public function edit($id=null){
		$this->layout='admin';
		$this->onlyGroup(1);
		$config_types=$this->getConfigTypes();
		

		if (!$this->Configuration->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Configuration']['slug']=Inflector::slug($this->request->data['Configuration']['name'],'-');
			if ($this->Configuration->save($this->request->data)) {
				$this->Session->setFlash(__('The Configuration has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Configuration could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Configuration.' . $this->Configuration->primaryKey => $id));
			$this->request->data = $this->Configuration->find('first', $options);
		}

		
		
		$this->set(compact('config_types'));
	}
	
	/*
		*********************************************************************************
			Ver Configs
		********************************************************************************
	*/
	public function index(){
		$this->onlyGroup(1);
		$this->layout='admin';
		$this->Configuration->recursive = 0;
		$this->set('configurations', $this->Paginator->paginate());
	}
	
	
}
