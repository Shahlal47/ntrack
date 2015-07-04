
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Device Geo Offence Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Device Geofence'), ['action' => 'edit', $clientDeviceGeofence->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Device Geofence'), ['action' => 'delete', $clientDeviceGeofence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceGeofence->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Device Geofences'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device Geofence'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Contact</td>
                    <td>
                        <?= $clientDeviceGeofence->has('client_contact') ? $this->Html->link($clientDeviceGeofence->client_contact->name,
                            ['controller' => 'ClientContacts', 'action' => 'view', $clientDeviceGeofence->client_contact->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Client Device</td>
                    <td>
                        <?= $clientDeviceGeofence->has('client_device') ? $this->Html->link($clientDeviceGeofence->client_device->name,
                            ['controller' => 'ClientDevices', 'action' => 'view', $clientDeviceGeofence->client_device->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Geo Offence</td>
                    <td><?= $clientDeviceGeofence->has('geofence') ? $this->Html->link($clientDeviceGeofence->geofence->name,
                            ['controller' => 'Geofences', 'action' => 'view', $clientDeviceGeofence->geofence->id]) : '' ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>