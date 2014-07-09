<?php
App::uses('AppModel', 'Model');
/**
 * Interview Model
 *
 */
class Interview extends AppModel {

	public $hasMany = array('InterviewInnovation','InterviewTraining');

	public $uploadDir = 'uploads';
	
	public $actsAs = array('WhoDidIt');

	public $validate = array(

		'org_name' => array(
	        'required' => array(
	            'rule' => array('notEmpty'),
	            'message' => 'You must enter a organization name.'
	        ),
	    ),

		'respn_name' => array(
	        'required' => array(
	            'rule' => array('notEmpty'),
	            'message' => 'You must enter a respondent name.'
	        ),
	    ),
	    'desgination' => array(
	        'required' => array(
	            'rule' => array('notEmpty'),
	            'message' => 'You must enter a desgination.'
	        ),
	    ),
	    'address' => array(
	        'required' => array(
	            'rule' => array('notEmpty'),
	            'message' => 'You must enter an address.'
	        ),
	    ),
	    'city' => array(
	        'required' => array(
	            'rule' => array('notEmpty'),
	            'message' => 'You must enter city.'
	        ),
	    ),
	    'state' => array(
	        'required' => array(
	            'rule' => array('notEmpty'),
	            'message' => 'You must enter state.'
	        ),
	    ),
	    'sector' => array(
	        'required' => array(
	            'rule' => array('notEmpty'),
	            'message' => 'You must enter sector.'
	        ),
	    ),
		'email' => array(
			'notEmpty' => array(
						'rule' => 'notEmpty',
						'message' => 'Provide an email address'
				),
			'validEmailRule' => array(
						'rule' => array('email'),
						'message' => 'Invalid email address'
				),
			'isUnique' => array(
						'rule' => 'isUnique',
						'message' => 'Email already registered'
				),
		),

		'filename' => array(
			// http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::uploadError
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Something went wrong with the file upload',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
			// http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::mimeType
			'mimeType' => array(
				'rule' => array('mimeType', array('image/gif','image/png','image/jpg','application/pdf','application/msword','application/x-msexcel','application/mspowerpoint')),
				'message' => 'Invalid file, only images allowed',
				'required' => FALSE,
				'allowEmpty' => TRUE,
			),
			// custom callback to deal with the file upload
			'processUpload' => array(
				'rule' => 'processUpload',
				'message' => 'Something went wrong processing your file',
				'required' => FALSE,
				'allowEmpty' => TRUE,
				'last' => TRUE,
			),
		),
		'contact' => array(
			'contact' => array(
				'rule' => array('phone','/^[1-9]{1}[0-9]{9}$/i'),
				'required' => true,
				'allowEmpty' => false,
				'on' => null,
				'last' => true,
				'message' => 'Enter Valid Phone Number'
			),
		),
		'total_employees' => array(
			'contact' => array(
				'rule' => array('phone','/[0-9]+/i'),
				'required' => true,
				'allowEmpty' => false,
				'on' => null,
				'last' => true,
				'message' => 'Enter valid detail'
			),
		),
		'management' => array(
			'contact' => array(
				'rule' => array('phone','/[0-9]+/i'),
				'required' => true,
				'allowEmpty' => false,
				'on' => null,
				'last' => true,
				'message' => 'Enter valid detail'
			),
		'non_management' => array(
			'contact' => array(
				'rule' => array('phone','/[0-9]+/i'),
				'required' => true,
				'allowEmpty' => false,
				'on' => null,
				'last' => true,
				'message' => 'Enter valid detail'
			),
		),
		'avg_contract_emp_year' => array(
			'contact' => array(
				'rule' => array('phone','/[0-9]+/i'),
				'required' => true,
				'allowEmpty' => false,
				'on' => null,
				'last' => true,
				'message' => 'Enter valid detail'
			),
		),
		'no_planned_training' => array(
			'contact' => array(
				'rule' => array('phone','/[0-9]+/i'),
				'required' => true,
				'allowEmpty' => false,
				'on' => null,
				'last' => true,
				'message' => 'Enter valid detail'
			),
		),
		'no_unplanned_training' => array(
			'contact' => array(
				'rule' => array('phone','/[0-9]+/i'),
				'required' => true,
				'allowEmpty' => false,
				'on' => null,
				'last' => true,
				'message' => 'Enter valid detail'
			),
		),
		),
	);

/**
 * Process the Upload
 * @param array $check
 * @return boolean
 */
	public function processUpload($check=array()) {
		// deal with uploaded file
		if (!empty($check['filename']['tmp_name'])) {

			// check file is uploaded
			if (!is_uploaded_file($check['filename']['tmp_name'])) {
				return FALSE;
			}

			// build full filename
			$filename = WWW_ROOT . $this->uploadDir . DS . Inflector::slug(pathinfo($check['filename']['name'], PATHINFO_FILENAME)).'.'.pathinfo($check['filename']['name'], PATHINFO_EXTENSION);

			// @todo check for duplicate filename

			// try moving file
			if (!move_uploaded_file($check['filename']['tmp_name'], $filename)) {
				return FALSE;

			// file successfully uploaded
			} else {
				// save the file path relative from WWW_ROOT e.g. uploads/example_filename.jpg
				$this->data[$this->alias]['filepath'] = str_replace(DS, "/", str_replace(WWW_ROOT, "", $filename) );
			}
		}

		return TRUE;
	}

	public function beforeSave($options = array()) {

		if (!empty($this->data[$this->alias]['filepath'])) {
			$this->data[$this->alias]['filename'] = $this->data[$this->alias]['filepath'];
		}
		return parent::beforeSave($options);
	}


/**
 * Before Validation
 * @param array $options
 * @return boolean
 */
	public function beforeValidate($options = array()) {
		// ignore empty file - causes issues with form validation when file is empty and optional
		if (!empty($this->data[$this->alias]['filename']['error']) && $this->data[$this->alias]['filename']['error']==4 && $this->data[$this->alias]['filename']['size']==0) {
			unset($this->data[$this->alias]['filename']);
		}

		parent::beforeValidate($options);
	}

	//The Associations below have been created with all possible keys, those that are not needed can be removed
  

}