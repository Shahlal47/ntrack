<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Device Information List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Device Information'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Device Types'), ['controller' => 'DeviceTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Device Type'), ['controller' => 'DeviceTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center"><?= $this->Paginator->sort('name') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('description') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('device_type_id') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('brand') ?></th>
                <th class="actions text-center"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($deviceInfos as $deviceInfo): ?>
                <tr>
                    <td class="text-center"><?= h($deviceInfo->name) ?></td>
                    <td class="text-center"><?= h($deviceInfo->description) ?></td>
                    <td class="text-center">
                        <?= $deviceInfo->has('device_type') ? $this->Html->link($deviceInfo->device_type->name, ['controller' => 'DeviceTypes', 'action' => 'view', $deviceInfo->device_type->id]) : '' ?>
                    </td>
                    <td class="text-center"><?= h($deviceInfo->brand) ?></td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $deviceInfo->id],['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $deviceInfo->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $deviceInfo->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceInfo->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator text-center">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('Previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
