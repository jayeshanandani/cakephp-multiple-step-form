<?php
App::uses('AppController', 'Controller');
/**
 * SurveyInnovations Controller
 *
 * @property SurveyInnovation $SurveyInnovation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SurveyInnovationsController extends AppController {

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
		$this->SurveyInnovation->recursive = 0;
		$this->set('surveyInnovations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SurveyInnovation->exists($id)) {
			throw new NotFoundException(__('Invalid SurveyInnovation'));
		}
		$options = array('conditions' => array('SurveyInnovation.' . $this->SurveyInnovation->primaryKey => $id));
		$this->set('surveyInnovation', $this->SurveyInnovation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SurveyInnovation->create();
			if ($this->SurveyInnovation->save($this->request->data)) {
				$this->Session->setFlash(__('The Innovation has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Innovation could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
		if (!$this->SurveyInnovation->exists($id)) {
			throw new NotFoundException(__('Invalid SurveyInnovation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SurveyInnovation->save($this->request->data)) {
				$this->Session->setFlash(__('The SurveyInnovation has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The SurveyInnovation could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('SurveyInnovation.' . $this->SurveyInnovation->primaryKey => $id));
			$this->request->data = $this->SurveyInnovation->find('first', $options);
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
		$this->SurveyInnovation->id = $id;
		if (!$this->SurveyInnovation->exists()) {
			throw new NotFoundException(__('Invalid SurveyInnovation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SurveyInnovation->delete()) {
			$this->Session->setFlash(__('The SurveyInnovation has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The SurveyInnovation could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
