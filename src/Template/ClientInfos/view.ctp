<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
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
<div class="portlet light">
    <h2><?= h($clientInfo->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($clientInfo->id) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($clientInfo->name) ?></p>
            <h6 class="subheader"><?= __('Client Type') ?></h6>
            <p><?= $clientInfo->has('client_type') ? $this->Html->link($clientInfo->client_type->name, ['controller' => 'ClientTypes', 'action' => 'view', $clientInfo->client_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Company Type') ?></h6>
            <p><?= $clientInfo->has('company_type') ? $this->Html->link($clientInfo->company_type->name, ['controller' => 'CompanyTypes', 'action' => 'view', $clientInfo->company_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($clientInfo->address) ?></p>
            <h6 class="subheader"><?= __('Buyerno') ?></h6>
            <p><?= h($clientInfo->buyerno) ?></p>
            <h6 class="subheader"><?= __('Website') ?></h6>
            <p><?= h($clientInfo->website) ?></p>
            <h6 class="subheader"><?= __('User Id') ?></h6>
            <p><?= h($clientInfo->user_id) ?></p>
            <h6 class="subheader"><?= __('Client Contact Id') ?></h6>
            <p><?= h($clientInfo->client_contact_id) ?></p>
            <h6 class="subheader"><?= __('Logo') ?></h6>
            <p><?= h($clientInfo->logo) ?></p>
            <h6 class="subheader"><?= __('Sensors') ?></h6>
            <p><?= h($clientInfo->sensors) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('NumOfTrackers') ?></h6>
            <p><?= $this->Number->format($clientInfo->numOfTrackers) ?></p>
            <h6 class="subheader"><?= __('NumOfGeoFences') ?></h6>
            <p><?= $this->Number->format($clientInfo->numOfGeoFences) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientInfo->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientInfo->modified) ?></p>
        </div>
    </div>
</div>
<div class="portlet light table-responsive">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($clientInfo->users)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Username') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Hash Change Password') ?></th>
            <th><?= __('User Type Id') ?></th>
            <th><?= __('Active') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Block Type') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->username) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->created) ?></td>
            <td><?= h($users->modified) ?></td>
            <td><?= h($users->hash_change_password) ?></td>
            <td><?= h($users->user_type_id) ?></td>
            <td><?= h($users->active) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->client_contact_id) ?></td>
            <td><?= h($users->client_info_id) ?></td>
            <td><?= h($users->block_type) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="portlet light table-responsive">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Contacts') ?></h4>
    <?php if (!empty($clientInfo->client_contacts)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Mobile') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Nationalid') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Phone') ?></th>
            <th><?= __('Fax') ?></th>
            <th><?= __('Mobile Home') ?></th>
            <th><?= __('Mobile Office') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_contacts as $clientContacts): ?>
        <tr>
            <td><?= h($clientContacts->id) ?></td>
            <td><?= h($clientContacts->client_info_id) ?></td>
            <td><?= h($clientContacts->mobile) ?></td>
            <td><?= h($clientContacts->email) ?></td>
            <td><?= h($clientContacts->name) ?></td>
            <td><?= h($clientContacts->created) ?></td>
            <td><?= h($clientContacts->modified) ?></td>
            <td><?= h($clientContacts->nationalid) ?></td>
            <td><?= h($clientContacts->user_id) ?></td>
            <td><?= h($clientContacts->phone) ?></td>
            <td><?= h($clientContacts->fax) ?></td>
            <td><?= h($clientContacts->mobile_home) ?></td>
            <td><?= h($clientContacts->mobile_office) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientContacts', 'action' => 'view', $clientContacts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientContacts', 'action' => 'edit', $clientContacts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientContacts', 'action' => 'delete', $clientContacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientContacts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="portlet light">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Alert Settings') ?></h4>
    <?php if (!empty($clientInfo->client_alert_settings)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Alert Type Id') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Client Device Id') ?></th>
            <th><?= __('Is Sms') ?></th>
            <th><?= __('Is Email') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_alert_settings as $clientAlertSettings): ?>
        <tr>
            <td><?= h($clientAlertSettings->id) ?></td>
            <td><?= h($clientAlertSettings->client_info_id) ?></td>
            <td><?= h($clientAlertSettings->alert_type_id) ?></td>
            <td><?= h($clientAlertSettings->client_contact_id) ?></td>
            <td><?= h($clientAlertSettings->created) ?></td>
            <td><?= h($clientAlertSettings->modified) ?></td>
            <td><?= h($clientAlertSettings->client_device_id) ?></td>
            <td><?= h($clientAlertSettings->is_sms) ?></td>
            <td><?= h($clientAlertSettings->is_email) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientAlertSettings', 'action' => 'view', $clientAlertSettings->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientAlertSettings', 'action' => 'edit', $clientAlertSettings->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientAlertSettings', 'action' => 'delete', $clientAlertSettings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientAlertSettings->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="portlet light">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Device Subscriptions') ?></h4>
    <?php if (!empty($clientInfo->client_device_subscriptions)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Subscribe Date') ?></th>
            <th><?= __('Expire Date') ?></th>
            <th><?= __('Active') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Account Type Id') ?></th>
            <th><?= __('Client Deviceid') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_device_subscriptions as $clientDeviceSubscriptions): ?>
        <tr>
            <td><?= h($clientDeviceSubscriptions->id) ?></td>
            <td><?= h($clientDeviceSubscriptions->client_info_id) ?></td>
            <td><?= h($clientDeviceSubscriptions->subscribe_date) ?></td>
            <td><?= h($clientDeviceSubscriptions->expire_date) ?></td>
            <td><?= h($clientDeviceSubscriptions->active) ?></td>
            <td><?= h($clientDeviceSubscriptions->created) ?></td>
            <td><?= h($clientDeviceSubscriptions->modified) ?></td>
            <td><?= h($clientDeviceSubscriptions->account_type_id) ?></td>
            <td><?= h($clientDeviceSubscriptions->client_deviceid) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'view', $clientDeviceSubscriptions->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'edit', $clientDeviceSubscriptions->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'delete', $clientDeviceSubscriptions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceSubscriptions->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="portlet light table-responsive">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Devices') ?></h4>
    <?php if (!empty($clientInfo->client_devices)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Deviceid') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Active') ?></th>
            <th><?= __('Imei') ?></th>
            <th><?= __('Mob No') ?></th>
            <th><?= __('Speed Limit') ?></th>
            <th><?= __('Minimum Mileage') ?></th>
            <th><?= __('Maintenance Mileage') ?></th>
            <th><?= __('Fuel Consumption') ?></th>
            <th><?= __('Comments') ?></th>
            <th><?= __('Device Info Id') ?></th>
            <th><?= __('Vehicle Type Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Device Type Id') ?></th>
            <th><?= __('Client Device Subscription Id') ?></th>
            <th><?= __('Tags') ?></th>
            <th><?= __('Credit File Num') ?></th>
            <th><?= __('Tracker Id') ?></th>
            <th><?= __('Vehicle Model Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_devices as $clientDevices): ?>
        <tr>
            <td><?= h($clientDevices->id) ?></td>
            <td><?= h($clientDevices->client_info_id) ?></td>
            <td><?= h($clientDevices->deviceid) ?></td>
            <td><?= h($clientDevices->created) ?></td>
            <td><?= h($clientDevices->modified) ?></td>
            <td><?= h($clientDevices->active) ?></td>
            <td><?= h($clientDevices->imei) ?></td>
            <td><?= h($clientDevices->mob_no) ?></td>
            <td><?= h($clientDevices->speed_limit) ?></td>
            <td><?= h($clientDevices->minimum_mileage) ?></td>
            <td><?= h($clientDevices->maintenance_mileage) ?></td>
            <td><?= h($clientDevices->fuel_consumption) ?></td>
            <td><?= h($clientDevices->comments) ?></td>
            <td><?= h($clientDevices->device_info_id) ?></td>
            <td><?= h($clientDevices->vehicle_type_id) ?></td>
            <td><?= h($clientDevices->name) ?></td>
            <td><?= h($clientDevices->device_type_id) ?></td>
            <td><?= h($clientDevices->client_device_subscription_id) ?></td>
            <td><?= h($clientDevices->tags) ?></td>
            <td><?= h($clientDevices->credit_file_num) ?></td>
            <td><?= h($clientDevices->tracker_id) ?></td>
            <td><?= h($clientDevices->vehicle_model_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientDevices', 'action' => 'view', $clientDevices->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientDevices', 'action' => 'edit', $clientDevices->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientDevices', 'action' => 'delete', $clientDevices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDevices->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Driver Assignments') ?></h4>
    <?php if (!empty($clientInfo->client_driver_assignments)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Driver Id') ?></th>
            <th><?= __('Client Vehicle Id') ?></th>
            <th><?= __('From') ?></th>
            <th><?= __('To') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_driver_assignments as $clientDriverAssignments): ?>
        <tr>
            <td><?= h($clientDriverAssignments->id) ?></td>
            <td><?= h($clientDriverAssignments->client_info_id) ?></td>
            <td><?= h($clientDriverAssignments->client_driver_id) ?></td>
            <td><?= h($clientDriverAssignments->client_vehicle_id) ?></td>
            <td><?= h($clientDriverAssignments->from) ?></td>
            <td><?= h($clientDriverAssignments->to) ?></td>
            <td><?= h($clientDriverAssignments->client_contact_id) ?></td>
            <td><?= h($clientDriverAssignments->created) ?></td>
            <td><?= h($clientDriverAssignments->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientDriverAssignments', 'action' => 'view', $clientDriverAssignments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientDriverAssignments', 'action' => 'edit', $clientDriverAssignments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientDriverAssignments', 'action' => 'delete', $clientDriverAssignments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDriverAssignments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Drivers') ?></h4>
    <?php if (!empty($clientInfo->client_drivers)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Driving License') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Mobile') ?></th>
            <th><?= __('Join Date') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_drivers as $clientDrivers): ?>
        <tr>
            <td><?= h($clientDrivers->id) ?></td>
            <td><?= h($clientDrivers->name) ?></td>
            <td><?= h($clientDrivers->driving_license) ?></td>
            <td><?= h($clientDrivers->address) ?></td>
            <td><?= h($clientDrivers->mobile) ?></td>
            <td><?= h($clientDrivers->join_date) ?></td>
            <td><?= h($clientDrivers->client_info_id) ?></td>
            <td><?= h($clientDrivers->client_contact_id) ?></td>
            <td><?= h($clientDrivers->created) ?></td>
            <td><?= h($clientDrivers->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientDrivers', 'action' => 'view', $clientDrivers->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientDrivers', 'action' => 'edit', $clientDrivers->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientDrivers', 'action' => 'delete', $clientDrivers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDrivers->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Expenses') ?></h4>
    <?php if (!empty($clientInfo->client_expenses)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Expense Type Id') ?></th>
            <th><?= __('Client Device Id') ?></th>
            <th><?= __('Ondate') ?></th>
            <th><?= __('Amount') ?></th>
            <th><?= __('Comments') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_expenses as $clientExpenses): ?>
        <tr>
            <td><?= h($clientExpenses->id) ?></td>
            <td><?= h($clientExpenses->client_info_id) ?></td>
            <td><?= h($clientExpenses->expense_type_id) ?></td>
            <td><?= h($clientExpenses->client_device_id) ?></td>
            <td><?= h($clientExpenses->ondate) ?></td>
            <td><?= h($clientExpenses->amount) ?></td>
            <td><?= h($clientExpenses->comments) ?></td>
            <td><?= h($clientExpenses->created) ?></td>
            <td><?= h($clientExpenses->modified) ?></td>
            <td><?= h($clientExpenses->client_contact_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientExpenses', 'action' => 'view', $clientExpenses->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientExpenses', 'action' => 'edit', $clientExpenses->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientExpenses', 'action' => 'delete', $clientExpenses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientExpenses->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Notifications') ?></h4>
    <?php if (!empty($clientInfo->client_notifications)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Notifications') ?></th>
            <th><?= __('Notification Type Id') ?></th>
            <th><?= __('Pulled') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_notifications as $clientNotifications): ?>
        <tr>
            <td><?= h($clientNotifications->id) ?></td>
            <td><?= h($clientNotifications->client_info_id) ?></td>
            <td><?= h($clientNotifications->notifications) ?></td>
            <td><?= h($clientNotifications->notification_type_id) ?></td>
            <td><?= h($clientNotifications->pulled) ?></td>
            <td><?= h($clientNotifications->created) ?></td>
            <td><?= h($clientNotifications->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientNotifications', 'action' => 'view', $clientNotifications->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientNotifications', 'action' => 'edit', $clientNotifications->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientNotifications', 'action' => 'delete', $clientNotifications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientNotifications->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Persons') ?></h4>
    <?php if (!empty($clientInfo->client_persons)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Device Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Mobile') ?></th>
            <th><?= __('Image') ?></th>
            <th><?= __('Identification Type Id') ?></th>
            <th><?= __('Identification Number') ?></th>
            <th><?= __('Active') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_persons as $clientPersons): ?>
        <tr>
            <td><?= h($clientPersons->id) ?></td>
            <td><?= h($clientPersons->client_device_id) ?></td>
            <td><?= h($clientPersons->client_info_id) ?></td>
            <td><?= h($clientPersons->name) ?></td>
            <td><?= h($clientPersons->mobile) ?></td>
            <td><?= h($clientPersons->image) ?></td>
            <td><?= h($clientPersons->identification_type_id) ?></td>
            <td><?= h($clientPersons->identification_number) ?></td>
            <td><?= h($clientPersons->active) ?></td>
            <td><?= h($clientPersons->created) ?></td>
            <td><?= h($clientPersons->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientPersons', 'action' => 'view', $clientPersons->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientPersons', 'action' => 'edit', $clientPersons->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientPersons', 'action' => 'delete', $clientPersons->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientPersons->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Publicids') ?></h4>
    <?php if (!empty($clientInfo->client_publicids)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Publicid') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Device Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_publicids as $clientPublicids): ?>
        <tr>
            <td><?= h($clientPublicids->id) ?></td>
            <td><?= h($clientPublicids->publicid) ?></td>
            <td><?= h($clientPublicids->client_info_id) ?></td>
            <td><?= h($clientPublicids->client_device_id) ?></td>
            <td><?= h($clientPublicids->created) ?></td>
            <td><?= h($clientPublicids->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientPublicids', 'action' => 'view', $clientPublicids->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientPublicids', 'action' => 'edit', $clientPublicids->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientPublicids', 'action' => 'delete', $clientPublicids->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientPublicids->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Reports') ?></h4>
    <?php if (!empty($clientInfo->client_reports)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Reports') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_reports as $clientReports): ?>
        <tr>
            <td><?= h($clientReports->id) ?></td>
            <td><?= h($clientReports->client_info_id) ?></td>
            <td><?= h($clientReports->reports) ?></td>
            <td><?= h($clientReports->created) ?></td>
            <td><?= h($clientReports->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientReports', 'action' => 'view', $clientReports->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientReports', 'action' => 'edit', $clientReports->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientReports', 'action' => 'delete', $clientReports->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientReports->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Trip Paths') ?></h4>
    <?php if (!empty($clientInfo->client_trip_paths)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Trip Path') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Active') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_trip_paths as $clientTripPaths): ?>
        <tr>
            <td><?= h($clientTripPaths->id) ?></td>
            <td><?= h($clientTripPaths->client_info_id) ?></td>
            <td><?= h($clientTripPaths->client_contact_id) ?></td>
            <td><?= h($clientTripPaths->trip_path) ?></td>
            <td><?= h($clientTripPaths->created) ?></td>
            <td><?= h($clientTripPaths->modified) ?></td>
            <td><?= h($clientTripPaths->active) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientTripPaths', 'action' => 'view', $clientTripPaths->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientTripPaths', 'action' => 'edit', $clientTripPaths->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientTripPaths', 'action' => 'delete', $clientTripPaths->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientTripPaths->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Vehicle Assignments') ?></h4>
    <?php if (!empty($clientInfo->client_vehicle_assignments)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Vehicle Id') ?></th>
            <th><?= __('Client Trip Id') ?></th>
            <th><?= __('Assignment Date') ?></th>
            <th><?= __('Start Time') ?></th>
            <th><?= __('Finish Time') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_vehicle_assignments as $clientVehicleAssignments): ?>
        <tr>
            <td><?= h($clientVehicleAssignments->id) ?></td>
            <td><?= h($clientVehicleAssignments->client_info_id) ?></td>
            <td><?= h($clientVehicleAssignments->client_vehicle_id) ?></td>
            <td><?= h($clientVehicleAssignments->client_trip_id) ?></td>
            <td><?= h($clientVehicleAssignments->assignment_date) ?></td>
            <td><?= h($clientVehicleAssignments->start_time) ?></td>
            <td><?= h($clientVehicleAssignments->finish_time) ?></td>
            <td><?= h($clientVehicleAssignments->client_contact_id) ?></td>
            <td><?= h($clientVehicleAssignments->created) ?></td>
            <td><?= h($clientVehicleAssignments->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientVehicleAssignments', 'action' => 'view', $clientVehicleAssignments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientVehicleAssignments', 'action' => 'edit', $clientVehicleAssignments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientVehicleAssignments', 'action' => 'delete', $clientVehicleAssignments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicleAssignments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Vehicles') ?></h4>
    <?php if (!empty($clientInfo->client_vehicles)): ?>
    <table class="table table-bordered">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Registrtion Number') ?></th>
            <th><?= __('Vehicle Model') ?></th>
            <th><?= __('Vehicle Color') ?></th>
            <th><?= __('Speed Limit') ?></th>
            <th><?= __('Fuel Tank Size') ?></th>
            <th><?= __('Fuel Type Id') ?></th>
            <th><?= __('Vehicle Type Id') ?></th>
            <th><?= __('Registration Expire Date') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Device Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Minimum Mileage') ?></th>
            <th><?= __('Maintenance Mileage') ?></th>
            <th><?= __('Fuel Consumption') ?></th>
            <th><?= __('Comments') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->client_vehicles as $clientVehicles): ?>
        <tr>
            <td><?= h($clientVehicles->id) ?></td>
            <td><?= h($clientVehicles->registrtion_number) ?></td>
            <td><?= h($clientVehicles->vehicle_model) ?></td>
            <td><?= h($clientVehicles->vehicle_color) ?></td>
            <td><?= h($clientVehicles->speed_limit) ?></td>
            <td><?= h($clientVehicles->fuel_tank_size) ?></td>
            <td><?= h($clientVehicles->fuel_type_id) ?></td>
            <td><?= h($clientVehicles->vehicle_type_id) ?></td>
            <td><?= h($clientVehicles->registration_expire_date) ?></td>
            <td><?= h($clientVehicles->client_info_id) ?></td>
            <td><?= h($clientVehicles->client_device_id) ?></td>
            <td><?= h($clientVehicles->created) ?></td>
            <td><?= h($clientVehicles->modified) ?></td>
            <td><?= h($clientVehicles->minimum_mileage) ?></td>
            <td><?= h($clientVehicles->maintenance_mileage) ?></td>
            <td><?= h($clientVehicles->fuel_consumption) ?></td>
            <td><?= h($clientVehicles->comments) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientVehicles', 'action' => 'view', $clientVehicles->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientVehicles', 'action' => 'edit', $clientVehicles->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientVehicles', 'action' => 'delete', $clientVehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicles->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Geofences') ?></h4>
    <?php if (!empty($clientInfo->geofences)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Geofence Type Id') ?></th>
            <th><?= __('Geofence Points') ?></th>
            <th><?= __('Geo Shape') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Color') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientInfo->geofences as $geofences): ?>
        <tr>
            <td><?= h($geofences->id) ?></td>
            <td><?= h($geofences->geofence_type_id) ?></td>
            <td><?= h($geofences->geofence_points) ?></td>
            <td><?= h($geofences->geo_shape) ?></td>
            <td><?= h($geofences->name) ?></td>
            <td><?= h($geofences->created) ?></td>
            <td><?= h($geofences->modified) ?></td>
            <td><?= h($geofences->color) ?></td>
            <td><?= h($geofences->client_info_id) ?></td>
            <td><?= h($geofences->client_contact_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Geofences', 'action' => 'view', $geofences->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Geofences', 'action' => 'edit', $geofences->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Geofences', 'action' => 'delete', $geofences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geofences->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
