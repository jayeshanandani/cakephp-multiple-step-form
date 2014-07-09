<?php
App::uses('AppController', 'Controller');
/**
 * InterviewInnovations Controller
 *
 * @property InterviewInnovation $InterviewInnovation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InterviewInnovationsController extends AppController {

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
		$this->InterviewInnovation->recursive = 0;
		$this->set('interviewInnovations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InterviewInnovation->exists($id)) {
			throw new NotFoundException(__('Invalid InterviewInnovation'));
		}
		$options = array('conditions' => array('InterviewInnovation.' . $this->InterviewInnovation->primaryKey => $id));
		$this->set('interviewInnovation', $this->InterviewInnovation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InterviewInnovation->create();
			if ($this->InterviewInnovation->save($this->request->data)) {
				$this->Session->setFlash(__('The InterviewInnovation has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The InterviewInnovation could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->InterviewInnovation->exists($id)) {
			throw new NotFoundException(__('Invalid InterviewInnovation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InterviewInnovation->save($this->request->data)) {
				$this->Session->setFlash(__('The InterviewInnovation has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The InterviewInnovation could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('InterviewInnovation.' . $this->InterviewInnovation->primaryKey => $id));
			$this->request->data = $this->InterviewInnovation->find('first', $options);
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
		$this->InterviewInnovation->id = $id;
		if (!$this->InterviewInnovation->exists()) {
			throw new NotFoundException(__('Invalid InterviewInnovation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InterviewInnovation->delete()) {
			$this->Session->setFlash(__('The InterviewInnovation has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The InterviewInnovation could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
