<?php
namespace App\Controller;

use App\Controller\AppController;


class ClientDevicesController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'DeviceInfos', 'VehicleTypes', 'DeviceTypes', 'ClientDeviceSubscriptions', 'VehicleModels']
        ];
        $this->set('clientDevices', $this->paginate($this->ClientDevices));
        $this->set('_serialize', ['clientDevices']);
    }

    public function view($id = null)
    {
        $clientDevice = $this->ClientDevices->get($id, [
            'contain' => ['ClientInfos', 'DeviceInfos', 'VehicleTypes', 'DeviceTypes', 'ClientDeviceSubscriptions', 'VehicleModels', 'ClientAlertSettings', 'ClientContactDevices', 'ClientDeviceGeofences', 'ClientExpenses', 'ClientPersons', 'ClientPublicids', 'ClientVehicles']
        ]);
        $this->set('clientDevice', $clientDevice);
        $this->set('_serialize', ['clientDevice']);
    }

    public function add()
    {
        $clientDevice = $this->ClientDevices->newEntity();
        if ($this->request->is('post')) {
            $clientDevice = $this->ClientDevices->patchEntity($clientDevice, $this->request->data);
            if ($this->ClientDevices->save($clientDevice)) {
                $this->Flash->success(__('The client device has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client device could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientDevices->ClientInfos->find('list', ['limit' => 200]);
        $deviceInfos = $this->ClientDevices->DeviceInfos->find('list', ['limit' => 200]);
        $vehicleTypes = $this->ClientDevices->VehicleTypes->find('list', ['limit' => 200]);
        $deviceTypes = $this->ClientDevices->DeviceTypes->find('list', ['limit' => 200]);
        $clientDeviceSubscriptions = $this->ClientDevices->ClientDeviceSubscriptions->find('list', ['limit' => 200]);
//        $trackers = $this->ClientDevices->Trackers->find('list', ['limit' => 200]);
        $vehicleModels = $this->ClientDevices->VehicleModels->find('list', ['limit' => 200]);
        $this->set(compact('clientDevice', 'clientInfos', 'deviceInfos', 'vehicleTypes', 'deviceTypes', 'clientDeviceSubscriptions', 'vehicleModels'));
        $this->set('_serialize', ['clientDevice']);
    }

    public function edit($id = null)
    {
        $clientDevice = $this->ClientDevices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientDevice = $this->ClientDevices->patchEntity($clientDevice, $this->request->data);
            if ($this->ClientDevices->save($clientDevice)) {
                $this->Flash->success(__('The client device has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client device could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientDevices->ClientInfos->find('list', ['limit' => 200]);
        $deviceInfos = $this->ClientDevices->DeviceInfos->find('list', ['limit' => 200]);
        $vehicleTypes = $this->ClientDevices->VehicleTypes->find('list', ['limit' => 200]);
        $deviceTypes = $this->ClientDevices->DeviceTypes->find('list', ['limit' => 200]);
        $clientDeviceSubscriptions = $this->ClientDevices->ClientDeviceSubscriptions->find('list', ['limit' => 200]);
//        $trackers = $this->ClientDevices->Trackers->find('list', ['limit' => 200]);
        $vehicleModels = $this->ClientDevices->VehicleModels->find('list', ['limit' => 200]);
        $this->set(compact('clientDevice', 'clientInfos', 'deviceInfos', 'vehicleTypes', 'deviceTypes', 'clientDeviceSubscriptions', 'vehicleModels'));
        $this->set('_serialize', ['clientDevice']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientDevice = $this->ClientDevices->get($id);
        if ($this->ClientDevices->delete($clientDevice)) {
            $this->Flash->success(__('The client device has been deleted.'));
        } else {
            $this->Flash->error(__('The client device could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
