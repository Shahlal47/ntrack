<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClientExpenses Controller
 *
 * @property \App\Model\Table\ClientExpensesTable $ClientExpenses
 */
class ClientExpensesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientInfos', 'ExpenseTypes', 'ClientDevices', 'ClientContacts']
        ];
        $this->set('clientExpenses', $this->paginate($this->ClientExpenses));
        $this->set('_serialize', ['clientExpenses']);
    }

    /**
     * View method
     *
     * @param string|null $id Client Expense id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clientExpense = $this->ClientExpenses->get($id, [
            'contain' => ['ClientInfos', 'ExpenseTypes', 'ClientDevices', 'ClientContacts']
        ]);
        $this->set('clientExpense', $clientExpense);
        $this->set('_serialize', ['clientExpense']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clientExpense = $this->ClientExpenses->newEntity();
        if ($this->request->is('post')) {
            $clientExpense = $this->ClientExpenses->patchEntity($clientExpense, $this->request->data);
            if ($this->ClientExpenses->save($clientExpense)) {
                $this->Flash->success(__('The client expense has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client expense could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientExpenses->ClientInfos->find('list', ['limit' => 200]);
        $expenseTypes = $this->ClientExpenses->ExpenseTypes->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientExpenses->ClientDevices->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientExpenses->ClientContacts->find('list', ['limit' => 200]);
        $this->set(compact('clientExpense', 'clientInfos', 'expenseTypes', 'clientDevices', 'clientContacts'));
        $this->set('_serialize', ['clientExpense']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Client Expense id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clientExpense = $this->ClientExpenses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientExpense = $this->ClientExpenses->patchEntity($clientExpense, $this->request->data);
            if ($this->ClientExpenses->save($clientExpense)) {
                $this->Flash->success(__('The client expense has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client expense could not be saved. Please, try again.'));
            }
        }
        $clientInfos = $this->ClientExpenses->ClientInfos->find('list', ['limit' => 200]);
        $expenseTypes = $this->ClientExpenses->ExpenseTypes->find('list', ['limit' => 200]);
        $clientDevices = $this->ClientExpenses->ClientDevices->find('list', ['limit' => 200]);
        $clientContacts = $this->ClientExpenses->ClientContacts->find('list', ['limit' => 200]);
        $this->set(compact('clientExpense', 'clientInfos', 'expenseTypes', 'clientDevices', 'clientContacts'));
        $this->set('_serialize', ['clientExpense']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Client Expense id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientExpense = $this->ClientExpenses->get($id);
        if ($this->ClientExpenses->delete($clientExpense)) {
            $this->Flash->success(__('The client expense has been deleted.'));
        } else {
            $this->Flash->error(__('The client expense could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
