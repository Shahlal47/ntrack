

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Geofences List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Geofence Type'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?></li>
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
                <th class="actions text-center"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($geofenceTypes as $geofenceType): ?>

                <tr>
                    <td class="text-center"><?= $this->Number->format($geofenceType->id) ?></td>
                    <td class="text-center"><?= h($geofenceType->name) ?></td>
                    <td class="text-center"><?= h($geofenceType->description)  ?></td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $geofenceType->id],['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $geofenceType->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $geofenceType->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $geofenceType->id)]) ?>
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

