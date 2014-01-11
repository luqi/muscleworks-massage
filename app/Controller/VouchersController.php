<?php

class VouchersController extends AppController {

   var $uses = array('Voucher','Price','Pagecontent');
            public $paginate = array(
        'limit' => 25,
        'order' => array(
            'Voucher.id' => 'desc'
        )
    );
   public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('gvinformation','preview','send_instruction','back_format','confirmation','change_payment','generate_voucher','view','cacheInfo','create_voucher','view_1','print_voucher','confirmation_cash');
    }

 public function index() {
        $this->Voucher->recursive = 0;
          
            $this->set('vouchers',$this->paginate() );

   				$this->layout="admin";
    }

    public function view($id = null) {
$this->Voucher->id = $id;
        
$this->set('voucher', $this->Voucher->read());       
				$this->layout="admin";
     
				
    }
    
    public function expire(){
      $this->Voucher->query("UPDATE `vouchers` SET `status`='expired' WHERE DATE_SUB(CURDATE(), INTERVAL 90 DAY)>=date_purchase AND `status`='unredeemed'");  
         $this->Session->setFlash(__('The status of expired vouchers have been changed.'));
    $this->redirect(array('controller'=>'vouchers','action' => 'index'));
      
    }
    
    public function hardcopy(){
        $this->set('allPrices', $this->Price->find('all'));
        date_default_timezone_set('Australia/Melbourne');
        $time = date('Y/m/d');
        $this->layout="admin";
        if ($this->request->is('post')) {
            $this->Voucher->create();
            $info = array(
               
                'price'=>  $this->request->data['Voucher']['price'],
                'date_purchase'=>$time,
               'from_name' => strtoupper($this->request->data['Voucher']['from_name']),
                'phoneNumber_1'=>$this->request->data['Voucher']['phoneNumber_1'],
                'from_email'=>$this->request->data['Voucher']['from_email'],
                'to_name'=>strtoupper($this->request->data['Voucher']['to_name']),
                'message'=>$this->request->data['Voucher']['message'],
                'payment_method'=>$this->request->data['Voucher']['payment_method'],
                    );
            if ($this->Voucher->save($info)) {
               if($id==null){
                $lastID = $this->Voucher->getLastInsertId();
                $uuid = Security::hash($lastID);
               $info['id']=$lastID;
                $info['UUID'] = $uuid;
                $this->Voucher->save($info);
                $this->Session->setFlash(__('The voucher has been saved, if you want to send email, please click \'View\'.'));
                $this->redirect(array('action'=>'index'));
                }              
            } else{
		
		}
	}
    }

    public function sendEmail($id = null) {
        App::uses('CakeEmail', 'Network/Email');
 
        $this->Voucher->id = $id;
        if (!$this->Voucher->exists()) {
            throw new NotFoundException(__("Invalid Voucher"));
        }
        $aVoucher = $this->Voucher->find('first', array('conditions' => array('Voucher.id' => $id)));
		$this->set('address', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24'))));
 
        $aAddress = $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24')));

	$this->set('phone', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '25'))));
        $aPhone =  $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '25')));
$this->set('details', $this->Voucher->find('first', array('conditions' => array('Voucher.id' => $id))));
        $secret = Security::cipher($aVoucher['Voucher']['id'], 'Voucher');
               $this->loadModel('Pagecontent');
        		$this->set('address', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24'))));
        $aVoucher['Voucher']['id'] = $secret;
        $email = new CakeEmail();
        $email->config('default');
        $email->emailFormat('html');
        $email->template('html_email');
        $email->from('ieteam04@gmail.com');
        $email->to($aVoucher['Voucher']['from_email']);
        $email->viewVars(array('aVoucher' => $aVoucher,'aPhone'=>$aPhone,'aAddress'=>$aAddress));
        $email->subject('Your GIFT VOUCHER from MUSCLEWORKS MASSAGE');
        $email->sendAs = 'html';
        $email->charset = 'utf-8';
        $email->send();
       
    }

 public function send_bankinstructions($id=null){
      App::uses('CakeEmail', 'Network/Email');
 
        $this->Voucher->id = $id;
        if (!$this->Voucher->exists()) {
            throw new NotFoundException(__("Invalid Voucher"));
        }
        $aVoucher = $this->Voucher->find('first', array('conditions' => array('Voucher.id' => $id)));
		$this->set('address', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24'))));
 
        $aAddress = $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24')));

	$this->set('phone', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '25'))));
        $aPhone =  $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '25')));
