<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Device'), ['action' => 'edit', $clientDevice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Device'), ['action' => 'delete', $clientDevice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDevice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Devices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Device Infos'), ['controller' => 'DeviceInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Device Info'), ['controller' => 'DeviceInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Device Types'), ['controller' => 'DeviceTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Device Type'), ['controller' => 'DeviceTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Contact Devices'), ['controller' => 'ClientContactDevices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Contact Device'), ['controller' => 'ClientContactDevices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Device Geofences'), ['controller' => 'ClientDeviceGeofences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device Geofence'), ['controller' => 'ClientDeviceGeofences', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Persons'), ['controller' => 'ClientPersons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Person'), ['controller' => 'ClientPersons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Publicids'), ['controller' => 'ClientPublicids', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Publicid'), ['controller' => 'ClientPublicids', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientDevices view large-10 medium-9 columns">
    <h2><?= h($clientDevice->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientDevice->has('client_info') ? $this->Html->link($clientDevice->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDevice->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Deviceid') ?></h6>
            <p><?= h($clientDevice->deviceid) ?></p>
            <h6 class="subheader"><?= __('Imei') ?></h6>
            <p><?= h($clientDevice->imei) ?></p>
            <h6 class="subheader"><?= __('Mob No') ?></h6>
            <p><?= h($clientDevice->mob_no) ?></p>
            <h6 class="subheader"><?= __('Comments') ?></h6>
            <p><?= h($clientDevice->comments) ?></p>
            <h6 class="subheader"><?= __('Device Info') ?></h6>
            <p><?= $clientDevice->has('device_info') ? $this->Html->link($clientDevice->device_info->name, ['controller' => 'DeviceInfos', 'action' => 'view', $clientDevice->device_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Vehicle Type') ?></h6>
            <p><?= $clientDevice->has('vehicle_type') ? $this->Html->link($clientDevice->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $clientDevice->vehicle_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($clientDevice->name) ?></p>
            <h6 class="subheader"><?= __('Device Type') ?></h6>
            <p><?= $clientDevice->has('device_type') ? $this->Html->link($clientDevice->device_type->name, ['controller' => 'DeviceTypes', 'action' => 'view', $clientDevice->device_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Device Subscription') ?></h6>
            <p><?= $clientDevice->has('client_device_subscription') ? $this->Html->link($clientDevice->client_device_subscription->id, ['controller' => 'ClientDeviceSubscriptions', 'action' => 'view', $clientDevice->client_device_subscription->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Tags') ?></h6>
            <p><?= h($clientDevice->tags) ?></p>
            <h6 class="subheader"><?= __('Credit File Num') ?></h6>
            <p><?= h($clientDevice->credit_file_num) ?></p>
            <h6 class="subheader"><?= __('Tracker Id') ?></h6>
            <p><?= h($clientDevice->tracker_id) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientDevice->id) ?></p>
            <h6 class="subheader"><?= __('Speed Limit') ?></h6>
            <p><?= $this->Number->format($clientDevice->speed_limit) ?></p>
            <h6 class="subheader"><?= __('Minimum Mileage') ?></h6>
            <p><?= $this->Number->format($clientDevice->minimum_mileage) ?></p>
            <h6 class="subheader"><?= __('Maintenance Mileage') ?></h6>
            <p><?= $this->Number->format($clientDevice->maintenance_mileage) ?></p>
            <h6 class="subheader"><?= __('Fuel Consumption') ?></h6>
            <p><?= $this->Number->format($clientDevice->fuel_consumption) ?></p>
            <h6 class="subheader"><?= __('Vehicle Model Id') ?></h6>
            <p><?= $this->Number->format($clientDevice->vehicle_model_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientDevice->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientDevice->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Active') ?></h6>
            <p><?= $clientDevice->active ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Alert Settings') ?></h4>
    <?php if (!empty($clientDevice->client_alert_settings)): ?>
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
        <?php foreach ($clientDevice->client_alert_settings as $clientAlertSettings): ?>
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
    <?php if (!empty($clientDevice->client_contact_devices)): ?>
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
        <?php foreach ($clientDevice->client_contact_devices as $clientContactDevices): ?>
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
    <?php if (!empty($clientDevice->client_device_geofences)): ?>
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
        <?php foreach ($clientDevice->client_device_geofences as $clientDeviceGeofences): ?>
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
    <h4 class="subheader"><?= __('Related Client Expenses') ?></h4>
    <?php if (!empty($clientDevice->client_expenses)): ?>
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
        <?php foreach ($clientDevice->client_expenses as $clientExpenses): ?>
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
    <h4 class="subheader"><?= __('Related Client Persons') ?></h4>
    <?php if (!empty($clientDevice->client_persons)): ?>
    <table cellpadding="0" cellspacing="0">
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
        <?php foreach ($clientDevice->client_persons as $clientPersons): ?>
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
    <?php if (!empty($clientDevice->client_publicids)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Publicid') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Device Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientDevice->client_publicids as $clientPublicids): ?>
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
    <h4 class="subheader"><?= __('Related Client Vehicles') ?></h4>
    <?php if (!empty($clientDevice->client_vehicles)): ?>
    <table cellpadding="0" cellspacing="0">
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
        <?php foreach ($clientDevice->client_vehicles as $clientVehicles): ?>
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
