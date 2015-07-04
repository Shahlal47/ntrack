<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientTripPaths Controller
 *
 * @property \App\Model\Table\ClientTripPathsTable $ClientTripPaths
 */
class ClientTripPathsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'ClientContacts']
        ];
        $this->set('clientTripPaths', $this->paginate($this->ClientTripPaths));
        $this->set('_serialize', ['clientTripPaths']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Trip Path id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientTripPath = $this->ClientTripPaths->get($id, [
            'contain' => ['ClientInfos', 'ClientContacts']
        ]);
        $this->set('clientTripPath', $clientTripPath);
        $this->set('_serialize', ['clientTripPath']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientTripPath = $this->ClientTripPaths->newEntity();
        if ($this->request->is('post')) {
            $clientTripPath = $this->ClientTripPaths->patchEntity($clientTripPath, $this->request->data);
            if ($this->ClientTripPaths->save($clientTripPath)) {
                $this->Flash->success(__('The client trip path has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client trip path could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientTripPaths->ClientInfos->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientTripPaths->ClientContacts->find('list', ['limit' => 200]);
        $this->set(compact('clientTripPath', 'clientInfos', 'clientContacts'));
        $this->set('_serialize', ['clientTripPath']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Trip Path id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientTripPath = $this->ClientTripPaths->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientTripPath = $this->ClientTripPaths->patchEntity($clientTripPath, $this->request->data);
            if ($this->ClientTripPaths->save($clientTripPath)) {
                $this->Flash->success(__('The client trip path has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client trip path could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientTripPaths->ClientInfos->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientTripPaths->ClientContacts->find('list', ['limit' => 200]);
        $this->set(compact('clientTripPath', 'clientInfos', 'clientContacts'));
        $this->set('_serialize', ['clientTripPath']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Trip Path id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientTripPath = $this->ClientTripPaths->get($id);
        if ($this->ClientTripPaths->delete($clientTripPath)) {
            $this->Flash->success(__('The client trip path has been deleted.'));
        } else {
            $this->Flash->error(__('The client trip path could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
