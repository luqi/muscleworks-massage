<?php
    class Voucher extends AppModel{
        public $name = "Voucher";
                  public $validate = array(
        'from_name'=> array(
           'rule-1'=>array(
                'rule'=>array('notEmpty'),
                'message'=>'sender\'s Name is required'
            ),
            'rule-2'=>array(
                'rule'=>'/^[-\'a-zA-Z ]+$/',
                'message'=>'Only letters, \'-\', \' and space are allowed'
            ),
        ),
        'to_name'=> array(
            'rule1'=>array(
                'rule'=>array('notEmpty'),
                'message'=>'recipient\'s Name is required'
            ),
            'rule2'=>array(
                'rule'=>'/^[-\'a-zA-Z ]+$/',
                'message'=>'Only letters, \'-\', \' and space are allowed'
            )
           
        ),

        'address'=> array(
            'rule1'=>array(
                'rule'=>array('notEmpty'),
                'message'=>'Address is required'
            ),
            'rule2'=>array(
                'rule'=>'/^[a-zA-Z0-9 ,]+$/',
                'message'=>'Special characters are not allowed'
            )
        ),
         
        'from_email'=>array(
            'rule'=>array('email','notEmpty'),
            'message'=>array('Please enter a valid email address'),
            ),
    
          'message'=>array(
            'rule'=>array('notEmpty'),
            'message'=>array('message is required'),
            ),
        
  
        
        'phoneNumber_1'=> array(
            'phoneRule-1'=>array(
                'rule'=>array('notEmpty'),
                'message'=>'Phone Number is required'
            ),
            'phoneRule-2'=>array(
                'rule'=>array('phone','/^[0-9]{10}$/i' , 'au'),
                'message'=>'A valid phone number should contain 10 digits'
            )
        ),
        'phoneNumber_2'=> array(
            'phoneRule-1'=>array(
                'rule'=>array('notEmpty'),
                'message'=>'Phone Number is required'
            ),
            'phoneRule-2'=>array(
                'rule'=>array('phone','/^[0-9]{10}$/i' , 'au'),
                'message'=>'Invalid Phone number'
            )
        ),
        
     
    );
  
    }
?>