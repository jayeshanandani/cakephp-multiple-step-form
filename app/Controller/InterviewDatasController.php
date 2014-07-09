<?php
App::uses('AppController', 'Controller');
/**
 * InterviewDatas Controller
 *
 * @property InterviewData $InterviewData
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InterviewDatasController extends AppController {

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
		$this->InterviewData->recursive = 0;
		$this->set('interviewDatas', $this->Paginator->paginate());
	}
	public function step1() {
		
	}
	public function step2() {
	
	}
	public function step3() {
	
	}
	public function step4() {
	
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InterviewData->exists($id)) {
			throw new NotFoundException(__('Invalid interview data'));
		}
		$options = array('conditions' => array('InterviewData.' . $this->InterviewData->primaryKey => $id));
		$this->set('interviewData', $this->InterviewData->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InterviewData->create();
			if ($this->InterviewData->save($this->request->data)) {
				$this->Session->setFlash(__('The interview data has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview data could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->InterviewData->exists($id)) {
			throw new NotFoundException(__('Invalid interview data'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InterviewData->save($this->request->data)) {
				$this->Session->setFlash(__('The interview data has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview data could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('InterviewData.' . $this->InterviewData->primaryKey => $id));
			$this->request->data = $this->InterviewData->find('first', $options);
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
		$this->InterviewData->id = $id;
		if (!$this->InterviewData->exists()) {
			throw new NotFoundException(__('Invalid interview data'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InterviewData->delete()) {
			$this->Session->setFlash(__('The interview data has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The interview data could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
