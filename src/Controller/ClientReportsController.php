<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientReports Controller
 *
 * @property \App\Model\Table\ClientReportsTable $ClientReports
 */
class ClientReportsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos']
        ];
        $this->set('clientReports', $this->paginate($this->ClientReports));
        $this->set('_serialize', ['clientReports']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Report id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientReport = $this->ClientReports->get($id, [
            'contain' => ['ClientInfos']
        ]);
        $this->set('clientReport', $clientReport);
        $this->set('_serialize', ['clientReport']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientReport = $this->ClientReports->newEntity();
        if ($this->request->is('post')) {
            $clientReport = $this->ClientReports->patchEntity($clientReport, $this->request->data);
            if ($this->ClientReports->save($clientReport)) {
                $this->Flash->success(__('The client report has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client report could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientReports->ClientInfos->find('list', ['limit' => 200]);
        $this->set(compact('clientReport', 'clientInfos'));
        $this->set('_serialize', ['clientReport']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Report id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientReport = $this->ClientReports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientReport = $this->ClientReports->patchEntity($clientReport, $this->request->data);
            if ($this->ClientReports->save($clientReport)) {
                $this->Flash->success(__('The client report has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client report could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientReports->ClientInfos->find('list', ['limit' => 200]);
        $this->set(compact('clientReport', 'clientInfos'));
        $this->set('_serialize', ['clientReport']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Report id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientReport = $this->ClientReports->get($id);
        if ($this->ClientReports->delete($clientReport)) {
            $this->Flash->success(__('The client report has been deleted.'));
        } else {
            $this->Flash->error(__('The client report could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
