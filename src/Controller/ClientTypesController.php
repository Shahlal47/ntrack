<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientTypes Controller
 *
 * @property \App\Model\Table\ClientTypesTable $ClientTypes
 */
class ClientTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('clientTypes', $this->paginate($this->ClientTypes));
        $this->set('_serialize', ['clientTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientType = $this->ClientTypes->get($id, [
            'contain' => ['ClientInfos']
        ]);
        $this->set('clientType', $clientType);
        $this->set('_serialize', ['clientType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientType = $this->ClientTypes->newEntity();
        if ($this->request->is('post')) {
            $clientType = $this->ClientTypes->patchEntity($clientType, $this->request->data);
            if ($this->ClientTypes->save($clientType)) {
                $this->Flash->success(__('The client type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clientType'));
        $this->set('_serialize', ['clientType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientType = $this->ClientTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientType = $this->ClientTypes->patchEntity($clientType, $this->request->data);
            if ($this->ClientTypes->save($clientType)) {
                $this->Flash->success(__('The client type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clientType'));
        $this->set('_serialize', ['clientType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientType = $this->ClientTypes->get($id);
        if ($this->ClientTypes->delete($clientType)) {
            $this->Flash->success(__('The client type has been deleted.'));
        } else {
            $this->Flash->error(__('The client type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
