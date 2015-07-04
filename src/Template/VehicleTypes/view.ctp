<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Vehicle Type'), ['action' => 'edit', $vehicleType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle Type'), ['action' => 'delete', $vehicleType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="vehicleTypes view large-10 medium-9 columns">
    <h2><?= h($vehicleType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($vehicleType->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($vehicleType->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($vehicleType->id) ?></p>
            <h6 class="subheader"><?= __('Def Speed Limit') ?></h6>
            <p><?= $this->Number->format($vehicleType->def_speed_limit) ?></p>
            <h6 class="subheader"><?= __('Def Min Mileage') ?></h6>
            <p><?= $this->Number->format($vehicleType->def_min_mileage) ?></p>
            <h6 class="subheader"><?= __('Def Man Mileage') ?></h6>
            <p><?= $this->Number->format($vehicleType->def_man_mileage) ?></p>
            <h6 class="subheader"><?= __('Def Fuel Consumption') ?></h6>
            <p><?= $this->Number->format($vehicleType->def_fuel_consumption) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($vehicleType->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($vehicleType->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Devices') ?></h4>
    <?php if (!empty($vehicleType->client_devices)): ?>
    <table cellpadding="0" cellspacing="0">
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
        <?php foreach ($vehicleType->client_devices as $clientDevices): ?>
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
    <h4 class="subheader"><?= __('Related Client Vehicles') ?></h4>
    <?php if (!empty($vehicleType->client_vehicles)): ?>
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
        <?php foreach ($vehicleType->client_vehicles as $clientVehicles): ?>
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
    <h4 class="subheader"><?= __('Related Vehicle Model') ?></h4>
    <?php if (!empty($vehicleType->vehicle_model)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Vehicle Type Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Desc') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($vehicleType->vehicle_model as $vehicleModel): ?>
        <tr>
            <td><?= h($vehicleModel->id) ?></td>
            <td><?= h($vehicleModel->vehicle_type_id) ?></td>
            <td><?= h($vehicleModel->name) ?></td>
            <td><?= h($vehicleModel->desc) ?></td>
            <td><?= h($vehicleModel->created) ?></td>
            <td><?= h($vehicleModel->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'VehicleModels', 'action' => 'view', $vehicleModel->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'VehicleModels', 'action' => 'edit', $vehicleModel->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'VehicleModels', 'action' => 'delete', $vehicleModel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleModel->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
