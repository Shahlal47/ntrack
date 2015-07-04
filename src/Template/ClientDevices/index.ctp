<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Client Device'), ['action' => 'add']) ?></li>
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
<div class="clientDevices index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('client_info_id') ?></th>
            <th><?= $this->Paginator->sort('deviceid') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= $this->Paginator->sort('active') ?></th>
            <th><?= $this->Paginator->sort('imei') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientDevices as $clientDevice): ?>
        <tr>
            <td><?= $this->Number->format($clientDevice->id) ?></td>
            <td>
                <?= $clientDevice->has('client_info') ? $this->Html->link($clientDevice->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDevice->client_info->id]) : '' ?>
            </td>
            <td><?= h($clientDevice->deviceid) ?></td>
            <td><?= h($clientDevice->created) ?></td>
            <td><?= h($clientDevice->modified) ?></td>
            <td><?= h($clientDevice->active) ?></td>
            <td><?= h($clientDevice->imei) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $clientDevice->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clientDevice->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientDevice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDevice->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
