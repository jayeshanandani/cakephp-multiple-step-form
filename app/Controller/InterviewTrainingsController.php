<?php
App::uses('AppController', 'Controller');
/**
 * InterviewTrainings Controller
 *
 * @property InterviewTraining $InterviewTraining
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InterviewTrainingsController extends AppController {

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
		$this->InterviewTraining->recursive = 0;
		$this->set('InterviewTrainings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InterviewTraining->exists($id)) {
			throw new NotFoundException(__('Invalid interview training'));
		}
		$options = array('conditions' => array('InterviewTraining.' . $this->InterviewTraining->primaryKey => $id));
		$this->set('InterviewTraining', $this->InterviewTraining->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InterviewTraining->create();
			if ($this->InterviewTraining->save($this->request->data)) {
				$this->Session->setFlash(__('The interview training has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview training could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->InterviewTraining->exists($id)) {
			throw new NotFoundException(__('Invalid interview training'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InterviewTraining->save($this->request->data)) {
				$this->Session->setFlash(__('The interview training has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview training could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('InterviewTraining.' . $this->InterviewTraining->primaryKey => $id));
			$this->request->data = $this->InterviewTraining->find('first', $options);
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
		$this->InterviewTraining->id = $id;
		if (!$this->InterviewTraining->exists()) {
			throw new NotFoundException(__('Invalid interview training'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InterviewTraining->delete()) {
			$this->Session->setFlash(__('The interview training has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The interview training could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
