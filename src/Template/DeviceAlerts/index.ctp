

<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Device Alert List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><?= $this->Html->link(__('New Device Alert'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alert Types'), ['controller' => 'AlertTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alert Type'), ['controller' => 'AlertTypes', 'action' => 'add']) ?></li>  
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
     <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('deviceid') ?></th>
            <th><?= $this->Paginator->sort('alert_type_id') ?></th>
            <th><?= $this->Paginator->sort('pulled') ?></th>
            <th><?= $this->Paginator->sort('received_at') ?></th>
            <th><?= $this->Paginator->sort('lat') ?></th>
            <th><?= $this->Paginator->sort('lng') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($deviceAlerts as $deviceAlert): ?>
        <tr>
            <td><?= $this->Number->format($deviceAlert->id) ?></td>
            <td><?= h($deviceAlert->deviceid) ?></td>
            <td>
                <?= $deviceAlert->has('alert_type') ? $this->Html->link($deviceAlert->alert_type->name, ['controller' => 'AlertTypes', 'action' => 'view', $deviceAlert->alert_type->id]) : '' ?>
            </td>
            <td><?= h($deviceAlert->pulled) ?></td>
            <td><?= h($deviceAlert->received_at) ?></td>
            <td><?= h($deviceAlert->lat) ?></td>
            <td><?= h($deviceAlert->lng) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $deviceAlert->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $deviceAlert->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $deviceAlert->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceAlert->id)]) ?>
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
</div>