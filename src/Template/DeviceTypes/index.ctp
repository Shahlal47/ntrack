<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Device Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Device Infos'), ['controller' => 'DeviceInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Device Info'), ['controller' => 'DeviceInfos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="portlet light">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($deviceTypes as $deviceType): ?>
        <tr>
            <td><?= $this->Number->format($deviceType->id) ?></td>
            <td><?= h($deviceType->name) ?></td>
            <td><?= h($deviceType->description) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $deviceType->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $deviceType->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $deviceType->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceType->id)]) ?>
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
