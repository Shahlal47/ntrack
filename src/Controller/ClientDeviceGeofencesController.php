<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientDeviceGeofences Controller
 *
 * @property \App\Model\Table\ClientDeviceGeofencesTable $ClientDeviceGeofences
 */
class ClientDeviceGeofencesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientContacts', 'ClientDevices', 'Geofences']
        ];
        $this->set('clientDeviceGeofences', $this->paginate($this->ClientDeviceGeofences));
        $this->set('_serialize', ['clientDeviceGeofences']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Device Geofence id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientDeviceGeofence = $this->ClientDeviceGeofences->get($id, [
            'contain' => ['ClientContacts', 'ClientDevices', 'Geofences']
        ]);
        $this->set('clientDeviceGeofence', $clientDeviceGeofence);
        $this->set('_serialize', ['clientDeviceGeofence']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientDeviceGeofence = $this->ClientDeviceGeofences->newEntity();
        if ($this->request->is('post')) {
            $clientDeviceGeofence = $this->ClientDeviceGeofences->patchEntity($clientDeviceGeofence, $this->request->data);
            if ($this->ClientDeviceGeofences->save($clientDeviceGeofence)) {
                $this->Flash->success(__('The client device geofence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client device geofence could not be saved. Please, try again.'));
            }
        }
        $clientContacts = $this->ClientDeviceGeofences->ClientContacts->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientDeviceGeofences->ClientDevices->find('list', ['limit' => 200]);
        $geofences = $this->ClientDeviceGeofences->Geofences->find('list', ['limit' => 200]);
        $this->set(compact('clientDeviceGeofence', 'clientContacts', 'clientDevices', 'geofences'));
        $this->set('_serialize', ['clientDeviceGeofence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Device Geofence id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientDeviceGeofence = $this->ClientDeviceGeofences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientDeviceGeofence = $this->ClientDeviceGeofences->patchEntity($clientDeviceGeofence, $this->request->data);
            if ($this->ClientDeviceGeofences->save($clientDeviceGeofence)) {
                $this->Flash->success(__('The client device geofence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client device geofence could not be saved. Please, try again.'));
            }
        }
        $clientContacts = $this->ClientDeviceGeofences->ClientContacts->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientDeviceGeofences->ClientDevices->find('list', ['limit' => 200]);
        $geofences = $this->ClientDeviceGeofences->Geofences->find('list', ['limit' => 200]);
        $this->set(compact('clientDeviceGeofence', 'clientContacts', 'clientDevices', 'geofences'));
        $this->set('_serialize', ['clientDeviceGeofence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Device Geofence id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientDeviceGeofence = $this->ClientDeviceGeofences->get($id);
        if ($this->ClientDeviceGeofences->delete($clientDeviceGeofence)) {
            $this->Flash->success(__('The client device geofence has been deleted.'));
        } else {
            $this->Flash->error(__('The client device geofence could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
