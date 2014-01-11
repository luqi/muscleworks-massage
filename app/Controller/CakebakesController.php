<?php
App::uses('AppController', 'Controller');
/**
 * Cakebakes Controller
 *
 * @property Cakebake $Cakebake
 */
class CakebakesController extends AppController {
	
	public $components = array('Session');

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Tinymce');

/**
 * index method
 *
 * @return void
 */
	
	public function index0() {
		$this->layout='default'; 
		$this->set('cakebakes', $this->Cakebake->find('all', array(
        'order' => array('Cakebake.id' => 'desc'))));
	}
	
	public function index() {
		$this->layout='admin'; 
		//$this->Cakebake->recursive = 0;
		$this->set('cakebakes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->layout='admin';  //app/views/layouts/admin_layout.ctp
		if (!$this->Cakebake->exists($id)) {
			throw new NotFoundException(__('Invalid cakebake'));
		}
		$options = array('conditions' => array('Cakebake.' . $this->Cakebake->primaryKey => $id));
		$this->set('cakebake', $this->Cakebake->find('first', $options));
	}

	/**
	 * view0 method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
		public function view0($id = null) {
			$this->layout='default'; //app/views/layouts/admin_layout.ctp
			if (!$this->Cakebake->exists($id)) {
				throw new NotFoundException(__('Invalid cakebake'));
			}
			$options = array('conditions' => array('Cakebake.' . $this->Cakebake->primaryKey => $id));
			$this->set('cakebake', $this->Cakebake->find('first', $options));
		}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout='admin'; //app/views/layouts/admin_layout.ctp
		if ($this->request->is('post')) {
			$this->Cakebake->create();
			if ($this->Cakebake->save($this->request->data)) {
				$this->Session->setFlash(__('The blog has been saved'),'message');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog could not be saved. Please, try again.'),'error');
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
		$this->layout='admin'; //app/views/layouts/admin_layout.ctp
		if (!$this->Cakebake->exists($id)) {
			throw new NotFoundException(__('Invalid blog'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cakebake->save($this->request->data)) {
				$this->Session->setFlash(__('The blog has been saved','message'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog could not be saved. Please, try again.'),'error');
			}
		} else {
			$options = array('conditions' => array('Cakebake.' . $this->Cakebake->primaryKey => $id));
			$this->request->data = $this->Cakebake->find('first', $options);
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
		$this->layout='admin'; //app/views/layouts/admin_layout.ctp
		$this->Cakebake->id = $id;
		if (!$this->Cakebake->exists()) {
			throw new NotFoundException(__('Invalid blog'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cakebake->delete()) {
			$this->Session->setFlash(__('Blog deleted'),'message');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Blog was not deleted'),'error');
		$this->redirect(array('action' => 'index'));
	}

/**
 * a_index method
 *
 * @return void
 */
	public function a_index() {
		$this->layout='admin'; //app/views/layouts/admin_layout.ctp
		$this->Cakebake->recursive = 0;
		$this->set('cakebakes', $this->paginate());
	}

/**
 * a_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function a_view($id = null) {
		$this->layout='admin'; //app/views/layouts/admin_layout.ctp
		if (!$this->Cakebake->exists($id)) {
			throw new NotFoundException(__('Invalid blog'));
		}
		$options = array('conditions' => array('Cakebake.' . $this->Cakebake->primaryKey => $id));
		$this->set('cakebake', $this->Cakebake->find('first', $options));
	}

/**
 * a_add method
 *
 * @return void
 */
	public function a_add() {
		$this->layout='admin'; //app/views/layouts/admin_layout.ctp
		if ($this->request->is('post')) {
			$this->Cakebake->create();
			if ($this->Cakebake->save($this->request->data)) {
				$this->Session->setFlash(__('The blog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog could not be saved. Please, try again.'));
			}
		}
	}

/**
 * a_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function a_edit($id = null) {
		$this->layout='admin'; //app/views/layouts/admin_layout.ctp
		if (!$this->Cakebake->exists($id)) {
			throw new NotFoundException(__('Invalid blog'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Cakebake->save($this->request->data)) {
				$this->Session->setFlash(__('The blog has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The blog could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cakebake.' . $this->Cakebake->primaryKey => $id));
			$this->request->data = $this->Cakebake->find('first', $options);
		}
	}

/**
 * a_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function a_delete($id = null) {
		$this->layout='admin'; //app/views/layouts/admin_layout.ctp
		$this->Cakebake->id = $id;
		if (!$this->Cakebake->exists()) {
			throw new NotFoundException(__('Invalid blog'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Cakebake->delete()) {
			$this->Session->setFlash(__('Blog deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Blog was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
