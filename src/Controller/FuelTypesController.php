<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FuelTypes Controller
 *
 * @property \App\Model\Table\FuelTypesTable $FuelTypes
 */
class FuelTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('fuelTypes', $this->paginate($this->FuelTypes));
        $this->set('_serialize', ['fuelTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Fuel Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fuelType = $this->FuelTypes->get($id, [
            'contain' => ['ClientVehicles']
        ]);
        $this->set('fuelType', $fuelType);
        $this->set('_serialize', ['fuelType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fuelType = $this->FuelTypes->newEntity();
        if ($this->request->is('post')) {
            $fuelType = $this->FuelTypes->patchEntity($fuelType, $this->request->data);
            if ($this->FuelTypes->save($fuelType)) {
                $this->Flash->success(__('The fuel type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fuel type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fuelType'));
        $this->set('_serialize', ['fuelType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Fuel Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fuelType = $this->FuelTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fuelType = $this->FuelTypes->patchEntity($fuelType, $this->request->data);
            if ($this->FuelTypes->save($fuelType)) {
                $this->Flash->success(__('The fuel type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The fuel type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('fuelType'));
        $this->set('_serialize', ['fuelType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Fuel Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fuelType = $this->FuelTypes->get($id);
        if ($this->FuelTypes->delete($fuelType)) {
            $this->Flash->success(__('The fuel type has been deleted.'));
        } else {
            $this->Flash->error(__('The fuel type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
