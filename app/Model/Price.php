<?php

class Price extends AppModel{
 public $name = "Price";
                  public $validate = array(
        'minutes'=> array(
           'rule-1'=>array(
                'rule'=>array('notEmpty'),
                'message'=>'minutes is required'
            ),
            'rule-2'=>array(
                'rule'=>'/^[0-9]+$/',
                'message'=>'Only numeric are allowed'
            ),
        ),
   
    'stdvalue'=> array(
            'rule1'=>array(
                'rule'=>array('notEmpty'),
                'message'=>'stdvalue is required'
            ),
            'rule2'=>array(
                'rule'=>'/^[0-9]+$/',
                'message'=>'Only numeric are allowed'
            )
           
        ),
        
        
     
    );
}
?>
