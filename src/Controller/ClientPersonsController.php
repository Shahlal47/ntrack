<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientPersons Controller
 *
 * @property \App\Model\Table\ClientPersonsTable $ClientPersons
 */
class ClientPersonsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientDevices', 'ClientInfos']
        ];
        $this->set('clientPersons', $this->paginate($this->ClientPersons));
        $this->set('_serialize', ['clientPersons']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Person id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientPerson = $this->ClientPersons->get($id, [
            'contain' => ['ClientDevices', 'ClientInfos']
        ]);
        $this->set('clientPerson', $clientPerson);
        $this->set('_serialize', ['clientPerson']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientPerson = $this->ClientPersons->newEntity();
        if ($this->request->is('post')) {
            $clientPerson = $this->ClientPersons->patchEntity($clientPerson, $this->request->data);
            if ($this->ClientPersons->save($clientPerson)) {
                $this->Flash->success(__('The client person has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client person could not be saved. Please, try again.'));
            }
        }
        $clientDevices = $this->ClientPersons->ClientDevices->find('list', ['limit' => 200]);
        $clientInfos = $this->ClientPersons->ClientInfos->find('list', ['limit' => 200]);
//        $identificationTypes = $this->ClientPersons->IdentificationTypes->find('list', ['limit' => 200]);
        $this->set(compact('clientPerson', 'clientDevices', 'clientInfos', 'identificationTypes'));
        $this->set('_serialize', ['clientPerson']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Person id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientPerson = $this->ClientPersons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientPerson = $this->ClientPersons->patchEntity($clientPerson, $this->request->data);
            if ($this->ClientPersons->save($clientPerson)) {
                $this->Flash->success(__('The client person has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client person could not be saved. Please, try again.'));
            }
        }
        $clientDevices = $this->ClientPersons->ClientDevices->find('list', ['limit' => 200]);
        $clientInfos = $this->ClientPersons->ClientInfos->find('list', ['limit' => 200]);
//        $identificationTypes = $this->ClientPersons->IdentificationTypes->find('list', ['limit' => 200]);
        $this->set(compact('clientPerson', 'clientDevices', 'clientInfos', 'identificationTypes'));
        $this->set('_serialize', ['clientPerson']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Person id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientPerson = $this->ClientPersons->get($id);
        if ($this->ClientPersons->delete($clientPerson)) {
            $this->Flash->success(__('The client person has been deleted.'));
        } else {
            $this->Flash->error(__('The client person could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