$this->set('details', $this->Voucher->find('first', array('conditions' => array('Voucher.id' => $id))));
        $secret = Security::cipher($aVoucher['Voucher']['id'], 'Voucher');
               $this->loadModel('Pagecontent');
        		$this->set('address', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24'))));
        $aVoucher['Voucher']['id'] = $secret;
        $email = new CakeEmail();
        $email->config('default');
        $email->emailFormat('html');
        $email->template('instruction');
        $email->from('ieteam04@gmail.com');
        $email->to($aVoucher['Voucher']['from_email']);
        $email->viewVars(array('aVoucher' => $aVoucher,'aPhone'=>$aPhone,'aAddress'=>$aAddress));
        $email->subject('Your GIFT VOUCHER from MUSCLEWORKS MASSAGE');
        $email->sendAs = 'html';
        $email->charset = 'utf-8';
        $email->send();
       
    }
    
    public function send_instruction($id=null){
        App::uses('CakeEmail', 'Network/Email');
        $aVoucher= $this->Voucher->find('first', array('order'=>array('Voucher.id DESC')));
	$this->set('phone', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '25'))));
        $aPhone =  $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '25')));

$this->set('address', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24'))));
 
        $aAddress = $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24')));
       
        $email = new CakeEmail();
        $email->config('default');
        $email->emailFormat('html');
        $email->template('instruction');
        $email->from('ieteam04@gmail.com');
        $email->to($aVoucher['Voucher']['from_email']);
        $email->viewVars(array('aVoucher' => $aVoucher,'aPhone'=>$aPhone,'aAddress'=>$aAddress));
        $email->subject('Muscleworks Massage Payment Instruction ON HOLD - Gift Voucher');
        $email->sendAs = 'html';
        $email->charset = 'utf-8';
        $email->send();
    }

   

  public function preview($id=NULL) {
	 $this->set('allPrices', $this->Price->find('all'));		
        date_default_timezone_set('Australia/Melbourne');
        $time = date('Y/m/d');
        if (array_key_exists('voucherID', $this->params['url'])) {
            $id = $this->params['url']['voucherID'];
        }
        if ($this->request->is('post')) {
            if(!$this->Voucher->exists($id)){
                $this->Voucher->create();
            }
            $info = array(
                'id'=>$id,
                'price'=>  $this->request->data['Voucher']['price'],
                'date_purchase'=>$time,
               'from_name' => strtoupper($this->request->data['Voucher']['from_name']),
                'phoneNumber_1'=>$this->request->data['Voucher']['phoneNumber_1'],
                'from_email'=>$this->request->data['Voucher']['from_email'],
                
                'to_name'=>strtoupper($this->request->data['Voucher']['to_name']),
              
            
                'message'=>$this->request->data['Voucher']['message'],
                    );
            
            if ($this->Voucher->save($info)) {
                if ($id == Null) {
                    $lastID = $this->Voucher->getLastInsertId();
                    $uuid = Security::hash($lastID);
                    $info['id'] = $lastID;
                    $info['UUID'] = $uuid;
                    $this->Voucher->save($info);
                } else {
                    $lastID = $id;
                }
                $this->set('voucher_data',  $this->Voucher->find('first',  array('conditions'=>array('Voucher.id'=>$lastID))));
                $this->render('previewVoucher');
            } else {
                $this->Session->setFlash(__('The voucher could not be saved. Please, try again.'));
				 $this->render('gvinformation');
            }
        }
    }
    
    public function confirmation_cash($id=null){
        
        $this->set('voucher_data',  $this->Voucher->find('first',  array('conditions'=>array('Voucher.id'=>$id))));
        $this->Voucher->query ("UPDATE `vouchers` SET `payment_method`='Cash' WHERE id=$id");
        
    }
  public function print_voucher($id=null){
        $id = $this->request->query['id'];
        $this->set('voucher_data', $this->Voucher->find('first', array('conditions'=>array('Voucher.id'=>$id))));
         
        $this->layout='print';
        
    }   
 public function cacheInfo($id=null)
    {
                                   $id = $this->request->query['id'];

        $this->set('voucher_data',  $this->Voucher->find('first',  array('conditions'=>array('Voucher.id'=>$id))));

        $cacheVoucher = $this->Voucher->find('first',  array('conditions'=>array('Voucher.id'=>$id)));

       $query = "UPDATE `vouchers` SET `payment`='paid',`payment_method`='PayPal' WHERE `id` =". $id;
        $this->Voucher->query($query);
        
       // debug($cacheVoucher);
          App::uses('CakeEmail', 'Network/Email');

        $this->Voucher->id = $id;
        if (!$this->Voucher->exists()) {
            throw new NotFoundException(__("Invalid Voucher"));
        }
        $aVoucher = $this->Voucher->find('first', array('conditions' => array('Voucher.id' => $id)));

$this->set('address', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24'))));
 
        $aAddress = $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24')));

	$this->set('phone', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '25'))));

        $aPhone =  $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '25')));

