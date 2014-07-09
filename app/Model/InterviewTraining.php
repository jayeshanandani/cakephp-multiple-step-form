<?php
App::uses('AppModel', 'Model');
/**
 * InterviewTraining Model
 *
 */
class InterviewTraining extends AppModel {

	public $belongsTo = array('Interview');
}