<?php
App::uses('AppController', 'Controller');
/**
 * Innovations Controller
 *
 * @property Innovation $Innovation
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class InnovationsController extends AppController {

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
		$this->Innovation->recursive = 0;
		$this->set('Innovations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Innovation->exists($id)) {
			throw new NotFoundException(__('Invalid Innovation'));
		}
		$options = array('conditions' => array('Innovation.' . $this->Innovation->primaryKey => $id));
		$this->set('Innovation', $this->Innovation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Innovation->create();
			if ($this->Innovation->save($this->request->data)) {
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
		if (!$this->Innovation->exists($id)) {
			throw new NotFoundException(__('Invalid Innovation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Innovation->save($this->request->data)) {
				$this->Session->setFlash(__('The Innovation has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Innovation could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Innovation.' . $this->Innovation->primaryKey => $id));
			$this->request->data = $this->Innovation->find('first', $options);
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
		$this->Innovation->id = $id;
		if (!$this->Innovation->exists()) {
			throw new NotFoundException(__('Invalid Innovation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Innovation->delete()) {
			$this->Session->setFlash(__('The Innovation has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The Innovation could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
