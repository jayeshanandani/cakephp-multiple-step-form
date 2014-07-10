<?php
App::uses('AppModel', 'Model');
/**
 * Innovation Model
 *
 */
class Innovation extends AppModel {

	public $belongsTo = array('Survey');
}
