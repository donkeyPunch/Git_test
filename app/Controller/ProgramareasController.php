<?php
App::uses('AppController', 'Controller');
/**
 * Programareas Controller
 *
 * @property Programarea $Programarea
 */
class ProgramareasController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Programarea->recursive = 0;
		$this->set('programareas', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Programarea->id = $id;
		if (!$this->Programarea->exists()) {
			throw new NotFoundException(__('Invalid programarea'));
		}
		$this->set('programarea', $this->Programarea->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Programarea->create();
			if ($this->Programarea->save($this->request->data)) {
				$this->Session->setFlash(__('The programarea has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The programarea could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Programarea->id = $id;
		if (!$this->Programarea->exists()) {
			throw new NotFoundException(__('Invalid programarea'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Programarea->save($this->request->data)) {
				$this->Session->setFlash(__('The programarea has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The programarea could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Programarea->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Programarea->id = $id;
		if (!$this->Programarea->exists()) {
			throw new NotFoundException(__('Invalid programarea'));
		}
		if ($this->Programarea->delete()) {
			$this->Session->setFlash(__('Programarea deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Programarea was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
