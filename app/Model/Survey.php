<?php
App::uses('AppModel', 'Model');
/**
 * Survey Model
 *
 */
class Survey extends AppModel {

	public $hasOne = array('Profile');

	public $hasMany = array('Innovation','Training');
}