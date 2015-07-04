<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GeofenceTypes Controller
 *
 * @property \App\Model\Table\GeofenceTypesTable $GeofenceTypes
 */
class GeofenceTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('geofenceTypes', $this->paginate($this->GeofenceTypes));
        $this->set('_serialize', ['geofenceTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Geofence Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $geofenceType = $this->GeofenceTypes->get($id, [
            'contain' => ['Geofences']
        ]);
        $this->set('geofenceType', $geofenceType);
        $this->set('_serialize', ['geofenceType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $geofenceType = $this->GeofenceTypes->newEntity();
        if ($this->request->is('post')) {
            $geofenceType = $this->GeofenceTypes->patchEntity($geofenceType, $this->request->data);
            if ($this->GeofenceTypes->save($geofenceType)) {
                $this->Flash->success(__('The geofence type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The geofence type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('geofenceType'));
        $this->set('_serialize', ['geofenceType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Geofence Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $geofenceType = $this->GeofenceTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $geofenceType = $this->GeofenceTypes->patchEntity($geofenceType, $this->request->data);
            if ($this->GeofenceTypes->save($geofenceType)) {
                $this->Flash->success(__('The geofence type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The geofence type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('geofenceType'));
        $this->set('_serialize', ['geofenceType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Geofence Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $geofenceType = $this->GeofenceTypes->get($id);
        if ($this->GeofenceTypes->delete($geofenceType)) {
            $this->Flash->success(__('The geofence type has been deleted.'));
        } else {
            $this->Flash->error(__('The geofence type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
