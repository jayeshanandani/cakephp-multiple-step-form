<?php
App::uses('AppModel', 'Model');
/**
 * Training Model
 *
 */
class Training extends AppModel {

	public $belongsTo = array('Survey');


   public $validate = array(
        'class_room' => array(
            'rule'    => array('maxSum123',100),
            'message' => 'This code has been used too many times.'
        )
    );


    public function maxSum123($check, $limit) {
	if ($this->data['Training']['class_room'] + $this->data['Training']['practical'] + $this->data['Training']['onjob_training']+ $this->data['Training']['others'] > $limit)
	{
		return false;
	}
	return true;
    }
}