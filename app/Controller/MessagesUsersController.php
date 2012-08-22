<?php
App::uses('AppController', 'Controller');
/**
 * MessagesUsers Controller
 *
 * @property MessagesUser $MessagesUser
 */
class MessagesUsersController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->MessagesUser->recursive = 0;
		$this->set('messagesUsers', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->MessagesUser->id = $id;
		if (!$this->MessagesUser->exists()) {
			throw new NotFoundException(__('Invalid messages user'));
		}
		$this->set('messagesUser', $this->MessagesUser->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MessagesUser->create();
			if ($this->MessagesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The messages user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The messages user could not be saved. Please, try again.'));
			}
		}
		$receivers = $this->MessagesUser->Receiver->find('list');
		$statuses = $this->MessagesUser->Status->find('list');
		$messages = $this->MessagesUser->Message->find('list');
		$senders = $this->MessagesUser->Sender->find('list');
		$this->set(compact('receivers', 'statuses', 'messages', 'senders'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->MessagesUser->id = $id;
		if (!$this->MessagesUser->exists()) {
			throw new NotFoundException(__('Invalid messages user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->MessagesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The messages user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The messages user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->MessagesUser->read(null, $id);
		}
		$receivers = $this->MessagesUser->Receiver->find('list');
		$statuses = $this->MessagesUser->Status->find('list');
		$messages = $this->MessagesUser->Message->find('list');
		$senders = $this->MessagesUser->Sender->find('list');
		$this->set(compact('receivers', 'statuses', 'messages', 'senders'));
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
		$this->MessagesUser->id = $id;
		if (!$this->MessagesUser->exists()) {
			throw new NotFoundException(__('Invalid messages user'));
		}
		if ($this->MessagesUser->delete()) {
			$this->Session->setFlash(__('Messages user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Messages user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
