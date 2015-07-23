<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientVehicleAssignments Controller
 *
 * @property \App\Model\Table\ClientVehicleAssignmentsTable $ClientVehicleAssignments
 */
class ClientVehicleAssignmentsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'ClientContacts', 'ClientVehicles', 'ClientTripPaths']
        ];
        $this->set('clientVehicleAssignments', $this->paginate($this->ClientVehicleAssignments));
        $this->set('_serialize', ['clientVehicleAssignments']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Vehicle Assignment id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientVehicleAssignment = $this->ClientVehicleAssignments->get($id, [
            'contain' => ['ClientInfos', 'ClientContacts', 'ClientVehicles', 'ClientTripPaths']
        ]);
        $this->set('clientVehicleAssignment', $clientVehicleAssignment);
        $this->set('_serialize', ['clientVehicleAssignment']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientVehicleAssignment = $this->ClientVehicleAssignments->newEntity();
        if ($this->request->is('post')) {
            $clientVehicleAssignment = $this->ClientVehicleAssignments->patchEntity($clientVehicleAssignment, $this->request->data);
            if ($this->ClientVehicleAssignments->save($clientVehicleAssignment)) {
                $this->Flash->success(__('The client vehicle assignment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client vehicle assignment could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientVehicleAssignments->ClientInfos->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientVehicleAssignments->ClientContacts->find('list', ['limit' => 200]);
        $clientVehicles = $this->ClientVehicleAssignments->ClientVehicles->find('list', ['limit' => 200]);
        $clientTripPaths = $this->ClientVehicleAssignments->ClientTripPaths->find('list', ['limit' => 200]);
        $this->set(compact('clientVehicleAssignment', 'clientInfos', 'clientContacts', 'clientVehicles', 'clientTripPaths'));
        $this->set('_serialize', ['clientVehicleAssignment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Vehicle Assignment id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientVehicleAssignment = $this->ClientVehicleAssignments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientVehicleAssignment = $this->ClientVehicleAssignments->patchEntity($clientVehicleAssignment, $this->request->data);
            if ($this->ClientVehicleAssignments->save($clientVehicleAssignment)) {
                $this->Flash->success(__('The client vehicle assignment has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client vehicle assignment could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientVehicleAssignments->ClientInfos->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientVehicleAssignments->ClientContacts->find('list', ['limit' => 200]);
        $clientVehicles = $this->ClientVehicleAssignments->ClientVehicles->find('list', ['limit' => 200]);
        $clientTripPaths = $this->ClientVehicleAssignments->ClientTripPaths->find('list', ['limit' => 200]);
        $this->set(compact('clientVehicleAssignment', 'clientInfos', 'clientContacts', 'clientVehicles', 'clientTripPaths'));
        $this->set('_serialize', ['clientVehicleAssignment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Vehicle Assignment id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientVehicleAssignment = $this->ClientVehicleAssignments->get($id);
        if ($this->ClientVehicleAssignments->delete($clientVehicleAssignment)) {
            $this->Flash->success(__('The client vehicle assignment has been deleted.'));
        } else {
            $this->Flash->error(__('The client vehicle assignment could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
