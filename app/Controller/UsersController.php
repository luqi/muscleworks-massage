<?php
class UsersController extends AppController {

	public $name = 'Users';
	
	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('add','forgotpassword','changesuccessful');
	}
	
	/*public function isAuthorized($user) {
	    if ($user['role'] == 'admin') {
	        return true;
	    }
	    if (in_array($this->action, array('edit', 'delete'))) {
	        if ($user['id'] != $this->request->params['pass'][0]) {
	            return false;
	        }
	    }
	    return true;
	}*/
	
	public function login() {
	        $this->layout='default';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());   
	        } else {
	            $this->Session->setFlash('Your username/password combination was incorrect');
	        }
	    }
	}
	
	public function logout() {
	    $this->redirect($this->Auth->logout());
	}
	
    public function index() {
	 $this->layout='admin';
		$this->User->recursive = 0;
		$this->set('users', $this->User->find('all'));
	}

	public function view($id = null) {
	 $this->layout='admin';
		$this->User->id = $id;
		
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user');
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid user');
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read());
	}

	public function add() {
	   $this->layout='admin';
		if ($this->request->is('post')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
	}

	public function edit($id = null) {
	 $this->layout='admin';
		$this->User->id = $id;
		
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->User->read();
		}
	}


public function changepassword($id = null){
		$this->layout='default';
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$current_user = $this->Auth->user();
		if ($current_user['id'] == $id) {
            if ($this->request->is('post') || $this->request->is('put')) {
				$password = $this->request->data['User']['password']; 
				if($password == $this->request->data['User']['password_confirmation']){
					if ($this->User->save($this->request->data)) {
						$this->redirect(array('controller' => 'Users', 'action' => 'change_successful'));
					} else {
                    $this->Session->setFlash(__('The user could not be saved. Please, try again', 'failure-message'));
					}
				} 
				else{
					$this->Session->setFlash(__('Password and Confirm Password do not match. Please, try again.'));
				}
			}else {
			$this->request->data = $this->User->read(null, $id);
			}
        } 
	}






public function forgotpassword() {
 App::uses('CakeEmail', 'Network/Email');
$this->layout='admin';
        if ($this->request->is('post')) {
            $user_email = $this->request->data['User']['forget'];
           
            $user = $this->User->find('all', array('conditions' => array('User.email' => $user_email)));
           
            if (count($user) != 0) {
			$tempPassword = $this->User->createTempPassword(8);
          
            $data = array('id' => $user[0]['User']['id'], 'password' => $tempPassword);

                if ($this->User->save($data)) {
                    $email = new CakeEmail();
                    $email->config('default');
                    $email->emailFormat('html');
                    $email->from("ieteam04@gmail.com");
                    $email->to($user_email);
                    $email->subject("Your New Password - MuscleWorks");
                    $body = "
	                <div style='font-family:Century Gothic; color:#06496e; width:620px;'><p>Dear user,</p>
	                <p>Your new password is:</p>
	                <p style='font-weight:bold'>$tempPassword </p>
	              
	                </div>
	                ";
                    $email->send($body);
                    $this->Session->setFlash(__('An email consisting the temporary password has been forwarded to your email'));
                    $this->redirect(array('controller' => 'users', 'action' => "index"));
                }
            } else {
                $this->Session->setFlash(' Your must have a valid e-mail for this action ');
            }
			}
			}
        



	public function delete($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid id for user');
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash('User deleted');
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash('User was not deleted');
		$this->redirect(array('action' => 'index'));
	}

public function change_successful(){
$this->layout='default';
}

}
?>
