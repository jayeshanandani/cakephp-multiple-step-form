<?php
App::uses('AppController', 'Controller');
/**
 * Surveys Controller
 *
 * @property Survey $Survey
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SurveysController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Survey->recursive = 0;
		$this->set('Surveys', $this->Paginator->paginate());
	}

	public function beforeFilter() {
	    $this->layout = 'bootstrap';
        $this->Auth->allow('add','homepage','thankyou');
    }
    public function homepage() {
	}
	public function thankyou() {
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Survey->exists($id)) {
			throw new NotFoundException(__('Invalid Survey'));
		}
		$options = array('conditions' => array('Survey.' . $this->Survey->primaryKey => $id));
		$this->set('Survey', $this->Survey->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($step=null) {
		if ($step != null) {
			if ($this->request->is('post')||$this->request->is('put')) {
				if($step==1){
					$this->Survey->Profile->create();
					   $filename = $this->request->data['Profile']['filename']['name'];
			            $extension = pathinfo($filename, PATHINFO_EXTENSION);
			            $name = pathinfo($filename, PATHINFO_FILENAME);
			            $this->request->data['Profile']['file_name'] = $name;
			            $this->request->data['Profile']['file_type'] = $extension;
					if ($this->Survey->save($this->request->data)) {
						//$this->Session->setFlash(__('The Survey has been saved.'), 'default', array('class' => 'alert alert-success'));
						$this->request->data['Survey']['id'] = $this->Survey->getLastInsertID();
						if($this->Session->check('Survey')){
							$this->request->data += $this->Session->read('Survey');
						}
						$this->Session->write('Survey',$this->request->data);
						if(($this->request->data['Profile']['no_planned_training']==0)&&($this->request->data['Profile']['no_unplanned_training']==0)){ $stage = 4; }
						elseif(($this->request->data['Profile']['no_planned_training']==0)&&($this->request->data['Profile']['no_unplanned_training']!=0)){ $stage = 3; }
						elseif(($this->request->data['Profile']['no_planned_training']!=0)&&($this->request->data['Profile']['no_unplanned_training']==0)){ $stage = 2; }
						else { $stage = 2; }
						return $this->redirect(array('action' => 'add',$stage));
					} else {
						$this->Session->setFlash(__('Step 1 could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
					}
				}
				elseif($step==2){
				$this->Survey->set($this->request->data);
				if($this->Survey->Training->validates()) {
					if($this->Session->check('Survey')){
						$this->request->data += $this->Session->read('Survey');
					}
					$this->Session->write('Survey',$this->request->data);
					if($this->request->data['Profile']['no_unplanned_training']==0){ $stage = 4; }
					else { $stage = 3; }
					return $this->redirect(array('action' => 'add',$stage));
				}
				}
				elseif($step==3){
					if($this->Session->check('Survey')){
						$this->request->data += $this->Session->read('Survey');
					}
					$this->Session->write('Survey',$this->request->data);
					return $this->redirect(array('action' => 'add','4'));
				}
				elseif($step==4){
					if($this->Session->check('Survey')){
						$this->request->data += $this->Session->read('Survey');
					}
					$this->Session->write('Survey',$this->request->data);
					unset($this->request->data['Profile']['filename']);
					if ($this->Survey->saveAll($this->request->data)) {
						unset($this->request->data['Innovation']);
						unset($this->request->data['Innovation_data']);
						unset($this->request->data['Profile']);
						unset($this->request->data['Training']);
						if($this->request->data['UnplannedTraining']) {
							$this->request->data['Training'] = $this->request->data['UnplannedTraining']; 
							$this->Survey->saveAll($this->request->data);
					}
						$this->Session->setFlash(__('The survey have been saved.'), 'default', array('class' => 'alert alert-success'));
						//$this->Session->delete('Survey');
						return $this->redirect(array('action' => 'thankyou'));
					} else {
						debug($this->validationErrors);
						$this->Session->setFlash(__('Step 4 could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
					}
				}
				else {
					$this->redirect('/surveys/add/1');
				}
			}
			else {
				if($this->Session->check('Survey')){
					$this->request->data = $this->Session->read('Survey');
				}
				else {
					if($step!=1){
						$this->Session->setFlash(__('The Survey session could not be found, restarting.'), 'default', array('class' => 'alert alert-danger'));
						$this->redirect('/surveys/add/1');
					}
				}
				if($step>4){
					$this->Session->setFlash(__('Invalid step, restarting.'), 'default', array('class' => 'alert alert-danger'));
					$this->redirect('/surveys/add/1');
				}
				elseif($step==2){
					if($this->request->data['Profile']['no_planned_training']==0){
						$this->Session->setFlash(__('Invalid step, restarting.'), 'default', array('class' => 'alert alert-danger'));
						$this->redirect('/surveys/add/1');
					}
				}
				elseif($step==3){
					if($this->request->data['Profile']['no_unplanned_training']==0){
						$this->Session->setFlash(__('Invalid step, restarting.'), 'default', array('class' => 'alert alert-danger'));
						$this->redirect('/surveys/add/1');
					}
				}
			}
			$this->render('step'.$step);
		}
		else {
			$this->redirect('/surveys/add/1');
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Survey->exists($id)) {
			throw new NotFoundException(__('Invalid Survey'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Survey->save($this->request->data)) {
				$this->Session->setFlash(__('The Survey has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Survey could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Survey.' . $this->Survey->primaryKey => $id));
			$this->request->data = $this->Survey->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Survey->id = $id;
		if (!$this->Survey->exists()) {
			throw new NotFoundException(__('Invalid Survey'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Survey->delete()) {
			$this->Session->setFlash(__('The Survey has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The Survey could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
