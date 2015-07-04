<?php
namespace App\Controller;

use App\Controller\AppController;


class ClientContactsController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'Users']
        ];
        $this->set('clientContacts', $this->paginate($this->ClientContacts));
        $this->set('_serialize', ['clientContacts']);
    }

    public function view($id = null)
    {
        $clientContact = $this->ClientContacts->get($id, [
            'contain' => ['ClientInfos', 'Users', 'ClientAlertSettings', 'ClientContactDevices', 'ClientDeviceGeofences', 'ClientDriverAssignments', 'ClientDrivers', 'ClientExpenses', 'ClientTripPaths', 'ClientVehicleAssignments', 'Geofences']
        ]);
        $this->set('clientContact', $clientContact);
        $this->set('_serialize', ['clientContact']);
    }

    public function add()
    {
        $clientContact = $this->ClientContacts->newEntity();
        if ($this->request->is('post')) {
            $clientContact = $this->ClientContacts->patchEntity($clientContact, $this->request->data);
            if ($this->ClientContacts->save($clientContact)) {
                $this->Flash->success(__('The client contact has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client contact could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clientContact'));
        $this->set('_serialize', ['clientContact']);
    }

    public function edit($id = null)
    {
        $clientContact = $this->ClientContacts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientContact = $this->ClientContacts->patchEntity($clientContact, $this->request->data);
            if ($this->ClientContacts->save($clientContact)) {
                $this->Flash->success(__('The client contact has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client contact could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clientContact'));
        $this->set('_serialize', ['clientContact']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientContact = $this->ClientContacts->get($id);
        if ($this->ClientContacts->delete($clientContact)) {
            $this->Flash->success(__('The client contact has been deleted.'));
        } else {
            $this->Flash->error(__('The client contact could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
