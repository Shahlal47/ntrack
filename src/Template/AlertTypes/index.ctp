

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Alert Type List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Alert Type'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Device Alerts'), ['controller' => 'DeviceAlerts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Device Alert'), ['controller' => 'DeviceAlerts', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="portlet-body">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center"><?= $this->Paginator->sort('id') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('name') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('description') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Message Code') ?></th>
            <th class="actions text-center"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($alertTypes as $alertType): ?>
        <tr>
            <td class="text-center"><?= $this->Number->format($alertType->id) ?></td>
            <td class="text-center"><?= h($alertType->name) ?></td>
            <td class="text-center"><?= h($alertType->description) ?></td>
            <td class="text-center"><?= h($alertType->msg_code) ?></td>
            <td class="actions text-center">
                <?= $this->Html->link(__(''), ['action' => 'view', $alertType->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $alertType->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $alertType->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $alertType->id)]) ?>
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