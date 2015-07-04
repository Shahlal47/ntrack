<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Device Info'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Device Types'), ['controller' => 'DeviceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Device Type'), ['controller' => 'DeviceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="portlet light">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('device_type_id') ?></th>
            <th><?= $this->Paginator->sort('brand') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($deviceInfos as $deviceInfo): ?>
        <tr>
            <td><?= $this->Number->format($deviceInfo->id) ?></td>
            <td><?= h($deviceInfo->name) ?></td>
            <td><?= h($deviceInfo->description) ?></td>
            <td>
                <?= $deviceInfo->has('device_type') ? $this->Html->link($deviceInfo->device_type->name, ['controller' => 'DeviceTypes', 'action' => 'view', $deviceInfo->device_type->id]) : '' ?>
            </td>
            <td><?= h($deviceInfo->brand) ?></td>
            <td><?= h($deviceInfo->created) ?></td>
            <td><?= h($deviceInfo->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $deviceInfo->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $deviceInfo->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $deviceInfo->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceInfo->id)]) ?>
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
