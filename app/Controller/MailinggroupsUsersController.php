<?php
App::uses('AppController', 'Controller');
/**
 * MailinggroupsUsers Controller
 *
 * @property MailinggroupsUser $MailinggroupsUser
 */
class MailinggroupsUsersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MailinggroupsUser->recursive = 0;
		$this->set('mailinggroupsUsers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MailinggroupsUser->id = $id;
		if (!$this->MailinggroupsUser->exists()) {
			throw new NotFoundException(__('Invalid mailinggroups user'));
		}
		$this->set('mailinggroupsUser', $this->MailinggroupsUser->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MailinggroupsUser->create();
			if ($this->MailinggroupsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The mailinggroups user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mailinggroups user could not be saved. Please, try again.'));
			}
		}
		$creators = $this->MailinggroupsUser->Creator->find('list');
		$members = $this->MailinggroupsUser->Member->find('list');
		$mailinggroups = $this->MailinggroupsUser->Mailinggroup->find('list');
		$this->set(compact('creators', 'members', 'mailinggroups'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MailinggroupsUser->id = $id;
		if (!$this->MailinggroupsUser->exists()) {
			throw new NotFoundException(__('Invalid mailinggroups user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MailinggroupsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The mailinggroups user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mailinggroups user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MailinggroupsUser->read(null, $id);
		}
		$creators = $this->MailinggroupsUser->Creator->find('list');
		$members = $this->MailinggroupsUser->Member->find('list');
		$mailinggroups = $this->MailinggroupsUser->Mailinggroup->find('list');
		$this->set(compact('creators', 'members', 'mailinggroups'));
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
		$this->MailinggroupsUser->id = $id;
		if (!$this->MailinggroupsUser->exists()) {
			throw new NotFoundException(__('Invalid mailinggroups user'));
		}
		if ($this->MailinggroupsUser->delete()) {
			$this->Session->setFlash(__('Mailinggroups user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mailinggroups user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
