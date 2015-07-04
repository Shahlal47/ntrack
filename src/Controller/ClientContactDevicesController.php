<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientContactDevices Controller
 *
 * @property \App\Model\Table\ClientContactDevicesTable $ClientContactDevices
 */
class ClientContactDevicesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientContacts', 'ClientDevices']
        ];
        $this->set('clientContactDevices', $this->paginate($this->ClientContactDevices));
        $this->set('_serialize', ['clientContactDevices']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Contact Device id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientContactDevice = $this->ClientContactDevices->get($id, [
            'contain' => ['ClientContacts', 'ClientDevices']
        ]);
        $this->set('clientContactDevice', $clientContactDevice);
        $this->set('_serialize', ['clientContactDevice']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientContactDevice = $this->ClientContactDevices->newEntity();
        if ($this->request->is('post')) {
            $clientContactDevice = $this->ClientContactDevices->patchEntity($clientContactDevice, $this->request->data);
            if ($this->ClientContactDevices->save($clientContactDevice)) {
                $this->Flash->success(__('The client contact device has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client contact device could not be saved. Please, try again.'));
            }
        }
        $clientContacts = $this->ClientContactDevices->ClientContacts->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientContactDevices->ClientDevices->find('list', ['limit' => 200]);
        $this->set(compact('clientContactDevice', 'clientContacts', 'clientDevices'));
        $this->set('_serialize', ['clientContactDevice']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Contact Device id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientContactDevice = $this->ClientContactDevices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientContactDevice = $this->ClientContactDevices->patchEntity($clientContactDevice, $this->request->data);
            if ($this->ClientContactDevices->save($clientContactDevice)) {
                $this->Flash->success(__('The client contact device has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client contact device could not be saved. Please, try again.'));
            }
        }
        $clientContacts = $this->ClientContactDevices->ClientContacts->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientContactDevices->ClientDevices->find('list', ['limit' => 200]);
        $this->set(compact('clientContactDevice', 'clientContacts', 'clientDevices'));
        $this->set('_serialize', ['clientContactDevice']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Contact Device id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientContactDevice = $this->ClientContactDevices->get($id);
        if ($this->ClientContactDevices->delete($clientContactDevice)) {
            $this->Flash->success(__('The client contact device has been deleted.'));
        } else {
            $this->Flash->error(__('The client contact device could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
