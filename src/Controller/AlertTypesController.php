<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AlertTypes Controller
 *
 * @property \App\Model\Table\AlertTypesTable $AlertTypes
 */
class AlertTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('alertTypes', $this->paginate($this->AlertTypes));
        $this->set('_serialize', ['alertTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Alert Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alertType = $this->AlertTypes->get($id, [
            'contain' => ['ClientAlertSettings', 'DeviceAlerts']
        ]);
        $this->set('alertType', $alertType);
        $this->set('_serialize', ['alertType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alertType = $this->AlertTypes->newEntity();
        if ($this->request->is('post')) {
            $alertType = $this->AlertTypes->patchEntity($alertType, $this->request->data);
            if ($this->AlertTypes->save($alertType)) {
                $this->Flash->success(__('The alert type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alert type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('alertType'));
        $this->set('_serialize', ['alertType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alert Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alertType = $this->AlertTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alertType = $this->AlertTypes->patchEntity($alertType, $this->request->data);
            if ($this->AlertTypes->save($alertType)) {
                $this->Flash->success(__('The alert type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alert type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('alertType'));
        $this->set('_serialize', ['alertType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alert Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alertType = $this->AlertTypes->get($id);
        if ($this->AlertTypes->delete($alertType)) {
            $this->Flash->success(__('The alert type has been deleted.'));
        } else {
            $this->Flash->error(__('The alert type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
