<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientDeviceSubscriptions Controller
 *
 * @property \App\Model\Table\ClientDeviceSubscriptionsTable $ClientDeviceSubscriptions
 */
class ClientDeviceSubscriptionsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'AccountTypes']
        ];
        $this->set('clientDeviceSubscriptions', $this->paginate($this->ClientDeviceSubscriptions));
        $this->set('_serialize', ['clientDeviceSubscriptions']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Device Subscription id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientDeviceSubscription = $this->ClientDeviceSubscriptions->get($id, [
            'contain' => ['ClientInfos', 'AccountTypes', 'ClientDevices']
        ]);
        $this->set('clientDeviceSubscription', $clientDeviceSubscription);
        $this->set('_serialize', ['clientDeviceSubscription']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientDeviceSubscription = $this->ClientDeviceSubscriptions->newEntity();
        if ($this->request->is('post')) {
            $clientDeviceSubscription = $this->ClientDeviceSubscriptions->patchEntity($clientDeviceSubscription, $this->request->data);
            if ($this->ClientDeviceSubscriptions->save($clientDeviceSubscription)) {
                $this->Flash->success(__('The client device subscription has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client device subscription could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientDeviceSubscriptions->ClientInfos->find('list', ['limit' => 200]);
        $accountTypes = $this->ClientDeviceSubscriptions->AccountTypes->find('list', ['limit' => 200]);
        $this->set(compact('clientDeviceSubscription', 'clientInfos', 'accountTypes'));
        $this->set('_serialize', ['clientDeviceSubscription']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Device Subscription id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientDeviceSubscription = $this->ClientDeviceSubscriptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientDeviceSubscription = $this->ClientDeviceSubscriptions->patchEntity($clientDeviceSubscription, $this->request->data);
            if ($this->ClientDeviceSubscriptions->save($clientDeviceSubscription)) {
                $this->Flash->success(__('The client device subscription has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client device subscription could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientDeviceSubscriptions->ClientInfos->find('list', ['limit' => 200]);
        $accountTypes = $this->ClientDeviceSubscriptions->AccountTypes->find('list', ['limit' => 200]);
        $this->set(compact('clientDeviceSubscription', 'clientInfos', 'accountTypes'));
        $this->set('_serialize', ['clientDeviceSubscription']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Device Subscription id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientDeviceSubscription = $this->ClientDeviceSubscriptions->get($id);
        if ($this->ClientDeviceSubscriptions->delete($clientDeviceSubscription)) {
            $this->Flash->success(__('The client device subscription has been deleted.'));
        } else {
            $this->Flash->error(__('The client device subscription could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
