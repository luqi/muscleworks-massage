<?php
class PricesController extends AppController {
public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }      

public function index(){
        $this->Price->recursive = 0;
        $this->set('prices', $this->paginate());
        }
      public function add(){
          $this->layout="admin";
          if ($this->request->is('post')) {
			$this->Price->create();
			if ($this->Price->save($this->request->data)) {
				
				$this->redirect(array('action' => 'price_list'));
			} else {
				$this->Session->setFlash(__('The new price could not be saved. Please, try again.'));
			}
		}
      }
      
       public function view($id = null) {
        $this->Price->id = $id;
        $this->set('price', $this->Price->read());
     
				
    }
    
    public function price_list(){
        $this->Price->recursive = 0;
        $this->set('prices', $this->paginate());
        $this->layout="admin";
        }
        
    	public function edit($id = null) {
             $this->layout="admin";
		if (!$this->Price->exists($id)) {
			throw new NotFoundException(__('Invalid Price'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                    
			if ($this->Price->save($this->request->data)) {
				
				$this->redirect(array('action' => 'price_list'));
			} else {
				$this->Session->setFlash(__('The price could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Price.' . $this->Price->primaryKey => $id));
			$this->request->data = $this->Price->find('first', $options);
		}
	}
        
        	public function delete($id = null) {
		$this->Price->id = $id;
		if (!$this->Price->exists()) {
			throw new NotFoundException(__('Invalid Price'));
		}
		
		if ($this->Price->delete()) {
			$this->Session->setFlash(__('Price is deleted'));
			$this->redirect(array('action' => 'price_list'));
			
		}
		$this->Session->setFlash(__('Price was not deleted'));
		$this->redirect(array('action' => 'price_list'));
	}
}


?>
