<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ExpenseTypes Controller
 *
 * @property \App\Model\Table\ExpenseTypesTable $ExpenseTypes
 */
class ExpenseTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('expenseTypes', $this->paginate($this->ExpenseTypes));
        $this->set('_serialize', ['expenseTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Expense Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $expenseType = $this->ExpenseTypes->get($id, [
            'contain' => ['ClientExpenses']
        ]);
        $this->set('expenseType', $expenseType);
        $this->set('_serialize', ['expenseType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $expenseType = $this->ExpenseTypes->newEntity();
        if ($this->request->is('post')) {
            $expenseType = $this->ExpenseTypes->patchEntity($expenseType, $this->request->data);
            if ($this->ExpenseTypes->save($expenseType)) {
                $this->Flash->success(__('The expense type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The expense type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('expenseType'));
        $this->set('_serialize', ['expenseType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Expense Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $expenseType = $this->ExpenseTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $expenseType = $this->ExpenseTypes->patchEntity($expenseType, $this->request->data);
            if ($this->ExpenseTypes->save($expenseType)) {
                $this->Flash->success(__('The expense type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The expense type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('expenseType'));
        $this->set('_serialize', ['expenseType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Expense Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $expenseType = $this->ExpenseTypes->get($id);
        if ($this->ExpenseTypes->delete($expenseType)) {
            $this->Flash->success(__('The expense type has been deleted.'));
        } else {
            $this->Flash->error(__('The expense type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