$this->set('details', $this->Voucher->find('first', array('conditions' => array('Voucher.id' => $id))));
        $email = new CakeEmail();
        $email->config('default');
        $email->emailFormat('html');
        $email->template('html_email');
        $email->from('ieteam04@gmail.com');
        $email->to($aVoucher['Voucher']['from_email']);
        $email->viewVars(array('aVoucher' => $aVoucher,'aPhone'=>$aPhone,'aAddress'=>$aAddress));
        $email->subject('Your GIFT VOUCHER from MUSCLEWORKS MASSAGE');
        $email->sendAs = 'html';
        $email->charset = 'utf-8';
        $email->send();  }
    
    public function back_format($id){
      
        if(!$this->Voucher->exists($id)){
            throw new NotFoundException(__('Invalid Voucher'));
        }
       
            $this->set('vouchers',  $this->Voucher->find('first', array('order'=>array('Voucher.id DESC'))));
$lastV = $this->Voucher->find('first', array('order'=>array('Voucher.id DESC')));
    

    $this->set('allPrices', $this->Price->find('all'));
            $this->render('back_format');
      
      
    }


    
	public function gvinformation() {
            $this->set('allPrices', $this->Price->find('all'));
	}
	
      public function view1($id = null) {
	
       $this->set('voucher',  $this->Voucher->find('first',  array('conditions'=>array('Voucher.UUID'=>$id))));
				$this->layout="admin";
    }
    
     	public function edit($id = null) {
				$this->layout="admin";
		if (!$this->Voucher->exists($id)) {
			throw new NotFoundException(__('Invalid voucher'));
		}
                $this->set('id',$id);
		if ($this->request->is('post') || $this->request->is('put')) {
            
			if ($this->Voucher->save($this->request->data)) {
                     
         $this->Session->setFlash(__('The voucher has been updated.'));
        
	      $this->redirect(array('controller'=>'vouchers','action' => 'index'));    
			} else {
				$this->Session->setFlash(__('The voucher could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Voucher.' . $this->Voucher->primaryKey => $id));
			$this->request->data = $this->Voucher->find('first', $options);
		}
	}
        




function archive(){
    
$this->Voucher->query("INSERT INTO archivevouchers SELECT * FROM vouchers WHERE `payment`='unpaid' AND DATE_SUB(CURDATE(), INTERVAL 5 DAY)>=date_purchase");
    $this->Voucher->query("DELETE FROM `vouchers` WHERE `payment`='unpaid' AND DATE_SUB(CURDATE(), INTERVAL 5 DAY)>=date_purchase"); 

    
            


     $this->Session->setFlash(__('The unpaid vouchers have been archived.'));
    $this->redirect(array('controller'=>'vouchers','action' => 'index'));
    
}

function archive_paid(){
    $this->Voucher->query('INSERT INTO taxvouchers SELECT * FROM vouchers WHERE payment=\'paid\' && status=\'redeemed\' OR status=\'expired\'');
    $this->Voucher->query('DELETE  FROM vouchers WHERE payment=\'paid\' && status=\'redeemed\' OR status=\'expired\''); 
         $this->Session->setFlash(__('The paid vouchers have been archived.'));
    $this->redirect(array('controller'=>'vouchers','action' => 'index'));  
}







function create_voucher($id=null){

   $this->set('vouchers',  $this->Voucher->find('first',  array('conditions'=>array('Voucher.UUID'=>$id))));

      $this->layout='print';
}

function create_voucher1($id=null){

$this->Voucher->id = $id;
        $this->set('vouchers', $this->Voucher->read());

      $this->layout='print';
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
         $this->set('vouchers',$this->paginate());
        $this->set('vouchers',null);

        if (!empty($this->params->query['keywords'])){
        $cond=array('OR'=>array("Voucher.id LIKE '%$keywords%'","Voucher.from_name LIKE '%$keywords%'","Voucher.phoneNumber_1 LIKE '%$keywords%'", "Voucher.date_purchase LIKE '%$keywords%'","Voucher.to_name LIKE '%$keywords%'","Voucher.date_purchase LIKE '%$keywords%'","Voucher.payment LIKE '%$keywords%'","Voucher.status LIKE '%$keywords%'","Voucher.payment_method LIKE '%$keywords%'","Voucher.price LIKE '%$keywords%'","Voucher.from_email LIKE '%$keywords%'")  );
        
            //$conditions['User.last_name LIKE'] = '%'.trim($params['keywords']).'%';
        }
        $count = $this->Voucher->find('count', array('conditions' => $cond));
        $this->set('count',$count);
        //$this->request->data['User'] = $params;
        $this->set('as',$this->paginate($cond));
    }

}
?>