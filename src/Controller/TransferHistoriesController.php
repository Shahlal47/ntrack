<?php
namespace App\Controller;

use App\Controller\AppController;

class TransferHistoriesController extends AppController
{
    public function index()
    {
        $this->paginate = [
//            'contain' => ['FromUsers', 'FromClientInfos', 'ToUsers', 'ToClientInfos', 'Devices', 'TransferedBies']
        ];
        $this->set('transferHistories', $this->paginate($this->TransferHistories));
        $this->set('_serialize', ['transferHistories']);
    }

    public function view($id = null)
    {
        $transferHistory = $this->TransferHistories->get($id, [
//            'contain' => ['FromUsers', 'FromClientInfos', 'ToUsers', 'ToClientInfos', 'Devices', 'TransferedBies']
        ]);
        $this->set('transferHistory', $transferHistory);
        $this->set('_serialize', ['transferHistory']);
    }

    public function add()
    {
        $transferHistory = $this->TransferHistories->newEntity();
        if ($this->request->is('post')) {
            $transferHistory = $this->TransferHistories->patchEntity($transferHistory, $this->request->data);
            if ($this->TransferHistories->save($transferHistory)) {
                $this->Flash->success(__('The transfer history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transfer history could not be saved. Please, try again.'));
            }
        }
//        $fromUsers = $this->TransferHistories->FromUsers->find('list', ['limit' => 200]);
//        $fromClientInfos = $this->TransferHistories->FromClientInfos->find('list', ['limit' => 200]);
//        $toUsers = $this->TransferHistories->ToUsers->find('list', ['limit' => 200]);
//        $toClientInfos = $this->TransferHistories->ToClientInfos->find('list', ['limit' => 200]);
//        $devices = $this->TransferHistories->Devices->find('list', ['limit' => 200]);
//        $transferedBies = $this->TransferHistories->TransferedBies->find('list', ['limit' => 200]);
        $this->set(compact('transferHistory'));
//        $this->set(compact('transferHistory', 'fromUsers', 'fromClientInfos', 'toUsers', 'toClientInfos', 'devices', 'transferedBies'));
        $this->set('_serialize', ['transferHistory']);
    }

    public function edit($id = null)
    {
        $transferHistory = $this->TransferHistories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transferHistory = $this->TransferHistories->patchEntity($transferHistory, $this->request->data);
            if ($this->TransferHistories->save($transferHistory)) {
                $this->Flash->success(__('The transfer history has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The transfer history could not be saved. Please, try again.'));
            }
        }
//        $fromUsers = $this->TransferHistories->FromUsers->find('list', ['limit' => 200]);
//        $fromClientInfos = $this->TransferHistories->FromClientInfos->find('list', ['limit' => 200]);
//        $toUsers = $this->TransferHistories->ToUsers->find('list', ['limit' => 200]);
//        $toClientInfos = $this->TransferHistories->ToClientInfos->find('list', ['limit' => 200]);
//        $devices = $this->TransferHistories->Devices->find('list', ['limit' => 200]);
//        $transferedBies = $this->TransferHistories->TransferedBies->find('list', ['limit' => 200]);
        $this->set(compact('transferHistory'));
//        $this->set(compact('transferHistory', 'fromUsers', 'fromClientInfos', 'toUsers', 'toClientInfos', 'devices', 'transferedBies'));
        $this->set('_serialize', ['transferHistory']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transferHistory = $this->TransferHistories->get($id);
        if ($this->TransferHistories->delete($transferHistory)) {
            $this->Flash->success(__('The transfer history has been deleted.'));
        } else {
            $this->Flash->error(__('The transfer history could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
