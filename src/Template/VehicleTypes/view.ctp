
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Vehicle Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Vehicle Type'), ['action' => 'edit', $vehicleType->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Vehicle Type'), ['action' => 'delete', $vehicleType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleType->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Vehicle Types'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Vehicle Type'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Name</td><td><?= h($vehicleType->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($vehicleType->description) ?></td></tr>
                <tr><td class="text-right">ID</td><td><?= $this->Number->format($vehicleType->id) ?></td></tr>
                <tr><td class="text-right">Def Speed Limit</td><td><?=  $this->Number->format($vehicleType->def_speed_limit) ?></td></tr>
                <tr><td class="text-right">Def Min Mileage</td><td><?= $this->Number->format($vehicleType->def_man_mileage) ?></td></tr>
                <tr><td class="text-right">Def Fuel Consumption</td><td><?=  $this->Number->format($vehicleType->def_fuel_consumption) ?></td></tr>
            </table>
        </div>
    </div>
</div>



