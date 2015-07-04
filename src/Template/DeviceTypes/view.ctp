<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Device Type'), ['action' => 'edit', $deviceType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Device Type'), ['action' => 'delete', $deviceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Device Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Device Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Device Infos'), ['controller' => 'DeviceInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Device Info'), ['controller' => 'DeviceInfos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="deviceTypes view large-10 medium-9 columns">
    <h2><?= h($deviceType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($deviceType->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($deviceType->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($deviceType->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Devices') ?></h4>
    <?php if (!empty($deviceType->client_devices)): ?>
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
        <?php foreach ($deviceType->client_devices as $clientDevices): ?>
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
    <h4 class="subheader"><?= __('Related Device Infos') ?></h4>
    <?php if (!empty($deviceType->device_infos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Device Type Id') ?></th>
            <th><?= __('Brand') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Sensors') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($deviceType->device_infos as $deviceInfos): ?>
        <tr>
            <td><?= h($deviceInfos->id) ?></td>
            <td><?= h($deviceInfos->name) ?></td>
            <td><?= h($deviceInfos->description) ?></td>
            <td><?= h($deviceInfos->device_type_id) ?></td>
            <td><?= h($deviceInfos->brand) ?></td>
            <td><?= h($deviceInfos->created) ?></td>
            <td><?= h($deviceInfos->modified) ?></td>
            <td><?= h($deviceInfos->sensors) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'DeviceInfos', 'action' => 'view', $deviceInfos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'DeviceInfos', 'action' => 'edit', $deviceInfos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'DeviceInfos', 'action' => 'delete', $deviceInfos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceInfos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
