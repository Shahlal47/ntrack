<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * UserLogs Controller
 *
 * @property \App\Model\Table\UserLogsTable $UserLogs
 */
class UserLogsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'UserTypes']
        ];
        $this->set('userLogs', $this->paginate($this->UserLogs));
        $this->set('_serialize', ['userLogs']);
    }

    /**
     * View method
     *
     * @param string|null $id User Log id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userLog = $this->UserLogs->get($id, [
            'contain' => ['Users', 'UserTypes']
        ]);
        $this->set('userLog', $userLog);
        $this->set('_serialize', ['userLog']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userLog = $this->UserLogs->newEntity();
        if ($this->request->is('post')) {
            $userLog = $this->UserLogs->patchEntity($userLog, $this->request->data);
            if ($this->UserLogs->save($userLog)) {
                $this->Flash->success(__('The user log has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user log could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserLogs->Users->find('list', ['limit' => 200]);
        $userTypes = $this->UserLogs->UserTypes->find('list', ['limit' => 200]);
        $this->set(compact('userLog', 'users', 'userTypes'));
        $this->set('_serialize', ['userLog']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User Log id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userLog = $this->UserLogs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userLog = $this->UserLogs->patchEntity($userLog, $this->request->data);
            if ($this->UserLogs->save($userLog)) {
                $this->Flash->success(__('The user log has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user log could not be saved. Please, try again.'));
            }
        }
        $users = $this->UserLogs->Users->find('list', ['limit' => 200]);
        $userTypes = $this->UserLogs->UserTypes->find('list', ['limit' => 200]);
        $this->set(compact('userLog', 'users', 'userTypes'));
        $this->set('_serialize', ['userLog']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User Log id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userLog = $this->UserLogs->get($id);
        if ($this->UserLogs->delete($userLog)) {
            $this->Flash->success(__('The user log has been deleted.'));
        } else {
            $this->Flash->error(__('The user log could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
