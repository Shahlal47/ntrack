<?php
namespace App\Controller;

use App\Controller\AppController;

class ClientInfosController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientTypes', 'CompanyTypes']
        ];
        $this->set('clientInfos', $this->paginate($this->ClientInfos));
        $this->set('_serialize', ['clientInfos']);
    }

    public function view($id = null)
    {
        $clientInfo = $this->ClientInfos->get($id, [
            'contain' => ['ClientTypes', 'CompanyTypes', 'Users', 'ClientContacts', 'ClientAlertSettings', 'ClientDeviceSubscriptions', 'ClientDevices', 'ClientDriverAssignments', 'ClientDrivers', 'ClientExpenses', 'ClientNotifications', 'ClientPersons', 'ClientPublicids', 'ClientReports', 'ClientTripPaths', 'ClientVehicleAssignments', 'ClientVehicles', 'Geofences']
        ]);
        $this->set('clientInfo', $clientInfo);
        $this->set('_serialize', ['clientInfo']);
    }

    public function add()
    {
        $clientInfo = $this->ClientInfos->newEntity();
        if ($this->request->is('post')) {
//            $data = $this->request->data;
//            pr($data); die();






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
