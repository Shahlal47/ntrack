<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TransferHistory Controller
 *
 * @property \App\Model\Table\TransferHistoryTable $TransferHistory
 */
class TransferHistoryController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FromUsers', 'FromClientInfos', 'ToUsers', 'ToClientInfos', 'Devices', 'TransferedBies']
        ];
        $this->set('transferHistory', $this->paginate($this->TransferHistory));
        $this->set('_serialize', ['transferHistory']);
    }

    /**
     * View method
     *
     * @param string|null $id Transfer History id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transferHistory = $this->TransferHistory->get($id, [
            'contain' => ['FromUsers', 'FromClientInfos', 'ToUsers', 'ToClientInfos', 'Devices', 'TransferedBies']
        ]);
        $this->set('transferHistory', $transferHistory);
        $this->set('_serialize', ['transferHistory']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transferHistory = $this->TransferHistory->newEntity();
        if ($this->request->is('post')) {
            $transferHistory = $this->TransferHistory->patchEntity($transferHistory, $this->request->data);
            if ($this->TransferHistory->save($transferHistory)) {
                $this->Flash->success(__('The transfer history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transfer history could not be saved. Please, try again.'));
            }
        }
        $fromUsers = $this->TransferHistory->FromUsers->find('list', ['limit' => 200]);
        $fromClientInfos = $this->TransferHistory->FromClientInfos->find('list', ['limit' => 200]);
        $toUsers = $this->TransferHistory->ToUsers->find('list', ['limit' => 200]);
        $toClientInfos = $this->TransferHistory->ToClientInfos->find('list', ['limit' => 200]);
        $devices = $this->TransferHistory->Devices->find('list', ['limit' => 200]);
        $transferedBies = $this->TransferHistory->TransferedBies->find('list', ['limit' => 200]);
        $this->set(compact('transferHistory', 'fromUsers', 'fromClientInfos', 'toUsers', 'toClientInfos', 'devices', 'transferedBies'));
        $this->set('_serialize', ['transferHistory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Transfer History id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transferHistory = $this->TransferHistory->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transferHistory = $this->TransferHistory->patchEntity($transferHistory, $this->request->data);
            if ($this->TransferHistory->save($transferHistory)) {
                $this->Flash->success(__('The transfer history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transfer history could not be saved. Please, try again.'));
            }
        }
        $fromUsers = $this->TransferHistory->FromUsers->find('list', ['limit' => 200]);
        $fromClientInfos = $this->TransferHistory->FromClientInfos->find('list', ['limit' => 200]);
        $toUsers = $this->TransferHistory->ToUsers->find('list', ['limit' => 200]);
        $toClientInfos = $this->TransferHistory->ToClientInfos->find('list', ['limit' => 200]);
        $devices = $this->TransferHistory->Devices->find('list', ['limit' => 200]);
        $transferedBies = $this->TransferHistory->TransferedBies->find('list', ['limit' => 200]);
        $this->set(compact('transferHistory', 'fromUsers', 'fromClientInfos', 'toUsers', 'toClientInfos', 'devices', 'transferedBies'));
        $this->set('_serialize', ['transferHistory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Transfer History id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transferHistory = $this->TransferHistory->get($id);
        if ($this->TransferHistory->delete($transferHistory)) {
            $this->Flash->success(__('The transfer history has been deleted.'));
        } else {
            $this->Flash->error(__('The transfer history could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
