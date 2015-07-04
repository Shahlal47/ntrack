<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientDriverAssignments Controller
 *
 * @property \App\Model\Table\ClientDriverAssignmentsTable $ClientDriverAssignments
 */
class ClientDriverAssignmentsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'ClientDrivers', 'ClientVehicles', 'ClientContacts']
        ];
        $this->set('clientDriverAssignments', $this->paginate($this->ClientDriverAssignments));
        $this->set('_serialize', ['clientDriverAssignments']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Driver Assignment id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientDriverAssignment = $this->ClientDriverAssignments->get($id, [
            'contain' => ['ClientInfos', 'ClientDrivers', 'ClientVehicles', 'ClientContacts']
        ]);
        $this->set('clientDriverAssignment', $clientDriverAssignment);
        $this->set('_serialize', ['clientDriverAssignment']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
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

    /**
     * Edit method
     *
     * @param string|null $id Client Driver Assignment id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
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

    /**
     * Delete method
     *
     * @param string|null $id Client Driver Assignment id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
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
