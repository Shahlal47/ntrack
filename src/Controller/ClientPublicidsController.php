<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientPublicids Controller
 *
 * @property \App\Model\Table\ClientPublicidsTable $ClientPublicids
 */
class ClientPublicidsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'ClientDevices']
        ];
        $this->set('clientPublicids', $this->paginate($this->ClientPublicids));
        $this->set('_serialize', ['clientPublicids']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Publicid id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientPublicid = $this->ClientPublicids->get($id, [
            'contain' => ['ClientInfos', 'ClientDevices']
        ]);
        $this->set('clientPublicid', $clientPublicid);
        $this->set('_serialize', ['clientPublicid']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientPublicid = $this->ClientPublicids->newEntity();
        if ($this->request->is('post')) {
            $clientPublicid = $this->ClientPublicids->patchEntity($clientPublicid, $this->request->data);
            if ($this->ClientPublicids->save($clientPublicid)) {
                $this->Flash->success(__('The client publicid has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client publicid could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientPublicids->ClientInfos->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientPublicids->ClientDevices->find('list', ['limit' => 200]);
        $this->set(compact('clientPublicid', 'clientInfos', 'clientDevices'));
        $this->set('_serialize', ['clientPublicid']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Publicid id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientPublicid = $this->ClientPublicids->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientPublicid = $this->ClientPublicids->patchEntity($clientPublicid, $this->request->data);
            if ($this->ClientPublicids->save($clientPublicid)) {
                $this->Flash->success(__('The client publicid has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client publicid could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientPublicids->ClientInfos->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientPublicids->ClientDevices->find('list', ['limit' => 200]);
        $this->set(compact('clientPublicid', 'clientInfos', 'clientDevices'));
        $this->set('_serialize', ['clientPublicid']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Publicid id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientPublicid = $this->ClientPublicids->get($id);
        if ($this->ClientPublicids->delete($clientPublicid)) {
            $this->Flash->success(__('The client publicid has been deleted.'));
        } else {
            $this->Flash->error(__('The client publicid could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
