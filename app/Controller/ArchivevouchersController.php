<?php
class ArchivevouchersController extends AppController {
         public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Archivevoucher.id' => 'desc'
        )
    );
 public function index() {
        $this->Archivevoucher->recursive = 0;
       
       $this->set('archivevouchers',$this->paginate());
        
   				$this->layout="admin";
    }
    
    public function edit($id = null) {
				$this->layout="admin";
		if (!$this->Archivevoucher->exists($id)) {
			throw new NotFoundException(__('Invalid voucher'));
		}
             $this->set('id',$id);
		if ($this->request->is('post') || $this->request->is('put')) {
                    
			if ($this->Archivevoucher->save($this->request->data)) {
				 $this->Archivevoucher->query('INSERT INTO vouchers SELECT * FROM archivevouchers where payment=\'paid\'');
                                 $this->Archivevoucher->query('DELETE  FROM archivevouchers WHERE payment=\'paid\''); 
								  $this->Session->setFlash(__('The voucher has been moved to current voucher list.'));
				$this->redirect(array('controller'=>'archivevouchers','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The voucher could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Archivevoucher.' . $this->Archivevoucher->primaryKey => $id));
			$this->request->data = $this->Archivevoucher->find('first', $options);
		}
	}
      
     public function delete_month(){
    $this->Archivevoucher->query('DELETE  FROM archivevouchers WHERE DATE_SUB(CURDATE(), INTERVAL 3 MONTH)>=date_purchase && payment=\'unpaid\''); 
    $this->Session->setFlash(__('The expired and unpaid vouchers have been deleted.'));
    $this->redirect(array('controller'=>'archivevouchers','action' => 'index'));
     }
     
     public function search()
    {
    
$this->layout='admin';
       // $this->result();
       //$keywords = NULL;
       $keywords=$this->params->query['keywords']; //get keyword from querystring//
       
        $this->set('keywords',$keywords);
      //  $conditions = array();
      $cond = array();
      //  $params = $this->params['named'];
         $this->set('archivevouchers',$this->paginate());
        $this->set('archivevouchers',null);

        if (!empty($this->params->query['keywords'])){
        $cond=array('OR'=>array("Archivevoucher.id LIKE '%$keywords%'","Archivevoucher.from_name LIKE '%$keywords%'","Archivevoucher.phoneNumber_1 LIKE '%$keywords%'", "Archivevoucher.date_purchase LIKE '%$keywords%'","Archivevoucher.to_name LIKE '%$keywords%'","Archivevoucher.date_purchase LIKE '%$keywords%'","Archivevoucher.payment LIKE '%$keywords%'","Archivevoucher.status LIKE '%$keywords%'","Archivevoucher.payment_method LIKE '%$keywords%'","Archivevoucher.price LIKE '%$keywords%'","Archivevoucher.from_email LIKE '%$keywords%'")  );
        
            //$conditions['User.last_name LIKE'] = '%'.trim($params['keywords']).'%';
        }
        $count = $this->Archivevoucher->find('count', array('conditions' => $cond));
        $this->set('count',$count);
        //$this->request->data['User'] = $params;
        $this->set('as',$this->paginate($cond));
    
     
 
        
}
        
}
