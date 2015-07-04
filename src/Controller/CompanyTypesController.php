<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CompanyTypes Controller
 *
 * @property \App\Model\Table\CompanyTypesTable $CompanyTypes
 */
class CompanyTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('companyTypes', $this->paginate($this->CompanyTypes));
        $this->set('_serialize', ['companyTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Company Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $companyType = $this->CompanyTypes->get($id, [
            'contain' => ['ClientInfos']
        ]);
        $this->set('companyType', $companyType);
        $this->set('_serialize', ['companyType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $companyType = $this->CompanyTypes->newEntity();
        if ($this->request->is('post')) {
            $companyType = $this->CompanyTypes->patchEntity($companyType, $this->request->data);
            if ($this->CompanyTypes->save($companyType)) {
                $this->Flash->success(__('The company type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The company type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('companyType'));
        $this->set('_serialize', ['companyType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Company Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $companyType = $this->CompanyTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $companyType = $this->CompanyTypes->patchEntity($companyType, $this->request->data);
            if ($this->CompanyTypes->save($companyType)) {
                $this->Flash->success(__('The company type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The company type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('companyType'));
        $this->set('_serialize', ['companyType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Company Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $companyType = $this->CompanyTypes->get($id);
        if ($this->CompanyTypes->delete($companyType)) {
            $this->Flash->success(__('The company type has been deleted.'));
        } else {
            $this->Flash->error(__('The company type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
