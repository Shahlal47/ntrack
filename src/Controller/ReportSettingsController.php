<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ReportSettings Controller
 *
 * @property \App\Model\Table\ReportSettingsTable $ReportSettings
 */
class ReportSettingsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('reportSettings', $this->paginate($this->ReportSettings));
        $this->set('_serialize', ['reportSettings']);
    }

    /**
     * View method
     *
     * @param string|null $id Report Setting id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $reportSetting = $this->ReportSettings->get($id, [
            'contain' => []
        ]);
        $this->set('reportSetting', $reportSetting);
        $this->set('_serialize', ['reportSetting']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $reportSetting = $this->ReportSettings->newEntity();
        if ($this->request->is('post')) {
            $reportSetting = $this->ReportSettings->patchEntity($reportSetting, $this->request->data);
            if ($this->ReportSettings->save($reportSetting)) {
                $this->Flash->success(__('The report setting has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The report setting could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('reportSetting'));
        $this->set('_serialize', ['reportSetting']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Report Setting id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $reportSetting = $this->ReportSettings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $reportSetting = $this->ReportSettings->patchEntity($reportSetting, $this->request->data);
            if ($this->ReportSettings->save($reportSetting)) {
                $this->Flash->success(__('The report setting has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The report setting could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('reportSetting'));
        $this->set('_serialize', ['reportSetting']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Report Setting id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $reportSetting = $this->ReportSettings->get($id);
        if ($this->ReportSettings->delete($reportSetting)) {
            $this->Flash->success(__('The report setting has been deleted.'));
        } else {
            $this->Flash->error(__('The report setting could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
