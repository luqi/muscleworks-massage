<?php
class TaxvouchersController extends AppController {
   var $uses = array('Taxvoucher', 'Voucher');
           public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Taxvoucher.id' => 'desc'
        )
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }
    
    public function index(){
        $this->Taxvoucher->recursive = 0;
        $this->set('taxvouchers', $this->paginate());
        $this->layout="admin";
    }
  function select(){
      $this->layout = 'admin';   
    }
    public function delete_year(){
    $this->Taxvoucher->query('DELETE  FROM taxvouchers WHERE DATE_SUB(CURDATE(), INTERVAL 5 YEAR)>=date_purchase AND payment=\'paid\''); 
    $this->Session->setFlash(__('The paid vouchers have been deleted.'));
    $this->redirect(array('action' => 'index'));    
     }
      function view_pdf() 
     { 
    $conditions = array('order' => 'id ASC'); 
    $conditions1= array('Voucher.payment'=>'paid');
    $this->set('taxvouchers', $this->Taxvoucher->find('all',$conditions)); 
     $this->set("vouchers",$this->Voucher->find("all",array('conditions'=>$conditions1,'order'=>'Voucher.date_purchase ASC','field'=>array('Voucher.from_name','Voucher.date_purchase'))));
    $this->layout = 'pdf'; //this will use the pdf.ctp layout 
    $this->render(); 
} 

    public function view($id = null) {
        $this->Taxvoucher->id = $id;
        $this->set('voucher', $this->Taxvoucher->read());
     
				
    }
    

    
        
    public function edit($id = null) {
				$this->layout="admin";
		if (!$this->Taxvoucher->exists($id)) {
			throw new NotFoundException(__('Invalid voucher'));
		}
$this->set('id',$id);
		if ($this->request->is('post') || $this->request->is('put')) {
                    
			if ($this->Taxvoucher->save($this->request->data)) {
			
                        $this->Taxvoucher->query('SELECT * FROM taxvouchers where status=\'unredeemed\'');
                        $this->Taxvoucher->query("UPDATE `taxvouchers` SET `date_purchase`= now() WHERE `status`= 'unredeemed'");	 
                        $this->Taxvoucher->query('INSERT INTO vouchers SELECT * FROM taxvouchers WHERE status=\'unredeemed\'');
                        $this->Taxvoucher->query('DELETE  FROM taxvouchers WHERE status=\'unredeemed\''); 
		        $this->redirect(array('controller'=>'vouchers','action' => 'index'));
                        $this->Session->setFlash(__('The expired voucher has been changed'));
			} else {
		        $this->Session->setFlash(__('The voucher could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Taxvoucher.' . $this->Taxvoucher->primaryKey => $id));
			$this->request->data = $this->Taxvoucher->find('first', $options);
		}
	}
        
public function pdf()
{
    	
        $this->layout="admin";

    date_default_timezone_set('Australia/Melbourne');
    
    if($this->request->is('post'))
    {
        $this->Taxvoucher->create();
       
        
        $from = $this->request->data['Taxvoucher']['from'];
         $to = $this->request->data['Taxvoucher']['to'];
         
         $this->set('from',$from);
         $this->set('to',$to);
         
         $from = str_replace('/','-',$from);
         $start = strtotime($from);
         $f = date('Y-m-d',strtotime($from));
         
         $to = str_replace('/','-',$to);
         $start = strtotime($to);
         $t = date('Y-m-d',strtotime($to));
         
         $time2 = date('Y/m/d');
         
             $conditions = array('Taxvoucher.date_purchase BETWEEN ? AND ?' => array($f,$t));
             $conditions1= array('Voucher.date_purchase BETWEEN ? AND ?' => array($f,$t),'Voucher.payment'=>'paid');
             $this->set("taxvouchers",$this->Taxvoucher->find("all",array('conditions'=>$conditions,'order'=>'Taxvoucher.date_purchase ASC','field'=>array('Taxvoucher.from_name','Taxvoucher.date_purchase'))));
            $this->set("vouchers",$this->Voucher->find("all",array('conditions'=>$conditions1,'order'=>'Voucher.date_purchase ASC','field'=>array('Voucher.from_name','Voucher.date_purchase'))));
             $test = $this->Taxvoucher->find("all",array('conditions'=>$conditions,'order'=>'Taxvoucher.date_purchase ASC','field'=>array('Taxvoucher.from_name','Taxvoucher.date_purchase')));

      $this->layout = 'pdf'; //this will use the pdf.ctp layout 
    $this->render(); 

        
    }
    
    
    
    
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
         $this->set('taxvouchers',$this->paginate());
        $this->set('taxvouchers',null);

        if (!empty($this->params->query['keywords'])){
        $cond=array('OR'=>array("Taxvoucher.id LIKE '%$keywords%'","Taxvoucher.from_name LIKE '%$keywords%'","Taxvoucher.phoneNumber_1 LIKE '%$keywords%'", "Taxvoucher.date_purchase LIKE '%$keywords%'","Taxvoucher.to_name LIKE '%$keywords%'","Taxvoucher.date_purchase LIKE '%$keywords%'","Taxvoucher.payment LIKE '%$keywords%'","Taxvoucher.status LIKE '%$keywords%'","Taxvoucher.payment_method LIKE '%$keywords%'","Taxvoucher.price LIKE '%$keywords%'","Taxvoucher.from_email LIKE '%$keywords%'")  );
        
            //$conditions['User.last_name LIKE'] = '%'.trim($params['keywords']).'%';
        }
        $count = $this->Taxvoucher->find('count', array('conditions' => $cond));
        $this->set('count',$count);
        //$this->request->data['User'] = $params;
        $this->set('as',$this->paginate($cond));
    
     
 
        
}
}
?>