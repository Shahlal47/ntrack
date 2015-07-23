<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientContacts Controller
 *
 * @property \App\Model\Table\ClientContactsTable $ClientContacts
 */
class ClientContactsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('clientContacts', $this->paginate($this->ClientContacts));
        $this->set('_serialize', ['clientContacts']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Contact id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientContact = $this->ClientContacts->get($id, [
            'contain' => ['Users', 'ClientInfos', 'ClientAlertSettings', 'ClientContactDevices', 'ClientDeviceGeofences', 'ClientDriverAssignments', 'ClientDrivers', 'ClientExpenses', 'ClientTripPaths', 'ClientVehicleAssignments', 'Geofences']
        ]);
        $this->set('clientContact', $clientContact);
        $this->set('_serialize', ['clientContact']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
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

    /**
     * Edit method
     *
     * @param string|null $id Client Contact id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
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

    /**
     * Delete method
     *
     * @param string|null $id Client Contact id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
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
