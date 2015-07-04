<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientVehicles Controller
 *
 * @property \App\Model\Table\ClientVehiclesTable $ClientVehicles
 */
class ClientVehiclesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['FuelTypes', 'VehicleTypes', 'ClientInfos', 'ClientDevices']
        ];
        $this->set('clientVehicles', $this->paginate($this->ClientVehicles));
        $this->set('_serialize', ['clientVehicles']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Vehicle id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientVehicle = $this->ClientVehicles->get($id, [
            'contain' => ['FuelTypes', 'VehicleTypes', 'ClientInfos', 'ClientDevices', 'ClientDriverAssignments', 'ClientVehicleAssignments']
        ]);
        $this->set('clientVehicle', $clientVehicle);
        $this->set('_serialize', ['clientVehicle']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientVehicle = $this->ClientVehicles->newEntity();
        if ($this->request->is('post')) {
            $clientVehicle = $this->ClientVehicles->patchEntity($clientVehicle, $this->request->data);
            if ($this->ClientVehicles->save($clientVehicle)) {
                $this->Flash->success(__('The client vehicle has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client vehicle could not be saved. Please, try again.'));
            }
        }
        $fuelTypes = $this->ClientVehicles->FuelTypes->find('list', ['limit' => 200]);
        $vehicleTypes = $this->ClientVehicles->VehicleTypes->find('list', ['limit' => 200]);
        $clientInfos = $this->ClientVehicles->ClientInfos->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientVehicles->ClientDevices->find('list', ['limit' => 200]);
        $this->set(compact('clientVehicle', 'fuelTypes', 'vehicleTypes', 'clientInfos', 'clientDevices'));
        $this->set('_serialize', ['clientVehicle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Vehicle id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientVehicle = $this->ClientVehicles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientVehicle = $this->ClientVehicles->patchEntity($clientVehicle, $this->request->data);
            if ($this->ClientVehicles->save($clientVehicle)) {
                $this->Flash->success(__('The client vehicle has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client vehicle could not be saved. Please, try again.'));
            }
        }
        $fuelTypes = $this->ClientVehicles->FuelTypes->find('list', ['limit' => 200]);
        $vehicleTypes = $this->ClientVehicles->VehicleTypes->find('list', ['limit' => 200]);
        $clientInfos = $this->ClientVehicles->ClientInfos->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientVehicles->ClientDevices->find('list', ['limit' => 200]);
        $this->set(compact('clientVehicle', 'fuelTypes', 'vehicleTypes', 'clientInfos', 'clientDevices'));
        $this->set('_serialize', ['clientVehicle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Vehicle id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientVehicle = $this->ClientVehicles->get($id);
        if ($this->ClientVehicles->delete($clientVehicle)) {
            $this->Flash->success(__('The client vehicle has been deleted.'));
        } else {
            $this->Flash->error(__('The client vehicle could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
