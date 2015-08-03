<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\ClientInfosTable;
use App\Model\Table\ClientContactsTable;
use App\Model\Table\UsersTable;

use Cake\ORM\TableRegistry;
use Cake\Core\App;
use Cake\Utility\Text;


class ClientInfosController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'contain' => ['ClientTypes', 'CompanyTypes']
        ];
        $this->set('clientInfos', $this->paginate($this->ClientInfos));
        $this->set('_serialize', ['clientInfos']);
    }

    public function view($id = null)
    {
        $clientInfo = $this->ClientInfos->get($id, [
            'contain' => ['ClientTypes', 'CompanyTypes', 'Users', 'ClientContacts', 'ClientAlertSettings', 'ClientDeviceSubscriptions', 'ClientDevices', 'ClientDriverAssignments', 'ClientDrivers', 'ClientExpenses', 'ClientNotifications', 'ClientPersons', 'ClientPublicids', 'ClientReports', 'ClientTripPaths', 'ClientVehicleAssignments', 'ClientVehicles', 'Geofences']
        ]);
        $this->set('clientInfo', $clientInfo);
        $this->set('_serialize', ['clientInfo']);
    }

    public function add()
    {
        $clientInfo = $this->ClientInfos->newEntity();

        if ($this->request->is('post')) {

            $userid = Text::uuid();
            $contactid = Text::uuid();
            $clientid = Text::uuid();

            $this->loadModel('Users');
            $users = $this->Users->newEntity();
            $users = $this->Users->patchEntity($users, $this->request->data['Users']);
            $this->Users->save($users);

            $this->loadModel('ClientInfos');
            $clientInfos = $this->ClientInfos->newEntity();
            $clientInfos = $this->ClientInfos->patchEntity($clientInfos, $this->request->data['ClientInfos']);
            $this->ClientInfos->save($clientInfos);

            $this->loadModel('ClientContacts');
            $clientContacts = $this->ClientContacts->newEntity();
            $clientContacts = $this->ClientContacts->patchEntity($clientContacts, $this->request->data['ClientContacts']);
            $this->ClientContacts->save($clientContacts);

            return $this->redirect(['controller' => 'ClientDevices', 'action' => 'add']);
        }
        $clientTypes = $this->ClientInfos->ClientTypes->find('list', ['limit' => 200]);
        $companyTypes = $this->ClientInfos->CompanyTypes->find('list', ['limit' => 200]);
        $this->set(compact('clientInfo', 'clientTypes', 'companyTypes'));
        $this->set('_serialize', ['clientInfo']);
    }

    public function edit($id = null)
    {
        $clientInfo = $this->ClientInfos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clientInfo = $this->ClientInfos->patchEntity($clientInfo, $this->request->data);
            if ($this->ClientInfos->save($clientInfo)) {
                $this->Flash->success(__('The client info has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The client info could not be saved. Please, try again.'));
            }
        }
        $clientTypes = $this->ClientInfos->ClientTypes->find('list', ['limit' => 200]);
        $companyTypes = $this->ClientInfos->CompanyTypes->find('list', ['limit' => 200]);
        $this->set(compact('clientInfo', 'clientTypes', 'companyTypes'));
        $this->set('_serialize', ['clientInfo']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clientInfo = $this->ClientInfos->get($id);
        if ($this->ClientInfos->delete($clientInfo)) {
            $this->Flash->success(__('The client info has been deleted.'));
        } else {
            $this->Flash->error(__('The client info could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
