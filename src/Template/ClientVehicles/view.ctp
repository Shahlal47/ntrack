<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Vehicle Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Vehicle'), ['action' => 'edit', $clientVehicle->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Vehicle'), ['action' => 'delete', $clientVehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicle->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Fuel Types'), ['controller' => 'FuelTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Fuel Type'), ['controller' => 'FuelTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">

                <tr>
                    <td class="text-right">Client Information</td>
                    <td>
                        <?= $clientVehicle->has('client_info') ? $this->Html->link($clientVehicle->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientVehicle->client_info->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Client Device</td>
                    <td>
                        <?= $clientVehicle->has('client_device') ? $this->Html->link($clientVehicle->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientVehicle->client_device->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Vehicle Type</td>
                    <td>
                        <?= $clientVehicle->has('vehicle_type') ? $this->Html->link($clientVehicle->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $clientVehicle->vehicle_type->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Fuel Type</td>
                    <td>
                        <?= $clientVehicle->has('fuel_type') ? $this->Html->link($clientVehicle->fuel_type->name, ['controller' => 'FuelTypes', 'action' => 'view', $clientVehicle->fuel_type->id]) : '' ?>
                    </td>
                </tr>
                <tr><td class="text-right">Registration Number</td><td><?= h($clientVehicle->registrtion_number) ?></td></tr>
                <tr><td class="text-right">Vehicle Model</td><td><?= h($clientVehicle->vehicle_model) ?></td></tr>
                <tr><td class="text-right">Vehicle Color</td><td><?= h($clientVehicle->vehicle_color) ?></td></tr>
                <tr><td class="text-right">Speed Limit</td><td><?= $this->Number->format($clientVehicle->speed_limit) ?></td></tr>
                <tr><td class="text-right">Fuel Tank Size</td><td><?= $this->Number->format($clientVehicle->fuel_tank_size) ?></td></tr>
                <tr><td class="text-right">Minimum Mileage</td><td><?= $this->Number->format($clientVehicle->minimum_mileage) ?></td></tr>
                <tr><td class="text-right">Maintenance Mileage</td><td><?= $this->Number->format($clientVehicle->maintenance_mileage) ?></td></tr>
                <tr><td class="text-right">Fuel Consumption</td><td><?= $this->Number->format($clientVehicle->fuel_consumption) ?></td></tr>
                <tr><td class="text-right">Registration Expire Date</td><td><?= h($clientVehicle->registration_expire_date) ?></td></tr>
                <tr><td class="text-right">Comments</td><td><?= h($clientVehicle->comments) ?></td></tr>
            </table>
        </div>
    </div>
</div>