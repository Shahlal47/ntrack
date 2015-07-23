<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Vehicle Assignment Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Vehicle Assignment'), ['action' => 'edit', $clientVehicleAssignment->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Vehicle Assignment'), ['action' => 'delete', $clientVehicleAssignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicleAssignment->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Trip Paths'), ['controller' => 'ClientTripPaths', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Trip Path'), ['controller' => 'ClientTripPaths', 'action' => 'add']) ?> </li>
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
                        <?= $clientVehicleAssignment->has('client_info') ? $this->Html->link($clientVehicleAssignment->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientVehicleAssignment->client_info->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Client Contact</td>
                    <td>
                        <?= $clientVehicleAssignment->has('client_contact') ? $this->Html->link($clientVehicleAssignment->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientVehicleAssignment->client_contact->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Client Vehicle</td>
                    <td>
                        <?= $clientVehicleAssignment->has('client_vehicle') ? $this->Html->link($clientVehicleAssignment->client_vehicle->id, ['controller' => 'ClientVehicles', 'action' => 'view', $clientVehicleAssignment->client_vehicle->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Client Trip Path</td>
                    <td>
                        <?= $clientVehicleAssignment->has('client_trip_path') ? $this->Html->link($clientVehicleAssignment->client_trip_path->id, ['controller' => 'ClientTripPaths', 'action' => 'view', $clientVehicleAssignment->client_trip_path->id]) : '' ?>
                    </td>
                </tr>
                <tr><td class="text-right">Assignment Date</td><td><?= h($clientVehicleAssignment->assignment_date) ?></td></tr>
                <tr><td class="text-right">Start Time</td><td><?= h($clientVehicleAssignment->start_time) ?></td></tr>
                <tr><td class="text-right">Finish Time</td><td><?= h($clientVehicleAssignment->finish_time) ?></td></tr>
            </table>
        </div>
    </div>
</div>

