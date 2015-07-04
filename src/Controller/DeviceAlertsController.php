<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DeviceAlerts Controller
 *
 * @property \App\Model\Table\DeviceAlertsTable $DeviceAlerts
 */
class DeviceAlertsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['AlertTypes']
        ];
        $this->set('deviceAlerts', $this->paginate($this->DeviceAlerts));
        $this->set('_serialize', ['deviceAlerts']);
    }

    /**
     * View method
     *
     * @param string|null $id Device Alert id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $deviceAlert = $this->DeviceAlerts->get($id, [
            'contain' => ['AlertTypes']
        ]);
        $this->set('deviceAlert', $deviceAlert);
        $this->set('_serialize', ['deviceAlert']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $deviceAlert = $this->DeviceAlerts->newEntity();
        if ($this->request->is('post')) {
            $deviceAlert = $this->DeviceAlerts->patchEntity($deviceAlert, $this->request->data);
            if ($this->DeviceAlerts->save($deviceAlert)) {
                $this->Flash->success(__('The device alert has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The device alert could not be saved. Please, try again.'));
            }
        }
        $alertTypes = $this->DeviceAlerts->AlertTypes->find('list', ['limit' => 200]);
        $this->set(compact('deviceAlert', 'alertTypes'));
        $this->set('_serialize', ['deviceAlert']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Device Alert id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $deviceAlert = $this->DeviceAlerts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $deviceAlert = $this->DeviceAlerts->patchEntity($deviceAlert, $this->request->data);
            if ($this->DeviceAlerts->save($deviceAlert)) {
                $this->Flash->success(__('The device alert has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The device alert could not be saved. Please, try again.'));
            }
        }
        $alertTypes = $this->DeviceAlerts->AlertTypes->find('list', ['limit' => 200]);
        $this->set(compact('deviceAlert', 'alertTypes'));
        $this->set('_serialize', ['deviceAlert']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Device Alert id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $deviceAlert = $this->DeviceAlerts->get($id);
        if ($this->DeviceAlerts->delete($deviceAlert)) {
            $this->Flash->success(__('The device alert has been deleted.'));
        } else {
            $this->Flash->error(__('The device alert could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
