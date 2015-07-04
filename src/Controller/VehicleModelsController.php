<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * VehicleModels Controller
 *
 * @property \App\Model\Table\VehicleModelTable $VehicleModels
 */
class VehicleModelsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['VehicleTypes']
        ];
        $this->set('vehicleModels', $this->paginate($this->VehicleModels));
        $this->set('_serialize', ['vehicleModels']);
    }

    /**
     * View method
     *
     * @param string|null $id Vehicle Model id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vehicleModels = $this->VehicleModel->get($id, [
            'contain' => ['VehicleTypes', 'ClientDevices']
        ]);
        $this->set('vehicleModels', $vehicleModels);
        $this->set('_serialize', ['vehicleModels']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vehicleModels = $this->VehicleModels->newEntity();
        if ($this->request->is('post')) {
            $vehicleModels = $this->VehicleModels->patchEntity($vehicleModels, $this->request->data);
            if ($this->VehicleModels->save($vehicleModels)) {
                $this->Flash->success(__('The vehicle model has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehicle model could not be saved. Please, try again.'));
            }
        }
        $vehicleTypes = $this->VehicleModels->VehicleTypes->find('list', ['limit' => 200]);
        $this->set(compact('vehicleModels', 'vehicleTypes'));
        $this->set('_serialize', ['vehicleModels']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Vehicle Model id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vehicleModels = $this->VehicleModel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vehicleModels = $this->VehicleModels->patchEntity($vehicleModels, $this->request->data);
            if ($this->VehicleModels->save($vehicleModels)) {
                $this->Flash->success(__('The vehicle model has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The vehicle model could not be saved. Please, try again.'));
            }
        }
        $vehicleTypes = $this->VehicleModels->VehicleTypes->find('list', ['limit' => 200]);
        $this->set(compact('vehicleModels', 'vehicleTypes'));
        $this->set('_serialize', ['vehicleModels']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Vehicle Model id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vehicleModels = $this->VehicleModels->get($id);
        if ($this->VehicleModels->delete($vehicleModels)) {
            $this->Flash->success(__('The vehicle model has been deleted.'));
        } else {
            $this->Flash->error(__('The vehicle model could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
