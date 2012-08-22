<?php
App::uses('AppController', 'Controller');
/**
 * Priorities Controller
 *
 * @property Priority $Priority
 */
class PrioritiesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Priority->recursive = 0;
		$this->set('priorities', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Priority->id = $id;
		if (!$this->Priority->exists()) {
			throw new NotFoundException(__('Invalid priority'));
		}
		$this->set('priority', $this->Priority->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Priority->create();
			if ($this->Priority->save($this->request->data)) {
				$this->Session->setFlash(__('The priority has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The priority could not be saved. Please, try again.'));
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
		$this->Priority->id = $id;
		if (!$this->Priority->exists()) {
			throw new NotFoundException(__('Invalid priority'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Priority->save($this->request->data)) {
				$this->Session->setFlash(__('The priority has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The priority could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Priority->read(null, $id);
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
		$this->Priority->id = $id;
		if (!$this->Priority->exists()) {
			throw new NotFoundException(__('Invalid priority'));
		}
		if ($this->Priority->delete()) {
			$this->Session->setFlash(__('Priority deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Priority was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
