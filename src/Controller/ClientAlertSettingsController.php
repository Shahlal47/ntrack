<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientAlertSettings Controller
 *
 * @property \App\Model\Table\ClientAlertSettingsTable $ClientAlertSettings
 */
class ClientAlertSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'AlertTypes', 'ClientContacts', 'ClientDevices']
        ];
        $this->set('clientAlertSettings', $this->paginate($this->ClientAlertSettings));
        $this->set('_serialize', ['clientAlertSettings']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Alert Setting id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientAlertSetting = $this->ClientAlertSettings->get($id, [
            'contain' => ['ClientInfos', 'AlertTypes', 'ClientContacts', 'ClientDevices']
        ]);
        $this->set('clientAlertSetting', $clientAlertSetting);
        $this->set('_serialize', ['clientAlertSetting']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientAlertSetting = $this->ClientAlertSettings->newEntity();
        if ($this->request->is('post')) {
            $clientAlertSetting = $this->ClientAlertSettings->patchEntity($clientAlertSetting, $this->request->data);
            if ($this->ClientAlertSettings->save($clientAlertSetting)) {
                $this->Flash->success(__('The client alert setting has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client alert setting could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientAlertSettings->ClientInfos->find('list', ['limit' => 200]);
        $alertTypes = $this->ClientAlertSettings->AlertTypes->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientAlertSettings->ClientContacts->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientAlertSettings->ClientDevices->find('list', ['limit' => 200]);
        $this->set(compact('clientAlertSetting', 'clientInfos', 'alertTypes', 'clientContacts', 'clientDevices'));
        $this->set('_serialize', ['clientAlertSetting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Alert Setting id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientAlertSetting = $this->ClientAlertSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientAlertSetting = $this->ClientAlertSettings->patchEntity($clientAlertSetting, $this->request->data);
            if ($this->ClientAlertSettings->save($clientAlertSetting)) {
                $this->Flash->success(__('The client alert setting has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client alert setting could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientAlertSettings->ClientInfos->find('list', ['limit' => 200]);
        $alertTypes = $this->ClientAlertSettings->AlertTypes->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientAlertSettings->ClientContacts->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientAlertSettings->ClientDevices->find('list', ['limit' => 200]);
        $this->set(compact('clientAlertSetting', 'clientInfos', 'alertTypes', 'clientContacts', 'clientDevices'));
        $this->set('_serialize', ['clientAlertSetting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Alert Setting id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientAlertSetting = $this->ClientAlertSettings->get($id);
        if ($this->ClientAlertSettings->delete($clientAlertSetting)) {
            $this->Flash->success(__('The client alert setting has been deleted.'));
        } else {
            $this->Flash->error(__('The client alert setting could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
