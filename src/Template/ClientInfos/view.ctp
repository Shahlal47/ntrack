<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Information Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Info'), ['action' => 'edit', $clientInfo->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Info'), ['action' => 'delete', $clientInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientInfo->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Types'), ['controller' => 'ClientTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Type'), ['controller' => 'ClientTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Company Types'), ['controller' => 'CompanyTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Company Type'), ['controller' => 'CompanyTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Notifications'), ['controller' => 'ClientNotifications', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Notification'), ['controller' => 'ClientNotifications', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Persons'), ['controller' => 'ClientPersons', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Person'), ['controller' => 'ClientPersons', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Publicids'), ['controller' => 'ClientPublicids', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Publicid'), ['controller' => 'ClientPublicids', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Reports'), ['controller' => 'ClientReports', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Report'), ['controller' => 'ClientReports', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Trip Paths'), ['controller' => 'ClientTripPaths', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Trip Path'), ['controller' => 'ClientTripPaths', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Client Name</td><td><?= h($clientInfo->name) ?></td></tr>
                <tr>
                    <td class="text-right">Client Type</td>
                    <td>
                        <?= $clientInfo->has('client_type') ? $this->Html->link($clientInfo->client_type->name, ['controller' => 'ClientTypes', 'action' => 'view', $clientInfo->client_type->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Company Type</td>
                    <td>
                        <?= $clientInfo->has('company_type') ? $this->Html->link($clientInfo->company_type->name, ['controller' => 'CompanyTypes', 'action' => 'view', $clientInfo->company_type->id]) : '' ?>
                    </td>
                </tr>
                <tr><td class="text-right">Address</td><td><?= h($clientInfo->address) ?></td></tr>
                <tr><td class="text-right">Buyer Number</td><td><?= h($clientInfo->buyerno) ?></td></tr>
                <tr><td class="text-right">User ID</td><td><?= h($clientInfo->user_id) ?></td></tr>
                <tr><td class="text-right">Client Contact</td><td><?= h($clientInfo->client_contact_id) ?></td></tr>
                <tr><td class="text-right">Client Company Logo</td><td><?= h($clientInfo->logo) ?></td></tr>
                <tr><td class="text-right">Sensor</td><td><?= h($clientInfo->sensor) ?></td></tr>
            </table>
        </div>
    </div>
</div>