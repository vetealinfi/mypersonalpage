<?php
App::uses('AppController', 'Controller');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');
/**
 * Posts Controller
 *
 * @property Post $Post
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class GalleriesController extends AppController {

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
		$this->Gallery->recursive = 0;
		$this->set('galleries', $this->Paginator->paginate());
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
			$this->Gallery->create();
			
			$this->request->data['Gallery']['slug']=Inflector::slug($this->request->data['Gallery']['name'],'-');
			if ($this->Gallery->save($this->request->data)) {
				$this->Session->setFlash(__('The gallery has been saved.'));
				return $this->redirect(array('action' => 'add_photos',$this->Gallery->id));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'));
			}
		}
		$user_id=1;
		// $categories = $this->Post->Category->find('list');
		
		$this->set(compact('user_id'));
	}

	
	public function add_photos($gallery_id=null){
		$this->onlyGroup(1);
		$this->layout='admin';
		if($gallery_id!=null){
			if ($this->request->is('post')) {
				$this->loadModel('GalleryPhoto');
				$this->GalleryPhoto->create();
				if(is_uploaded_file($this->request->data['GalleryPhoto']['photo']['tmp_name']) && !empty($this->request->data['GalleryPhoto']['photo']['tmp_name'])) {
					$path_info = pathinfo($this->request->data['GalleryPhoto']['photo']['name']);
					chmod ($this->request->data['GalleryPhoto']['photo']['tmp_name'], 0644);
					$photo=time().mt_rand().".".$path_info['extension'];
					// $fullpath= WWW_ROOT.'img'.DS.'posts'.DS.'main_img';
					$fullpath= WWW_ROOT.'img'.DS.'galleries';
					if(!is_dir($fullpath)) {
						mkdir($fullpath, 0777, true);
					}
					move_uploaded_file($this->request->data['GalleryPhoto']['photo']['tmp_name'],$fullpath.DS.$photo);
					$this->request->data['GalleryPhoto']['photo']=$photo;
					
				} else {
					unset($this->request->data['GalleryPhoto']['photo']);
				}
				$this->request->data['GalleryPhoto']['gallery_id']=$gallery_id;
				$this->GalleryPhoto->save($this->request->data);
			}
		}


		$this->set(compact('gallery_id'));
	}
	
	public function view_photos($gallery_id=null){
		$this->onlyGroup(1);
		$this->layout='admin';
		
		$gallery_photos=array();
		$gallery=array();
		if($gallery_id!=null){
			$this->loadModel('GalleryPhoto');
			$gallery=$this->Gallery->findById($gallery_id);
			
			
			if($gallery!=null){
				$gallery_photos=$this->GalleryPhoto->find('all',array(
					'conditions'=>array(
						'GalleryPhoto.gallery_id'=>$gallery_id
					)
				));
			}
		}

		$this->set(compact('gallery_id','gallery_photos','gallery'));
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
		if (!$this->Gallery->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$this->request->data['Gallery']['slug']=Inflector::slug($this->request->data['Gallery']['name'],'-');
			
			if ($this->Gallery->save($this->request->data)) {
				$this->Session->setFlash(__('The gallery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gallery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Gallery.' . $this->Gallery->primaryKey => $id));
			$this->request->data = $this->Gallery->find('first', $options);
		
		
		}
	
		
	}

	public function gallery($slug=null) {
		$this->layout='dii';
		
		$gallery = $this->Gallery->findBySlug($slug);
		$pagina_actual='/galerias';
		
		
		
		
		
		$this->set(compact('gallery','pagina_actual'));
		
	}
	
	public function galleries() {
		$this->layout='dii';
		
		$galleries=$this->Gallery->find('all');
		$pagina_actual='/galerias';
		$this->set(compact('galleries','pagina_actual'));
		
	}
	
	public function dropzone(){
		$this->layout='admin';
		
		
		if ($this->request->is('post')) {
			debug($this->request->data);
			$datos=serialize($this->request->data);
			
		}
	}
	
	
	
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($gallery_id = null) {
		$this->onlyGroup(1);
		$this->Gallery->id = $gallery_id;
		if (!$this->Gallery->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->allowMethod('post', 'delete');
		$this->loadModel('GalleryPhoto');
		$photos=$this->GalleryPhoto->find('all',array(
			'conditions'=>array(
				'GalleryPhoto.gallery_id'=>$gallery_id
			)
		));
		
		$dir = new Folder(WWW_ROOT . '/img/galleries');
		foreach($photos as $photo){
			$this->GalleryPhoto->delete($photo['GalleryPhoto']['id']);
			
			$files = $dir->find($photo['GalleryPhoto']['photo'], true);

			foreach ($files as $file) {
				$file = new File($dir->pwd() . DS . $file);
				$contents = $file->read();
				$file->delete();
				$file->close();
				break;
			}
		}
		if ($this->Gallery->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}



/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete_photo($photo_id = null) {
		$this->onlyGroup(1);
		
		$this->loadModel('GalleryPhoto');
		$this->GalleryPhoto->id = $photo_id;
		if (!$this->GalleryPhoto->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$photo = $this->GalleryPhoto->findById($photo_id);
		
		// $dir = new Folder(WWW_ROOT.'/img/categories');
		// $file = new File($dir->pwd() . DS . $photo['GalleryPhoto']['photo']);
		
		$dir = new Folder(WWW_ROOT . '/img/galleries');
		$files = $dir->find($photo['GalleryPhoto']['photo'], true);
		// debug($files);
		foreach ($files as $file) {
			$file = new File($dir->pwd() . DS . $file);
			$contents = $file->read();
			$file->delete();
			$file->close();
		}
		
		
		$this->request->allowMethod('post', 'delete');
		if ($this->GalleryPhoto->delete()) {
			$this->Session->setFlash(__('Photo borrada exitosamente'));
		} else {
			$this->Session->setFlash(__('Error en borrar la foto'));
		}
		return $this->redirect(array('action' => 'view_photos',$photo['GalleryPhoto']['gallery_id']));
	}
}