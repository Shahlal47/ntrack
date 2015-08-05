<?php
namespace App\Controller;

use App\Controller\AppController;

class TestsController extends AppController
{
    public function index()
    {
        $this->set('tests', $this->paginate($this->Tests));
        $this->set('_serialize', ['tests']);
    }

    public function view($id = null)
    {
        $test = $this->Tests->get($id, [
            'contain' => []
        ]);
        $this->set('test', $test);
        $this->set('_serialize', ['test']);
    }

    public function add()
    {
        $test = $this->Tests->newEntity();
        if ($this->request->is('post')) {
            $test = $this->Tests->patchEntity($test, $this->request->data);
            if ($this->Tests->save($test)) {
                $this->Flash->success(__('The test has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The test could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('test'));
        $this->set('_serialize', ['test']);
    }

    public function edit($id = null)
    {
        $test = $this->Tests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $test = $this->Tests->patchEntity($test, $this->request->data);
            if ($this->Tests->save($test)) {
                $this->Flash->success(__('The test has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The test could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('test'));
        $this->set('_serialize', ['test']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $test = $this->Tests->get($id);
        if ($this->Tests->delete($test)) {
            $this->Flash->success(__('The test has been deleted.'));
        } else {
            $this->Flash->error(__('The test could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }

    public function option_form(){

    }

    public function page_one(){

    }

    public function page_two(){

    }

    public function page_three(){

    }

    public function page_four(){

    }

    public function page_five(){

    }

    public function page_six(){

    }

    public function page_seven(){

    }

    public function page_eight(){

    }

    public function page_nine(){

    }

    public function page_ten(){

    }
}
