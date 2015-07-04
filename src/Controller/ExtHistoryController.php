<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExtHistory Controller
 *
 * @property \App\Model\Table\ExtHistoryTable $ExtHistory
 */
class ExtHistoryController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientDeviceSubscriptions']
        ];
        $this->set('extHistory', $this->paginate($this->ExtHistory));
        $this->set('_serialize', ['extHistory']);
    }

    /**
     * View method
     *
     * @param string|null $id Ext History id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $extHistory = $this->ExtHistory->get($id, [
            'contain' => ['ClientDeviceSubscriptions']
        ]);
        $this->set('extHistory', $extHistory);
        $this->set('_serialize', ['extHistory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $extHistory = $this->ExtHistory->newEntity();
        if ($this->request->is('post')) {
            $extHistory = $this->ExtHistory->patchEntity($extHistory, $this->request->data);
            if ($this->ExtHistory->save($extHistory)) {
                $this->Flash->success(__('The ext history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ext history could not be saved. Please, try again.'));
            }
        }
        $clientDeviceSubscriptions = $this->ExtHistory->ClientDeviceSubscriptions->find('list', ['limit' => 200]);
        $this->set(compact('extHistory', 'clientDeviceSubscriptions'));
        $this->set('_serialize', ['extHistory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ext History id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $extHistory = $this->ExtHistory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $extHistory = $this->ExtHistory->patchEntity($extHistory, $this->request->data);
            if ($this->ExtHistory->save($extHistory)) {
                $this->Flash->success(__('The ext history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ext history could not be saved. Please, try again.'));
            }
        }
        $clientDeviceSubscriptions = $this->ExtHistory->ClientDeviceSubscriptions->find('list', ['limit' => 200]);
        $this->set(compact('extHistory', 'clientDeviceSubscriptions'));
        $this->set('_serialize', ['extHistory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ext History id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $extHistory = $this->ExtHistory->get($id);
        if ($this->ExtHistory->delete($extHistory)) {
            $this->Flash->success(__('The ext history has been deleted.'));
        } else {
            $this->Flash->error(__('The ext history could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
