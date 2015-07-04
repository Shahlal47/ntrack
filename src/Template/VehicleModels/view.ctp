<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Vehicle Model'), ['action' => 'edit', $vehicleModels->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vehicle Model'), ['action' => 'delete', $vehicleModels->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleModels->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="vehicleModel view large-10 medium-9 columns">
    <h2><?= h($vehicleModels->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Vehicle Type') ?></h6>
            <p><?= $vehicleModels->has('vehicle_type') ? $this->Html->link($vehicleModels->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $vehicleModels->vehicle_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($vehicleModels->name) ?></p>
            <h6 class="subheader"><?= __('Desc') ?></h6>
            <p><?= h($vehicleModels->desc) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($vehicleModels->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($vehicleModels->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($vehicleModels->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Devices') ?></h4>
    <?php if (!empty($vehicleModels->client_devices)): ?>
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
        <?php foreach ($vehicleModels->client_devices as $clientDevices): ?>
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
