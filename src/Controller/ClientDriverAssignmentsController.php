<?php
namespace App\Controller;

use App\Controller\AppController;

class ClientDriverAssignmentsController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'ClientDrivers', 'ClientVehicles', 'ClientContacts']
        ];
        $this->set('clientDriverAssignments', $this->paginate($this->ClientDriverAssignments));
        $this->set('_serialize', ['clientDriverAssignments']);
    }

    public function view($id = null)
    {
        $clientDriverAssignment = $this->ClientDriverAssignments->get($id, [
            'contain' => ['ClientInfos', 'ClientDrivers', 'ClientVehicles', 'ClientContacts']
        ]);
        $this->set('clientDriverAssignment', $clientDriverAssignment);
        $this->set('_serialize', ['clientDriverAssignment']);
    }

    public function add()
    {
        $clientDriverAssignment = $this->ClientDriverAssignments->newEntity();
        if ($this->request->is('post')) {
            $clientDriverAssignment = $this->ClientDriverAssignments->patchEntity($clientDriverAssignment, $this->request->data);
            if ($this->ClientDriverAssignments->save($clientDriverAssignment)) {
                $this->Flash->success(__('The client driver assignment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client driver assignment could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientDriverAssignments->ClientInfos->find('list', ['limit' => 200]);
        $clientDrivers = $this->ClientDriverAssignments->ClientDrivers->find('list', ['limit' => 200]);
        $clientVehicles = $this->ClientDriverAssignments->ClientVehicles->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientDriverAssignments->ClientContacts->find('list', ['limit' => 200]);
        $this->set(compact('clientDriverAssignment', 'clientInfos', 'clientDrivers', 'clientVehicles', 'clientContacts'));
        $this->set('_serialize', ['clientDriverAssignment']);
    }

    public function edit($id = null)
    {
        $clientDriverAssignment = $this->ClientDriverAssignments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientDriverAssignment = $this->ClientDriverAssignments->patchEntity($clientDriverAssignment, $this->request->data);
            if ($this->ClientDriverAssignments->save($clientDriverAssignment)) {
                $this->Flash->success(__('The client driver assignment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client driver assignment could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientDriverAssignments->ClientInfos->find('list', ['limit' => 200]);
        $clientDrivers = $this->ClientDriverAssignments->ClientDrivers->find('list', ['limit' => 200]);
        $clientVehicles = $this->ClientDriverAssignments->ClientVehicles->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientDriverAssignments->ClientContacts->find('list', ['limit' => 200]);
        $this->set(compact('clientDriverAssignment', 'clientInfos', 'clientDrivers', 'clientVehicles', 'clientContacts'));
        $this->set('_serialize', ['clientDriverAssignment']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientDriverAssignment = $this->ClientDriverAssignments->get($id);
        if ($this->ClientDriverAssignments->delete($clientDriverAssignment)) {
            $this->Flash->success(__('The client driver assignment has been deleted.'));
        } else {
            $this->Flash->error(__('The client driver assignment could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
