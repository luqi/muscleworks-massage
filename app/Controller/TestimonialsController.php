<?php
App::uses('AppController', 'Controller');
/**
 * Testimonials Controller
 *
 * @property Testimonial $Testimonial
 */
class TestimonialsController extends AppController {
            public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Testimonial.id' => 'desc'
        )
    ); 

  
 public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

/**
 * index method
 *
 * @return void
 */         var $uses = array('Testimonial','Service'); 

	    public function index0() {
                
		$this->set('testimonials', $this->Testimonial->find('all',array(
                    'order'=>array('Testimonial.id'=>'desc'))));
                $this->set('testimonials',$this->Testimonial->find('all',array('conditions'=>array('status'=>"Published"))));
	}
        
 
        public function index() {
         
		$this->Testimonial->recursive = 0;
		
                $this->set('testimonials', $this->paginate());
            $this->layout='admin';
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
		if (!$this->Testimonial->exists($id)) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		$options = array('conditions' => array('Testimonial.' . $this->Testimonial->primaryKey => $id));
		$this->set('testimonial', $this->Testimonial->find('first', $options));
	}
        


/**
 * add method
 *
 * @return void
 */
	public function add() {
               $this->set('services', $this->Service->find('all'));
                date_default_timezone_set('Australia/Melbourne');
                $time = date('Y/m/d');
				
			
  
		if ($this->request->is('post')) {
			$this->Testimonial->create();
                        
                         $info = array(
                         'Name'=>  $this->request->data['Testimonial']['Name'], 
                           'content'=>  $this->request->data['Testimonial']['content'],
                              'Service'=>  $this->request->data['Testimonial']['Service'],
				'consent' =>  $this->request->data['Testimonial']['consent'],			  
				'created' => date('d/m/Y') 				
                              
                       );
                 
			if ($this->Testimonial->save($info)) {
				 $lastID=  $this->Testimonial->getLastInsertId();
                                 $this->set('testimonial_data',  $this->Testimonial->find('first',  array('conditions'=>array('Testimonial.id'=>$lastID))));
                                 
                                 //$this->sendEmail();
                                 $this->redirect(array('controller'=>'pages','action' => 'confirmation_testimonial'));
			}else{
			
			}
		} 
	

                //$this->sendEmail();
	}
/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
             $this->set('services', $this->Service->find('all'));
			$this->layout='admin'; 
		if (!$this->Testimonial->exists($id)) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                    
			if ($this->Testimonial->save($this->request->data)) {
                            $this->set('testimonials',  $this->Testimonial->find('first', array('order'=>array('Testimonial.id DESC')))); 
                            $this->set('services', $this->Service->find('all'));
                            $this->Session->setFlash(__('The Testimonial has been saved'));
			  $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The testimonial could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Testimonial.' . $this->Testimonial->primaryKey => $id));
			$this->request->data = $this->Testimonial->find('first', $options);                        

                        $this->set('consent', $this->request->data['Testimonial']['consent']);
                         $this->set('selected_service', $this->request->data['Testimonial']['Service']);
                         $this->set('Name', $this->request->data['Testimonial']['Name']);
                        $this->set('services', $this->Service->find('all', array('fields' => array('id','type'))));
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
			$this->layout='admin'; 
		$this->Testimonial->id = $id;
		if (!$this->Testimonial->exists()) {
			throw new NotFoundException(__('Invalid testimonial'));
		}
                
		if ($this->Testimonial->delete()) {
                    $this->Session->setFlash(__('Testimonial deleted'));
						$this->redirect(array('action' => 'index'));
		}
				$this->redirect(array('action' => 'index'));
	}



public function sendEmail($id=NULL){
    App::uses('CakeEmail','Network/Email');
    
    $this->Testimonial->id=$id;
         
    $aTestimonial=$this->Testimonial->find('first',array('condition'=>array('Testimonial.id'=>$id)));
    
    
      $email=new CakeEmail();
      $email->config('default');
      $email->emailFormat('html');
      $email->template('default');
      $email->from('zhangluqi16@gmail.com');
      $email->to('li-yichen@hotmail.com');
      $email->subject('New Testimonial Received From MuscelWorks');       
      $email->send();
    }
}
        
