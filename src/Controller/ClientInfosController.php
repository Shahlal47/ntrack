<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientInfos Controller
 *
 * @property \App\Model\Table\ClientInfosTable $ClientInfos
 */
class ClientInfosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientTypes', 'CompanyTypes']
        ];
        $this->set('clientInfos', $this->paginate($this->ClientInfos));
        $this->set('_serialize', ['clientInfos']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Info id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientInfo = $this->ClientInfos->get($id, [
            'contain' => ['ClientTypes', 'CompanyTypes', 'Users', 'ClientContacts', 'ClientAlertSettings', 'ClientDeviceSubscriptions', 'ClientDevices', 'ClientDriverAssignments', 'ClientDrivers', 'ClientExpenses', 'ClientNotifications', 'ClientPersons', 'ClientPublicids', 'ClientReports', 'ClientTripPaths', 'ClientVehicleAssignments', 'ClientVehicles', 'Geofences']
        ]);
        $this->set('clientInfo', $clientInfo);
        $this->set('_serialize', ['clientInfo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientInfo = $this->ClientInfos->newEntity();
        if ($this->request->is('post')) {
            $clientInfo = $this->ClientInfos->patchEntity($clientInfo, $this->request->data);
            if ($this->ClientInfos->save($clientInfo)) {
                $this->Flash->success(__('The client info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client info could not be saved. Please, try again.'));
            }
        }
        $clientTypes = $this->ClientInfos->ClientTypes->find('list', ['limit' => 200]);
        $companyTypes = $this->ClientInfos->CompanyTypes->find('list', ['limit' => 200]);
        $this->set(compact('clientInfo', 'clientTypes', 'companyTypes'));
        $this->set('_serialize', ['clientInfo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Info id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientInfo = $this->ClientInfos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientInfo = $this->ClientInfos->patchEntity($clientInfo, $this->request->data);
            if ($this->ClientInfos->save($clientInfo)) {
                $this->Flash->success(__('The client info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client info could not be saved. Please, try again.'));
            }
        }
        $clientTypes = $this->ClientInfos->ClientTypes->find('list', ['limit' => 200]);
        $companyTypes = $this->ClientInfos->CompanyTypes->find('list', ['limit' => 200]);
        $this->set(compact('clientInfo', 'clientTypes', 'companyTypes'));
        $this->set('_serialize', ['clientInfo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Info id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientInfo = $this->ClientInfos->get($id);
        if ($this->ClientInfos->delete($clientInfo)) {
            $this->Flash->success(__('The client info has been deleted.'));
        } else {
            $this->Flash->error(__('The client info could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
