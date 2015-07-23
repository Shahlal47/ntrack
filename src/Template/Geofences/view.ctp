
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Geofences Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Geofence'), ['action' => 'edit', $geofence->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Geofence'), ['action' => 'delete', $geofence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geofence->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Geofences'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Geofence'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Geofence Types'), ['controller' => 'GeofenceTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Geofence Type'), ['controller' => 'GeofenceTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Geofence Type</td><td><?= $geofence->has('geofence_type') ? $this->Html->link($geofence->geofence_type->name, ['controller' => 'GeofenceTypes', 'action' => 'view', $geofence->geofence_type->id]) : '' ?></td></tr>
                <tr><td class="text-right">Geo Shape</td><td><?= h($geofence->geo_shape) ?></td></tr>
                <tr><td class="text-right">Name</td><td><?= h($geofence->name) ?></td></tr>
                <tr><td class="text-right">Color</td><td><?= h($geofence->color) ?></td></tr>
                <tr><td class="text-right">Client Info</td><td><?= $geofence->has('client_info') ? $this->Html->link($geofence->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $geofence->client_info->id]) : '' ?></td></tr>
                <tr><td class="text-right">Client Contact</td><td><?= $geofence->has('client_contact') ? $this->Html->link($geofence->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $geofence->client_contact->id]) : '' ?></td></tr>
                <tr><td class="text-right">Id</td><td><?= $this->Number->format($geofence->id) ?></td></tr>
                <tr><td class="text-right">Created</td><td><?= h($geofence->created) ?></td></tr>
                <tr><td class="text-right">modified</td><td><?= h($geofence->modified) ?></td></tr>
            </table>
        </div>
    </div>
</div>


