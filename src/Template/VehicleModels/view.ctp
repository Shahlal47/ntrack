
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Account Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Vehicle Model'), ['action' => 'edit', $vehicleModel->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Vehicle Model'), ['action' => 'delete', $vehicleModel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleModel->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Vehicle Models'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Vehicle Model'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Vehicle Type</td><td><?= $vehicleModel->has('vehicle_type') ? $this->Html->link($vehicleModel->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $vehicleModel->vehicle_type->id]) : ''  ?></td></tr>
                <tr><td class="text-right">Name</td><td><?=  h($vehicleModel->name) ?></td></tr>
                <tr><td class="text-right">Desc</td><td><?= h($vehicleModel->desc) ?></td></tr>
            </table>
        </div>
    </div>
</div>


