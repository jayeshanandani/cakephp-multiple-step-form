<?php
App::uses('AppController', 'Controller');
/**
 * interviews Controller
 *
 * @property interview $interview
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InterviewsController extends AppController {

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
		$this->Interview->recursive = 0;
		$this->set('interviews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->interview->exists($id)) {
			throw new NotFoundException(__('Invalid interview'));
		}
		$options = array('conditions' => array('interview.' . $this->interview->primaryKey => $id));
		$this->set('interview', $this->interview->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($step=null) {
		
		if ($step != null) {
			if ($this->request->is('post')) {
				if($step==1){
					$this->Interview->create();
					if ($this->Interview->save($this->request->data)) {
						$this->Session->setFlash(__('The interview has been saved.'), 'default', array('class' => 'alert alert-success'));
						return $this->redirect(array('action' => 'add','2'));
					} else {
						$this->Session->setFlash(__('Step 1 could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
					}
				}
				elseif($step==2){
					$this->InterviewTraining->create();
					if ($this->Interview->save($this->request->data)) {
						$this->Session->setFlash(__('The planned training have been saved.'), 'default', array('class' => 'alert alert-success'));
						return $this->redirect(array('action' => 'add','2'));
					} else {
						$this->Session->setFlash(__('Step 2 could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
					}
				}
				elseif($step==3){
					$this->InterviewTraining->create();
					if ($this->Interview->save($this->request->data)) {
						$this->Session->setFlash(__('The unplanned training have been saved.'), 'default', array('class' => 'alert alert-success'));
						return $this->redirect(array('action' => 'add','2'));
					} else {
						$this->Session->setFlash(__('Step 3 could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
					}
				}
				elseif($step==4){
					$this->InterviewInnovation->create();
					if ($this->InterviewInnovation->save($this->request->data)) {
						$this->Session->setFlash(__('The innovations have been saved.'), 'default', array('class' => 'alert alert-success'));
						return $this->redirect(array('action' => 'add','2'));
					} else {
						$this->Session->setFlash(__('Step 4 could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
					}
				}
			}
			else {
				if($this->Session->check('interview')){
					$this->request->data = $this->Session->read('interview');
				}
				else {
					if($step!=1){
						$this->Session->setFlash(__('The interview session could not be found, restarting.'), 'default', array('class' => 'alert alert-danger'));
						$this->redirect('/interviews/add/1');
					}
				}
			}
			$this->render('step'.$step);
		}
		else {
			$this->redirect('/interviews/add/1');
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
		if (!$this->interview->exists($id)) {
			throw new NotFoundException(__('Invalid interview'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->interview->save($this->request->data)) {
				$this->Session->setFlash(__('The interview has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The interview could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('interview.' . $this->interview->primaryKey => $id));
			$this->request->data = $this->interview->find('first', $options);
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
		$this->interview->id = $id;
		if (!$this->interview->exists()) {
			throw new NotFoundException(__('Invalid interview'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->interview->delete()) {
			$this->Session->setFlash(__('The interview has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The interview could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
