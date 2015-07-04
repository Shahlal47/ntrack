<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientNotifications Controller
 *
 * @property \App\Model\Table\ClientNotificationsTable $ClientNotifications
 */
class ClientNotificationsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'NotificationTypes']
        ];
        $this->set('clientNotifications', $this->paginate($this->ClientNotifications));
        $this->set('_serialize', ['clientNotifications']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Notification id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientNotification = $this->ClientNotifications->get($id, [
            'contain' => ['ClientInfos', 'NotificationTypes']
        ]);
        $this->set('clientNotification', $clientNotification);
        $this->set('_serialize', ['clientNotification']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientNotification = $this->ClientNotifications->newEntity();
        if ($this->request->is('post')) {
            $clientNotification = $this->ClientNotifications->patchEntity($clientNotification, $this->request->data);
            if ($this->ClientNotifications->save($clientNotification)) {
                $this->Flash->success(__('The client notification has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client notification could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientNotifications->ClientInfos->find('list', ['limit' => 200]);
        $notificationTypes = $this->ClientNotifications->NotificationTypes->find('list', ['limit' => 200]);
        $this->set(compact('clientNotification', 'clientInfos', 'notificationTypes'));
        $this->set('_serialize', ['clientNotification']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Notification id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientNotification = $this->ClientNotifications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientNotification = $this->ClientNotifications->patchEntity($clientNotification, $this->request->data);
            if ($this->ClientNotifications->save($clientNotification)) {
                $this->Flash->success(__('The client notification has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client notification could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientNotifications->ClientInfos->find('list', ['limit' => 200]);
        $notificationTypes = $this->ClientNotifications->NotificationTypes->find('list', ['limit' => 200]);
        $this->set(compact('clientNotification', 'clientInfos', 'notificationTypes'));
        $this->set('_serialize', ['clientNotification']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Notification id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientNotification = $this->ClientNotifications->get($id);
        if ($this->ClientNotifications->delete($clientNotification)) {
            $this->Flash->success(__('The client notification has been deleted.'));
        } else {
            $this->Flash->error(__('The client notification could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
