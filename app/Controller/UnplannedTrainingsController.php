<?php
App::uses('AppController', 'Controller');
/**
 * UnplannedTrainings Controller
 *
 * @property UnplannedTraining $UnplannedTraining
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UnplannedTrainingsController extends AppController {

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
		$this->UnplannedTraining->recursive = 0;
		$this->set('unplannedTrainings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UnplannedTraining->exists($id)) {
			throw new NotFoundException(__('Invalid unplanned training'));
		}
		$options = array('conditions' => array('UnplannedTraining.' . $this->UnplannedTraining->primaryKey => $id));
		$this->set('unplannedTraining', $this->UnplannedTraining->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UnplannedTraining->create();
			if ($this->UnplannedTraining->save($this->request->data)) {
				$this->Session->setFlash(__('The unplanned training has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unplanned training could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
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
		if (!$this->UnplannedTraining->exists($id)) {
			throw new NotFoundException(__('Invalid unplanned training'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UnplannedTraining->save($this->request->data)) {
				$this->Session->setFlash(__('The unplanned training has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The unplanned training could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('UnplannedTraining.' . $this->UnplannedTraining->primaryKey => $id));
			$this->request->data = $this->UnplannedTraining->find('first', $options);
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
		$this->UnplannedTraining->id = $id;
		if (!$this->UnplannedTraining->exists()) {
			throw new NotFoundException(__('Invalid unplanned training'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UnplannedTraining->delete()) {
			$this->Session->setFlash(__('The unplanned training has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The unplanned training could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
