<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Geofences Controller
 *
 * @property \App\Model\Table\GeofencesTable $Geofences
 */
class GeofencesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['GeofenceTypes', 'ClientInfos', 'ClientContacts']
        ];
        $this->set('geofences', $this->paginate($this->Geofences));
        $this->set('_serialize', ['geofences']);
    }

    /**
     * View method
     *
     * @param string|null $id Geofence id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geofence = $this->Geofences->get($id, [
            'contain' => ['GeofenceTypes', 'ClientInfos', 'ClientContacts']
        ]);
        $this->set('geofence', $geofence);
        $this->set('_serialize', ['geofence']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geofence = $this->Geofences->newEntity();
        if ($this->request->is('post')) {
            $geofence = $this->Geofences->patchEntity($geofence, $this->request->data);
            if ($this->Geofences->save($geofence)) {
                $this->Flash->success(__('The geofence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The geofence could not be saved. Please, try again.'));
            }
        }
        $geofenceTypes = $this->Geofences->GeofenceTypes->find('list', ['limit' => 200]);
        $clientInfos = $this->Geofences->ClientInfos->find('list', ['limit' => 200]);
        $clientContacts = $this->Geofences->ClientContacts->find('list', ['limit' => 200]);
        $this->set(compact('geofence', 'geofenceTypes', 'clientInfos', 'clientContacts'));
        $this->set('_serialize', ['geofence']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Geofence id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geofence = $this->Geofences->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geofence = $this->Geofences->patchEntity($geofence, $this->request->data);
            if ($this->Geofences->save($geofence)) {
                $this->Flash->success(__('The geofence has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The geofence could not be saved. Please, try again.'));
            }
        }
        $geofenceTypes = $this->Geofences->GeofenceTypes->find('list', ['limit' => 200]);
        $clientInfos = $this->Geofences->ClientInfos->find('list', ['limit' => 200]);
        $clientContacts = $this->Geofences->ClientContacts->find('list', ['limit' => 200]);
        $this->set(compact('geofence', 'geofenceTypes', 'clientInfos', 'clientContacts'));
        $this->set('_serialize', ['geofence']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Geofence id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geofence = $this->Geofences->get($id);
        if ($this->Geofences->delete($geofence)) {
            $this->Flash->success(__('The geofence has been deleted.'));
        } else {
            $this->Flash->error(__('The geofence could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
