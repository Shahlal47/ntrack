

<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Device Geofence List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                 <li><?= $this->Html->link(__('New Client Device Geofence'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
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
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('client_contact_id') ?></th>
            <th><?= $this->Paginator->sort('client_device_id') ?></th>
            <th><?= $this->Paginator->sort('geofence_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientDeviceGeofences as $clientDeviceGeofence): ?>
        <tr>
            <td><?= $this->Number->format($clientDeviceGeofence->id) ?></td>
            <td>
                <?= $clientDeviceGeofence->has('client_contact') ? $this->Html->link($clientDeviceGeofence->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientDeviceGeofence->client_contact->id]) : '' ?>
            </td>
            <td>
                <?= $clientDeviceGeofence->has('client_device') ? $this->Html->link($clientDeviceGeofence->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientDeviceGeofence->client_device->id]) : '' ?>
            </td>
            <td>
                <?= $clientDeviceGeofence->has('geofence') ? $this->Html->link($clientDeviceGeofence->geofence->name, ['controller' => 'Geofences', 'action' => 'view', $clientDeviceGeofence->geofence->id]) : '' ?>
            </td>
            <td><?= h($clientDeviceGeofence->created) ?></td>
            <td><?= h($clientDeviceGeofence->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientDeviceGeofence->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientDeviceGeofence->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientDeviceGeofence->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceGeofence->id)]) ?>
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