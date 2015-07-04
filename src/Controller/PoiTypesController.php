<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PoiTypes Controller
 *
 * @property \App\Model\Table\PoiTypesTable $PoiTypes
 */
class PoiTypesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('poiTypes', $this->paginate($this->PoiTypes));
        $this->set('_serialize', ['poiTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Poi Type id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $poiType = $this->PoiTypes->get($id, [
            'contain' => []
        ]);
        $this->set('poiType', $poiType);
        $this->set('_serialize', ['poiType']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $poiType = $this->PoiTypes->newEntity();
        if ($this->request->is('post')) {
            $poiType = $this->PoiTypes->patchEntity($poiType, $this->request->data);
            if ($this->PoiTypes->save($poiType)) {
                $this->Flash->success(__('The poi type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The poi type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('poiType'));
        $this->set('_serialize', ['poiType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Poi Type id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $poiType = $this->PoiTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $poiType = $this->PoiTypes->patchEntity($poiType, $this->request->data);
            if ($this->PoiTypes->save($poiType)) {
                $this->Flash->success(__('The poi type has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The poi type could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('poiType'));
        $this->set('_serialize', ['poiType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Poi Type id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $poiType = $this->PoiTypes->get($id);
        if ($this->PoiTypes->delete($poiType)) {
            $this->Flash->success(__('The poi type has been deleted.'));
        } else {
            $this->Flash->error(__('The poi type could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
