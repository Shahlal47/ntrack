<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Contact'), ['action' => 'edit', $clientContact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Contact'), ['action' => 'delete', $clientContact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientContact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Contact'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
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
<div class="clientContacts view large-10 medium-9 columns">
    <h2><?= h($clientContact->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($clientContact->id) ?></p>
            <h6 class="subheader"><?= __('Client Info Id') ?></h6>
            <p><?= h($clientContact->client_info_id) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($clientContact->mobile) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($clientContact->email) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($clientContact->name) ?></p>
            <h6 class="subheader"><?= __('Nationalid') ?></h6>
            <p><?= h($clientContact->nationalid) ?></p>
            <h6 class="subheader"><?= __('User Id') ?></h6>
            <p><?= h($clientContact->user_id) ?></p>
            <h6 class="subheader"><?= __('Phone') ?></h6>
            <p><?= h($clientContact->phone) ?></p>
            <h6 class="subheader"><?= __('Fax') ?></h6>
            <p><?= h($clientContact->fax) ?></p>
            <h6 class="subheader"><?= __('Mobile Home') ?></h6>
            <p><?= h($clientContact->mobile_home) ?></p>
            <h6 class="subheader"><?= __('Mobile Office') ?></h6>
            <p><?= h($clientContact->mobile_office) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientContact->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientContact->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Infos') ?></h4>
    <?php if (!empty($clientContact->client_infos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Client Type Id') ?></th>
            <th><?= __('Company Type Id') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Buyerno') ?></th>
            <th><?= __('Website') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Logo') ?></th>
            <th><?= __('NumOfTrackers') ?></th>
            <th><?= __('NumOfGeoFences') ?></th>
            <th><?= __('Sensors') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientContact->client_infos as $clientInfos): ?>
        <tr>
            <td><?= h($clientInfos->id) ?></td>
            <td><?= h($clientInfos->name) ?></td>
            <td><?= h($clientInfos->client_type_id) ?></td>
            <td><?= h($clientInfos->company_type_id) ?></td>
            <td><?= h($clientInfos->address) ?></td>
            <td><?= h($clientInfos->created) ?></td>
            <td><?= h($clientInfos->modified) ?></td>
            <td><?= h($clientInfos->buyerno) ?></td>
            <td><?= h($clientInfos->website) ?></td>
            <td><?= h($clientInfos->user_id) ?></td>
            <td><?= h($clientInfos->client_contact_id) ?></td>
            <td><?= h($clientInfos->logo) ?></td>
            <td><?= h($clientInfos->numOfTrackers) ?></td>
            <td><?= h($clientInfos->numOfGeoFences) ?></td>
            <td><?= h($clientInfos->sensors) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientInfos', 'action' => 'view', $clientInfos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientInfos', 'action' => 'edit', $clientInfos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientInfos', 'action' => 'delete', $clientInfos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientInfos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($clientContact->users)): ?>
    <table cellpadding="0" cellspacing="0">
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
        <?php foreach ($clientContact->users as $users): ?>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Alert Settings') ?></h4>
    <?php if (!empty($clientContact->client_alert_settings)): ?>
    <table cellpadding="0" cellspacing="0">
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
        <?php foreach ($clientContact->client_alert_settings as $clientAlertSettings): ?>
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
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Contact Devices') ?></h4>
    <?php if (!empty($clientContact->client_contact_devices)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Client Device Id') ?></th>
            <th><?= __('Active') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientContact->client_contact_devices as $clientContactDevices): ?>
        <tr>
            <td><?= h($clientContactDevices->id) ?></td>
            <td><?= h($clientContactDevices->client_contact_id) ?></td>
            <td><?= h($clientContactDevices->client_device_id) ?></td>
            <td><?= h($clientContactDevices->active) ?></td>
            <td><?= h($clientContactDevices->created) ?></td>
            <td><?= h($clientContactDevices->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientContactDevices', 'action' => 'view', $clientContactDevices->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientContactDevices', 'action' => 'edit', $clientContactDevices->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientContactDevices', 'action' => 'delete', $clientContactDevices->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientContactDevices->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Device Geofences') ?></h4>
    <?php if (!empty($clientContact->client_device_geofences)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Client Device Id') ?></th>
            <th><?= __('Geofence Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientContact->client_device_geofences as $clientDeviceGeofences): ?>
        <tr>
            <td><?= h($clientDeviceGeofences->id) ?></td>
            <td><?= h($clientDeviceGeofences->client_contact_id) ?></td>
            <td><?= h($clientDeviceGeofences->client_device_id) ?></td>
            <td><?= h($clientDeviceGeofences->geofence_id) ?></td>
            <td><?= h($clientDeviceGeofences->created) ?></td>
            <td><?= h($clientDeviceGeofences->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientDeviceGeofences', 'action' => 'view', $clientDeviceGeofences->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientDeviceGeofences', 'action' => 'edit', $clientDeviceGeofences->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientDeviceGeofences', 'action' => 'delete', $clientDeviceGeofences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceGeofences->id)]) ?>

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
    <?php if (!empty($clientContact->client_driver_assignments)): ?>
    <table cellpadding="0" cellspacing="0">
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
        <?php foreach ($clientContact->client_driver_assignments as $clientDriverAssignments): ?>
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
    <?php if (!empty($clientContact->client_drivers)): ?>
    <table cellpadding="0" cellspacing="0">
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
        <?php foreach ($clientContact->client_drivers as $clientDrivers): ?>
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
    <?php if (!empty($clientContact->client_expenses)): ?>
    <table cellpadding="0" cellspacing="0">
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
        <?php foreach ($clientContact->client_expenses as $clientExpenses): ?>
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
    <h4 class="subheader"><?= __('Related Client Trip Paths') ?></h4>
    <?php if (!empty($clientContact->client_trip_paths)): ?>
    <table cellpadding="0" cellspacing="0">
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
        <?php foreach ($clientContact->client_trip_paths as $clientTripPaths): ?>
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
    <?php if (!empty($clientContact->client_vehicle_assignments)): ?>
    <table cellpadding="0" cellspacing="0">
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
        <?php foreach ($clientContact->client_vehicle_assignments as $clientVehicleAssignments): ?>
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
    <h4 class="subheader"><?= __('Related Geofences') ?></h4>
    <?php if (!empty($clientContact->geofences)): ?>
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
        <?php foreach ($clientContact->geofences as $geofences): ?>
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
