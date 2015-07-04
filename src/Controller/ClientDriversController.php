<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientDrivers Controller
 *
 * @property \App\Model\Table\ClientDriversTable $ClientDrivers
 */
class ClientDriversController extends AppController
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
        $this->set('clientDrivers', $this->paginate($this->ClientDrivers));
        $this->set('_serialize', ['clientDrivers']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Driver id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientDriver = $this->ClientDrivers->get($id, [
            'contain' => ['ClientInfos', 'ClientContacts', 'ClientDriverAssignments']
        ]);
        $this->set('clientDriver', $clientDriver);
        $this->set('_serialize', ['clientDriver']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientDriver = $this->ClientDrivers->newEntity();
        if ($this->request->is('post')) {
            $clientDriver = $this->ClientDrivers->patchEntity($clientDriver, $this->request->data);
            if ($this->ClientDrivers->save($clientDriver)) {
                $this->Flash->success(__('The client driver has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client driver could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientDrivers->ClientInfos->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientDrivers->ClientContacts->find('list', ['limit' => 200]);
        $this->set(compact('clientDriver', 'clientInfos', 'clientContacts'));
        $this->set('_serialize', ['clientDriver']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Driver id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientDriver = $this->ClientDrivers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientDriver = $this->ClientDrivers->patchEntity($clientDriver, $this->request->data);
            if ($this->ClientDrivers->save($clientDriver)) {
                $this->Flash->success(__('The client driver has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client driver could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientDrivers->ClientInfos->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientDrivers->ClientContacts->find('list', ['limit' => 200]);
        $this->set(compact('clientDriver', 'clientInfos', 'clientContacts'));
        $this->set('_serialize', ['clientDriver']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Driver id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientDriver = $this->ClientDrivers->get($id);
        if ($this->ClientDrivers->delete($clientDriver)) {
            $this->Flash->success(__('The client driver has been deleted.'));
        } else {
            $this->Flash->error(__('The client driver could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
