<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\Query;

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

//    private function _getDeviceId() {
//        $autid = rand(12345678, 98989898);
//        return $autid;
//    }
//    public function get_devid() {
//        return new CakeResponse(array(
//            'type' => 'application/json',
//            'body' => $this->_getDeviceId()
//        ));
//    }
    public function add($id = null) {
        $clientDevice = $this->ClientDevices->newEntity();
        if ($this->request->is('post')) {
//            $a = $this->request->data; pr($a); die();
            $deviceid = $this->request->data['deviceid']; //pr($deviceid); die();

            $clientDevice = $this->ClientDevices->newEntity();
            $clientDevice = $this->ClientDevices->patchEntity($clientDevice, $this->request->data);
//            $this->ClientDevices->save($clientDevice);

            if ($this->ClientDevices->save($clientDevice)) {
                $this->_add_device_in_db($deviceid);
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



    private function _add_device_in_db($deviceid) {
        $dbc = $this->_getConnection ('dbdevices');
        if ($dbc == null) {
            return "Fail to connect DB.";
        } else {
            $flg = $this->_create_devicetbl($dbc, $deviceid);
            $this->_closeConnection ($dbc);
        }
        return $flg;
    }

    private function _create_devicetbl($dbc, $deviceid) {
        $sql = "DROP TABLE IF EXISTS `d" . $deviceid . "`;";
        $result = $this->_execute ($dbc, $sql);
        if (!$result) {
            return $dbc->error;
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
        $result = $this->_execute($dbc, $sql);
        if (!$result) {
            return $dbc->error;
        }
        return "";
    }
}
