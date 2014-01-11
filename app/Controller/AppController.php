<?php

class AppController extends Controller {
    public $components = array(
        'Session',
        'Auth'=>array(
            'loginRedirect'=>array('controller'=>'Pagecontents', 'action'=>'index'),
            'logoutRedirect'=>array('controller'=>'pages', 'action'=>'home'),
            'authError'=>"You can't access that page",
            'authorize'=>array('Controller')
        )
    );

    public function isAuthorized($user) {
        return true;
    }

    public function beforeFilter() {
        $this->Auth->allow('display');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
		
		$this->loadModel('Pagecontent');
		$this->set('corpmsg', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '23'))));
		$this->set('address', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '24'))));
		$this->set('details', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '26'))));
		$this->set('phone', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '25'))));
		$this->set('header', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '28'))));
		$this->set('remedialPicture', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '29'))));
			$this->set('natalPicture', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '30'))));
				$this->set('sportsPicture', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '31'))));
					$this->set('relaxPicture', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '32'))));
						$this->set('corpPicture', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '33'))));
							$this->set('eventPicture', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '34'))));
								$this->set('otherPicture', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '35'))));
									$this->set('homePicture', $this->Pagecontent->find('first', array('conditions' => array('Pagecontent.id' => '36'))));
		
		$this->loadModel('Service');
                $this->set('services', $this->Service->find('all'));
				$this->set('remedialService', $this->Service->find('first', array('conditions' => array('Service.id' => '3'))));
				$this->set('natalService', $this->Service->find('first', array('conditions' => array('Service.id' => '4'))));	
				$this->set('sportsService', $this->Service->find('first', array('conditions' => array('Service.id' => '5'))));
				$this->set('relaxService', $this->Service->find('first', array('conditions' => array('Service.id' => '6'))));
				$this->set('corpService', $this->Service->find('first', array('conditions' => array('Service.id' => '7'))));
				$this->set('eventService', $this->Service->find('first', array('conditions' => array('Service.id' => '8'))));
				$this->set('otherService', $this->Service->find('first', array('conditions' => array('Service.id' => '9'))));				
		
		$this->loadModel('Testimonial');
                $this->set('remedial', $this->Testimonial->find('first', array('conditions' => array('Testimonial.Service' => 'REMEDIAL MASSAGE'))));
				
		$this->loadModel('Price');
                $this->set('priceTable', $this->Price->find('all'));
				$this->set('priceTable2', $this->Price->find('first'));
             	 
		
    }
}

