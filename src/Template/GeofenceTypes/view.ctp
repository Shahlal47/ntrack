<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Account Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Geofence Type'), ['action' => 'edit', $geofenceType->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Geofence Type'), ['action' => 'delete', $geofenceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geofenceType->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Geofence Types'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Geofence Type'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Name</td><td><?= h($geofenceType->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($geofenceType->description) ?></td></tr>
                <tr><td class="text-right"> ID</td><td><?= $this->Number->format($geofenceType->id) ?></td></tr>
            </table>
        </div>
    </div>
</div>


