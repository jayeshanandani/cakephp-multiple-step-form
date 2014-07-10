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
			if ($this->request->is('post')) {
				debug($this->request->data);
				if($step==1){
					$this->Survey->Profile->create();
					   $filename = $this->request->data['Profile']['filename']['name'];
					   debug($filename);
			            $extension = pathinfo($filename, PATHINFO_EXTENSION);
			            $name = pathinfo($filename, PATHINFO_FILENAME);
			            $this->request->data['Profile']['file_name'] = $name;
			            $this->request->data['Profile']['file_type'] = $extension;
			            debug($this->request->data);
					if ($this->Survey->save($this->request->data)) {
						$this->Session->setFlash(__('The Survey has been saved.'), 'default', array('class' => 'alert alert-success'));
						return $this->redirect(array('action' => 'add','2'));
					} else {
						$this->Session->setFlash(__('Step 1 could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
					}
				}
				/*elseif($step==2){
					$this->SurveyTraining->create();
					if ($this->Survey->save($this->request->data)) {
						$this->Session->setFlash(__('The planned training have been saved.'), 'default', array('class' => 'alert alert-success'));
						return $this->redirect(array('action' => 'add','2'));
					} else {
						$this->Session->setFlash(__('Step 2 could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
					}
				}
				elseif($step==3){
					$this->SurveyTraining->create();
					if ($this->Survey->save($this->request->data)) {
						$this->Session->setFlash(__('The unplanned training have been saved.'), 'default', array('class' => 'alert alert-success'));
						return $this->redirect(array('action' => 'add','2'));
					} else {
						$this->Session->setFlash(__('Step 3 could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
					}
				}*/
				elseif($step==4){
					$this->SurveyInnovation->create();
					if ($this->SurveyInnovation->save($this->request->data)) {
						$this->Session->setFlash(__('The innovations have been saved.'), 'default', array('class' => 'alert alert-success'));
						return $this->redirect(array('action' => 'add','2'));
					} else {
						$this->Session->setFlash(__('Step 4 could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
					}
				}
			}
			else {
				if($this->Session->check('Survey')){
					$this->request->data = $this->Session->read('Survey');
				}
				else {
					/*if($step!=1){
						$this->Session->setFlash(__('The Survey session could not be found, restarting.'), 'default', array('class' => 'alert alert-danger'));
						$this->redirect('/Surveys/add/1');
					}*/
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
