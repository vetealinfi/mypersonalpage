<?php
App::uses('AppController', 'Controller');
/**
 * Events Controller
 *
 * @property Event $Event
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EventsController extends AppController {

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
		$this->Event->recursive = 0;
		$this->set('events', $this->Paginator->paginate());
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
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
		$this->set('event', $this->Event->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add(){ 
		$this->onlyGroup(1);
		$this->layout='admin';
		if ($this->request->is('post')) {
			$this->Event->create();
			
			$this->request->data['Event']['initial_date']='';
			
			
			$this->request->data['Event']['slug']=Inflector::slug($this->request->data['Event']['title'],'-');
			
			if(isset($this->request->data['Event']['dates']) && $this->request->data['Event']['dates']!=''){
				//llega como mes/dia/año
				//debe quedar año-mes-dia h:m:s
				$dates=explode(' - ',$this->request->data['Event']['dates']);
				$initial=explode('/',$dates[0]);
				$this->request->data['Event']['initial_date']=$initial[2].'-'.$initial[0].'-'.$initial[1];
				if(isset($this->request->data['Event']['initial_hour']) && $this->request->data['Event']['initial_hour']!=''){
					$this->request->data['Event']['initial_date']=$this->request->data['Event']['initial_date'].' '.$this->request->data['Event']['initial_hour'];
				}
			
				$final=explode('/',$dates[1]);
				$this->request->data['Event']['final_date']=$final[2].'-'.$final[0].'-'.$final[1];
				if(isset($this->request->data['Event']['final_hour']) && $this->request->data['Event']['final_hour']!=''){
					$this->request->data['Event']['final_date']=$this->request->data['Event']['final_date'].' '.$this->request->data['Event']['final_hour'];
				}
			}
			
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		}
		$users = $this->Event->User->find('list');
		$this->set(compact('users'));
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
		if (!$this->Event->exists($id)) {
			throw new NotFoundException(__('Invalid event'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->request->data['Event']['slug']=Inflector::slug($this->request->data['Event']['title'],'-');
			if(isset($this->request->data['Event']['dates']) && $this->request->data['Event']['dates']!=''){
				//llega como mes/dia/año
				//debe quedar año-mes-dia h:m:s
				$dates=explode(' - ',$this->request->data['Event']['dates']);
				$initial=explode('/',$dates[0]);
				$this->request->data['Event']['initial_date']=$initial[2].'-'.$initial[0].'-'.$initial[1];
				if(isset($this->request->data['Event']['initial_hour']) && $this->request->data['Event']['initial_hour']!=''){
					$this->request->data['Event']['initial_date']=$this->request->data['Event']['initial_date'].' '.$this->request->data['Event']['initial_hour'];
				}
			
				$final=explode('/',$dates[1]);
				$this->request->data['Event']['final_date']=$final[2].'-'.$final[0].'-'.$final[1];
				if(isset($this->request->data['Event']['final_hour']) && $this->request->data['Event']['final_hour']!=''){
					$this->request->data['Event']['final_date']=$this->request->data['Event']['final_date'].' '.$this->request->data['Event']['final_hour'];
				}
			}
			
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Event.' . $this->Event->primaryKey => $id));
			$this->request->data = $this->Event->find('first', $options);
			
			$initial_date=explode(' ',$this->request->data['Event']['initial_date']);
			$initial_hour=$initial_date[1];
			$final_date=explode(' ',$this->request->data['Event']['final_date']);
			$final_hour=$final_date[1];
			$d1=explode('-',$initial_date[0]);
			$d2=explode('-',$final_date[0]);
			
			//llega como año-mes-dia h:m:s
			//debe quedar mes/dia/año
			
			$this->request->data['Event']['dates']=$d1[1].'/'.$d1[2].'/'.$d1[0].' - '.$d2[1].'/'.$d2[2].'/'.$d2[0];
			$this->request->data['Event']['initial_hour']=$initial_hour;
			$this->request->data['Event']['final_hour']=$final_hour;
			
			
		}
		$users = $this->Event->User->find('list');
		$this->set(compact('users'));
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
		$this->Event->id = $id;
		if (!$this->Event->exists()) {
			throw new NotFoundException(__('Invalid event'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Event->delete()) {
			$this->Session->setFlash(__('The event has been deleted.'));
		} else {
			$this->Session->setFlash(__('The event could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function getLastEvent($quantity = 4){
		return $this->Event->find(
			'all',array(
				'conditions'=>array(
					'Event.initial_date >= \''.date('Y-m-d 00:00:00').'\''
				),
				'order'=>array(
					'Event.initial_date ASC'
				),
				'limit'=>$quantity
				
			)
		);
		
	}
	
	
	public function events() {
		$this->layout='dii';
		
		$conditions=array(
			'Event.initial_date >= \''.date('Y-m-d 00:00:00').'\''
		);
		
		
		$this->paginate = array( 
			'conditions'=>$conditions,
			'order'=>'Event.initial_date ASC',
			'limit' => 3
		);
		$events=$this->paginate('Event');	
		
		$pagina_actual='/events';
		$this->set(compact('events','pagina_actual'));
		
	}
	
	public function event($slug=null) {
		$this->layout='dii';
		
		$event = $this->Event->findBySlug($slug);
		$pagina_actual='/events';
		$this->set(compact('event','pagina_actual'));
		
	}
}
