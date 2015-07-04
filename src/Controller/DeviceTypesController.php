<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DeviceTypes Controller
 *
 * @property \App\Model\Table\DeviceTypesTable $DeviceTypes
 */
class DeviceTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('deviceTypes', $this->paginate($this->DeviceTypes));
        $this->set('_serialize', ['deviceTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Device Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deviceType = $this->DeviceTypes->get($id, [
            'contain' => ['ClientDevices', 'DeviceInfos']
        ]);
        $this->set('deviceType', $deviceType);
        $this->set('_serialize', ['deviceType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deviceType = $this->DeviceTypes->newEntity();
        if ($this->request->is('post')) {
            $deviceType = $this->DeviceTypes->patchEntity($deviceType, $this->request->data);
            if ($this->DeviceTypes->save($deviceType)) {
                $this->Flash->success(__('The device type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The device type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('deviceType'));
        $this->set('_serialize', ['deviceType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Device Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deviceType = $this->DeviceTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deviceType = $this->DeviceTypes->patchEntity($deviceType, $this->request->data);
            if ($this->DeviceTypes->save($deviceType)) {
                $this->Flash->success(__('The device type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The device type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('deviceType'));
        $this->set('_serialize', ['deviceType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Device Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deviceType = $this->DeviceTypes->get($id);
        if ($this->DeviceTypes->delete($deviceType)) {
            $this->Flash->success(__('The device type has been deleted.'));
        } else {
            $this->Flash->error(__('The device type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
