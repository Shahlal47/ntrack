<?php
namespace App\Controller;

use Cake\Datasource\ConnectionManager;
use App\Controller\AppController;
use Cake\ORM\Query;
use Cake\ORM\TableRegistry;
use Cake\ORM\Entity;
use Cake\Network\Exception\NotFoundException;

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

    public function add($id = null) {
        $clientDevice = $this->ClientDevices->newEntity();
        if ($this->request->is('post')) {
            $deviceid = $this->request->data['deviceid'];
            $clientDevice = $this->ClientDevices->patchEntity($clientDevice, $this->request->data);
            if ($this->ClientDevices->save($clientDevice)) {
                $this->create_device_table($deviceid);
                $this->redirect(array('action' => 'index', $id));
            }
        }
        $clientInfos = $this->ClientDevices->ClientInfos->find('list', ['limit' => 200]);
        $deviceInfos = $this->ClientDevices->DeviceInfos->find('list', ['limit' => 200]);
        $vehicleTypes = $this->ClientDevices->VehicleTypes->find('list', ['limit' => 200]);
        $deviceTypes = $this->ClientDevices->DeviceTypes->find('list', ['limit' => 200]);
        $clientDeviceSubscriptions = $this->ClientDevices->ClientDeviceSubscriptions->find('list', ['limit' => 200]);
        $vehicleModels = $this->ClientDevices->VehicleModels->find('list', ['limit' => 200]);
        $this->set(compact('clientDevice', 'clientInfos', 'deviceInfos', 'vehicleTypes', 'deviceTypes', 'clientDeviceSubscriptions', 'vehicleModels'));
        $this->set('_serialize', ['clientDevice']);
    }

    public function add_bk()
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

    private function create_device_table($deviceid) {
        $db = ConnectionManager::get('db2');
        $drop_table = "DROP TABLE IF EXISTS `d" . $deviceid . "`;";
        $result = $db->execute($drop_table);
        if (!$result) {
            return $result->error;
        }
        $sql = "
				CREATE TABLE `d" . $deviceid . "` (
				  `event_number` BIGINT NOT NULL AUTO_INCREMENT,
				  `device_time` time DEFAULT NULL,
				  `server_time` time DEFAULT NULL,
				  `device_date` date DEFAULT NULL,
				  `server_date` date DEFAULT NULL,
				  `latitude` varchar(36) DEFAULT NULL,
				  `longitude` varchar(36) DEFAULT NULL,
				  `altitude` varchar(36) DEFAULT NULL,
				  `speed` varchar(24) DEFAULT NULL,
				  `direction` varchar(60) DEFAULT NULL,
				  `odometer` varchar(60) DEFAULT NULL,
				  `hdop` varchar(60) DEFAULT NULL,
				  `fuel` varchar(24) DEFAULT NULL,
				  `sat_cnt` varchar(60) DEFAULT NULL,
				  `veh_status` varchar(60) DEFAULT NULL,
				  `msg_id` varchar(60) DEFAULT NULL,
				  `msg_info` varchar(150) DEFAULT NULL,
				  `reserve1` varchar(24) DEFAULT NULL,
				  `reserve2` varchar(24) DEFAULT NULL,
				  `reserve3` varchar(24) DEFAULT NULL,
				  `reserve4` VARCHAR(24) DEFAULT NULL,
				  `reserve5` VARCHAR(24) DEFAULT NULL,
				  `reserve6` VARCHAR(24) DEFAULT NULL,
				  `reserve7` VARCHAR(24) DEFAULT NULL,
				  `reserve8` VARCHAR(24) DEFAULT NULL,
				  `reserve9` VARCHAR(24) DEFAULT NULL,
				  `reserve10` VARCHAR(24) DEFAULT NULL,
				  PRIMARY KEY (`event_number`),
						INDEX  `d" . $deviceid . "_server_date`(`server_date`),
								INDEX  `d" . $deviceid . "_server_time`(`server_date`),
										INDEX  `d" . $deviceid . "_server_datetime`(`server_date`,`server_time`),
												INDEX  `d" . $deviceid . "_lat_lng`(`latitude`,`longitude`)
														) ENGINE=MyISAM DEFAULT CHARSET=latin1;
														";
        // echo $sql;
        $result = $db->execute($sql);
        if (!$result) {
            return $result->error;
        }
        return "";
    }
}
