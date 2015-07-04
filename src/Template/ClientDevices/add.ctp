<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Client Devices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Device Infos'), ['controller' => 'DeviceInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Device Info'), ['controller' => 'DeviceInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Device Types'), ['controller' => 'DeviceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Device Type'), ['controller' => 'DeviceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contact Devices'), ['controller' => 'ClientContactDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact Device'), ['controller' => 'ClientContactDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Device Geofences'), ['controller' => 'ClientDeviceGeofences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device Geofence'), ['controller' => 'ClientDeviceGeofences', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Persons'), ['controller' => 'ClientPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Person'), ['controller' => 'ClientPersons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Publicids'), ['controller' => 'ClientPublicids', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Publicid'), ['controller' => 'ClientPublicids', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientDevices form large-10 medium-9 columns">
    <?= $this->Form->create($clientDevice) ?>
    <fieldset>
        <legend><?= __('Add Client Device') ?></legend>
        <?php
            echo $this->Form->input('client_info_id', ['options' => $clientInfos]);
            echo $this->Form->input('deviceid');
            echo $this->Form->input('active');
            echo $this->Form->input('imei');
            echo $this->Form->input('mob_no');
            echo $this->Form->input('speed_limit');
            echo $this->Form->input('minimum_mileage');
            echo $this->Form->input('maintenance_mileage');
            echo $this->Form->input('fuel_consumption');
            echo $this->Form->input('comments');
            echo $this->Form->input('device_info_id', ['options' => $deviceInfos, 'empty' => true]);
            echo $this->Form->input('vehicle_type_id', ['options' => $vehicleTypes, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('device_type_id', ['options' => $deviceTypes, 'empty' => true]);
            echo $this->Form->input('client_device_subscription_id', ['options' => $clientDeviceSubscriptions, 'empty' => true]);
            echo $this->Form->input('tags');
            echo $this->Form->input('credit_file_num');
            echo $this->Form->input('tracker_id');
            echo $this->Form->input('vehicle_model_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
