<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Device Subscription'), ['action' => 'edit', $clientDeviceSubscription->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Device Subscription'), ['action' => 'delete', $clientDeviceSubscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceSubscription->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device Subscription'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Account Types'), ['controller' => 'AccountTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account Type'), ['controller' => 'AccountTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientDeviceSubscriptions view large-10 medium-9 columns">
    <h2><?= h($clientDeviceSubscription->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientDeviceSubscription->has('client_info') ? $this->Html->link($clientDeviceSubscription->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDeviceSubscription->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Account Type') ?></h6>
            <p><?= $clientDeviceSubscription->has('account_type') ? $this->Html->link($clientDeviceSubscription->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $clientDeviceSubscription->account_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Deviceid') ?></h6>
            <p><?= h($clientDeviceSubscription->client_deviceid) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientDeviceSubscription->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Subscribe Date') ?></h6>
            <p><?= h($clientDeviceSubscription->subscribe_date) ?></p>
            <h6 class="subheader"><?= __('Expire Date') ?></h6>
            <p><?= h($clientDeviceSubscription->expire_date) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientDeviceSubscription->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientDeviceSubscription->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Active') ?></h6>
            <p><?= $clientDeviceSubscription->active ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Devices') ?></h4>
    <?php if (!empty($clientDeviceSubscription->client_devices)): ?>
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
        <?php foreach ($clientDeviceSubscription->client_devices as $clientDevices): ?>
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
