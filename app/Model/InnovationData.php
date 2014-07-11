<?php
App::uses('AppModel', 'Model');
/**
 * Innovation Model
 *
 */
class InnovationData extends AppModel {

	public $useTable = 'innovation_datas';

	public $belongsTo = array('Survey');
}
