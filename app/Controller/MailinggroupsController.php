<?php
App::uses('AppController', 'Controller');
/**
 * Mailinggroups Controller
 *
 * @property Mailinggroup $Mailinggroup
 */
class MailinggroupsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mailinggroup->recursive = 0;
		$this->set('mailinggroups', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Mailinggroup->id = $id;
		if (!$this->Mailinggroup->exists()) {
			throw new NotFoundException(__('Invalid mailinggroup'));
		}
		$this->set('mailinggroup', $this->Mailinggroup->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mailinggroup->create();
			if ($this->Mailinggroup->save($this->request->data)) {
				$this->Session->setFlash(__('The mailinggroup has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mailinggroup could not be saved. Please, try again.'));
			}
		}
		$users = $this->Mailinggroup->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Mailinggroup->id = $id;
		if (!$this->Mailinggroup->exists()) {
			throw new NotFoundException(__('Invalid mailinggroup'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mailinggroup->save($this->request->data)) {
				$this->Session->setFlash(__('The mailinggroup has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mailinggroup could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Mailinggroup->read(null, $id);
		}
		$users = $this->Mailinggroup->User->find('list');
		$this->set(compact('users'));
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
		$this->Mailinggroup->id = $id;
		if (!$this->Mailinggroup->exists()) {
			throw new NotFoundException(__('Invalid mailinggroup'));
		}
		if ($this->Mailinggroup->delete()) {
			$this->Session->setFlash(__('Mailinggroup deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mailinggroup was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
