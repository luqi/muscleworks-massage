<?php
App::uses('AppModel', 'Model');
/**
 * Testimonial Model
 *
 */
class Testimonial extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	
                       public $name="Testimonial";
                       public $validate = array(
		'Name' => array(
			'rule-1' => array(
				'rule' => array('notEmpty'),
				'message' => 'Please enter your name',
                            
	
			),
                    
                    'rule-2'=>array(
                        'rule'=>'/^[-\'a-zA-Z ]+$/',
                        'message'=>'Only letters, \'-\', \' and space are allowed'

                    ),
                    
		),
				'Service' => array(
			        'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select type of service',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Service' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please select service type',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'content' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Pleace enter message',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'Publish' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
