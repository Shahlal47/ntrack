<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SystemInfo Controller
 *
 * @property \App\Model\Table\SystemInfoTable $SystemInfo
 */
class SystemInfoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('systemInfo', $this->paginate($this->SystemInfo));
        $this->set('_serialize', ['systemInfo']);
    }

    /**
     * View method
     *
     * @param string|null $id System Info id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $systemInfo = $this->SystemInfo->get($id, [
            'contain' => []
        ]);
        $this->set('systemInfo', $systemInfo);
        $this->set('_serialize', ['systemInfo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $systemInfo = $this->SystemInfo->newEntity();
        if ($this->request->is('post')) {
            $systemInfo = $this->SystemInfo->patchEntity($systemInfo, $this->request->data);
            if ($this->SystemInfo->save($systemInfo)) {
                $this->Flash->success(__('The system info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The system info could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('systemInfo'));
        $this->set('_serialize', ['systemInfo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id System Info id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $systemInfo = $this->SystemInfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $systemInfo = $this->SystemInfo->patchEntity($systemInfo, $this->request->data);
            if ($this->SystemInfo->save($systemInfo)) {
                $this->Flash->success(__('The system info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The system info could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('systemInfo'));
        $this->set('_serialize', ['systemInfo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id System Info id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $systemInfo = $this->SystemInfo->get($id);
        if ($this->SystemInfo->delete($systemInfo)) {
            $this->Flash->success(__('The system info has been deleted.'));
        } else {
            $this->Flash->error(__('The system info could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
