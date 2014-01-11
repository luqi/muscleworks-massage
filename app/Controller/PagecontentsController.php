<?php
App::uses('AppController', 'Controller');
/**
 * Pagecontents Controller
 *
 * @property Pagecontent $Pagecontent
 */
class PagecontentsController extends AppController {

public $helpers = array('Tinymce');

/**Drafts**/

/**
 * index method
 *
 * @return void
 */

  
	public function index() {
		$this->Pagecontent->recursive = 0;
		$this->set('pagecontents', $this->paginate());
		$this->layout="admin";
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pagecontent->exists($id)) {
			throw new NotFoundException(__('Invalid pagecontent'));
		}
		$options = array('conditions' => array('Pagecontent.' . $this->Pagecontent->primaryKey => $id));
		$this->set('pagecontent', $this->Pagecontent->find('first', $options));
		$this->layout="admin";
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	$this->layout="admin";
		if ($this->request->is('post')) {
			$this->Pagecontent->create();
			if ($this->Pagecontent->save($this->request->data)) {
				$this->Session->setFlash(__('The pagecontent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pagecontent could not be saved. Please, try again.'));
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
	$this->layout="admin";
		if (!$this->Pagecontent->exists($id)) {
			throw new NotFoundException(__('Invalid pagecontent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Pagecontent->save($this->request->data)) {
				$this->Session->setFlash(__('The pagecontent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pagecontent could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Pagecontent.' . $this->Pagecontent->primaryKey => $id));
			$this->request->data = $this->Pagecontent->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Pagecontent->id = $id;
		if (!$this->Pagecontent->exists()) {
			throw new NotFoundException(__('Invalid pagecontent'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pagecontent->delete()) {
			$this->Session->setFlash(__('Pagecontent deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Pagecontent was not deleted'));
		$this->redirect(array('action' => 'index'));
		$this->layout="admin";
	}
}
