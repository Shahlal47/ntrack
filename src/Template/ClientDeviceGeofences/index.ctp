

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
                     <li><?= $this->Html->link(__('New Client Device Geo Fence'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Geo Fences'), ['controller' => 'Geofences', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Geo Fence'), ['controller' => 'Geofences', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center"><?= $this->Paginator->sort('client_contact_id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('client_device_id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('geofence_id') ?></th>
                    <th class="actions text-center"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($clientDeviceGeofences as $clientDeviceGeofence): ?>
                <tr>
                    <td class="text-center"><?= $clientDeviceGeofence->has('client_contact') ? $this->Html->link($clientDeviceGeofence->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientDeviceGeofence->client_contact->id]) : '' ?></td>
                    <td class="text-center"><?= $clientDeviceGeofence->has('client_device') ? $this->Html->link($clientDeviceGeofence->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientDeviceGeofence->client_device->id]) : '' ?></td>
                    <td class="text-center"><?= $clientDeviceGeofence->has('geofence') ? $this->Html->link($clientDeviceGeofence->geofence->name, ['controller' => 'Geofences', 'action' => 'view', $clientDeviceGeofence->geofence->id]) : '' ?></td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $clientDeviceGeofence->id], ['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $clientDeviceGeofence->id], ['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientDeviceGeofence->id], ['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceGeofence->id)]) ?>
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