<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DeviceInfos Controller
 *
 * @property \App\Model\Table\DeviceInfosTable $DeviceInfos
 */
class DeviceInfosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['DeviceTypes']
        ];
        $this->set('deviceInfos', $this->paginate($this->DeviceInfos));
        $this->set('_serialize', ['deviceInfos']);
    }

    /**
     * View method
     *
     * @param string|null $id Device Info id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deviceInfo = $this->DeviceInfos->get($id, [
            'contain' => ['DeviceTypes', 'ClientDevices']
        ]);
        $this->set('deviceInfo', $deviceInfo);
        $this->set('_serialize', ['deviceInfo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deviceInfo = $this->DeviceInfos->newEntity();
        if ($this->request->is('post')) {
            $deviceInfo = $this->DeviceInfos->patchEntity($deviceInfo, $this->request->data);
            if ($this->DeviceInfos->save($deviceInfo)) {
                $this->Flash->success(__('The device info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The device info could not be saved. Please, try again.'));
            }
        }
        $deviceTypes = $this->DeviceInfos->DeviceTypes->find('list', ['limit' => 200]);
        $this->set(compact('deviceInfo', 'deviceTypes'));
        $this->set('_serialize', ['deviceInfo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Device Info id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deviceInfo = $this->DeviceInfos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deviceInfo = $this->DeviceInfos->patchEntity($deviceInfo, $this->request->data);
            if ($this->DeviceInfos->save($deviceInfo)) {
                $this->Flash->success(__('The device info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The device info could not be saved. Please, try again.'));
            }
        }
        $deviceTypes = $this->DeviceInfos->DeviceTypes->find('list', ['limit' => 200]);
        $this->set(compact('deviceInfo', 'deviceTypes'));
        $this->set('_serialize', ['deviceInfo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Device Info id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deviceInfo = $this->DeviceInfos->get($id);
        if ($this->DeviceInfos->delete($deviceInfo)) {
            $this->Flash->success(__('The device info has been deleted.'));
        } else {
            $this->Flash->error(__('The device info could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
