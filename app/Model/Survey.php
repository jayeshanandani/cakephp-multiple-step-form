<?php
App::uses('AppModel', 'Model');
/**
 * Survey Model
 *
 */
class Survey extends AppModel {

	public $hasOne = array('Profile','Innovation');

	public $hasMany = array('InnovationData','Training');
}