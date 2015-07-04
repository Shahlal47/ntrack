


<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">List Geofence</span>
        </div>
        <div class="actions col-md-12">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><?= $this->Html->link(__('New Geofence'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Geofence Types'), ['controller' => 'GeofenceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Geofence Type'), ['controller' => 'GeofenceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('geofence_type_id') ?></th>
            <th><?= $this->Paginator->sort('geo_shape') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= $this->Paginator->sort('color') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($geofences as $geofence): ?>
        <tr>
            <td><?= $this->Number->format($geofence->id) ?></td>
            <td>
                <?= $geofence->has('geofence_type') ? $this->Html->link($geofence->geofence_type->name, ['controller' => 'GeofenceTypes', 'action' => 'view', $geofence->geofence_type->id]) : '' ?>
            </td>
            <td><?= h($geofence->geo_shape) ?></td>
            <td><?= h($geofence->name) ?></td>
            <td><?= h($geofence->created) ?></td>
            <td><?= h($geofence->modified) ?></td>
            <td><?= h($geofence->color) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $geofence->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $geofence->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $geofence->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $geofence->id)]) ?>
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