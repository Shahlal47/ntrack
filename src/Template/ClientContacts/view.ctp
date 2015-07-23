<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Contact Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Contact'), ['action' => 'edit', $clientContact->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Contact'), ['action' => 'delete', $clientContact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientContact->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contact Devices'), ['controller' => 'ClientContactDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact Device'), ['controller' => 'ClientContactDevices', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Device Geofences'), ['controller' => 'ClientDeviceGeofences', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device Geofence'), ['controller' => 'ClientDeviceGeofences', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Trip Paths'), ['controller' => 'ClientTripPaths', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Trip Path'), ['controller' => 'ClientTripPaths', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Name</td>
                    <td><?= h($clientContact->name) ?></td>
                </tr>
                <tr>
                    <td class="text-right">National ID</td>
                    <td><?= h($clientContact->nationalid) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Email</td>
                    <td><?= h($clientContact->email) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Mobile Number</td>
                    <td><?= h($clientContact->mobible) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Phone Number</td>
                    <td><?= h($clientContact->phone) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Fax</td>
                    <td><?= h($clientContact->fax) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Mobile Home</td>
                    <td><?= h($clientContact->mobile_home) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Mobile Office</td>
                    <td><?= h($clientContact->mobile_office) ?></td>
                </tr>
                <tr>
                    <td class="text-right">User ID</td>
                    <td><?= h($clientContact->user_id) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Client Information</td>
                    <td><?= h($clientContact->client_info_id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>