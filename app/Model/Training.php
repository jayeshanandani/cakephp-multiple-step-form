<?php
App::uses('AppModel', 'Model');
/**
 * Training Model
 *
 */
class Training extends AppModel {

	public $belongsTo = array('Survey');
}