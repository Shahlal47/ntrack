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
            <th class="text-center"><?= $this->Paginator->sort('Device ID') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Alert Type') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Pulled') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Received Time') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Latitude') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Longitude') ?></th>
            <th class="actions text-center"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($deviceAlerts as $deviceAlert): ?>
        <tr>
            <td class="text-center"><?= h($deviceAlert->deviceid) ?></td>
            <td class="text-center">
                <?= $deviceAlert->has('alert_type') ? $this->Html->link($deviceAlert->alert_type->name, ['controller' => 'AlertTypes', 'action' => 'view', $deviceAlert->alert_type->id]) : '' ?>
            </td>
            <td class="text-center"><?= h($deviceAlert->pulled) ?></td>
            <td class="text-center"><?= h($deviceAlert->received_at) ?></td>
            <td class="text-center"><?= h($deviceAlert->lat) ?></td>
            <td class="text-center"><?= h($deviceAlert->lng) ?></td>
            <td class="actions text-center">
                <?= $this->Html->link(__(''), ['action' => 'view', $deviceAlert->id],['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $deviceAlert->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $deviceAlert->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceAlert->id)]) ?>
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