<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Driver Assignment Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Driver Assignment'), ['action' => 'edit', $clientDriverAssignment->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Driver Assignment'), ['action' => 'delete', $clientDriverAssignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDriverAssignment->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Driver Assignments'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Driver Assignment'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Name</td>
                    <td><?= $clientDriverAssignment->has('client_info') ? $this->Html->link($clientDriverAssignment->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDriverAssignment->client_info->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Client Driver Name</td>
                    <td><?= $clientDriverAssignment->has('client_driver') ? $this->Html->link($clientDriverAssignment->client_driver->name, ['controller' => 'ClientDrivers', 'action' => 'view', $clientDriverAssignment->client_driver->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Client Vehicle</td>
                    <td><?= $clientDriverAssignment->has('client_vehicle') ? $this->Html->link($clientDriverAssignment->client_vehicle->id, ['controller' => 'ClientVehicles', 'action' => 'view', $clientDriverAssignment->client_vehicle->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Client Contact</td>
                    <td><?= $clientDriverAssignment->has('client_contact') ? $this->Html->link($clientDriverAssignment->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientDriverAssignment->client_contact->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Assignment Start Date</td>
                    <td><?= h($clientDriverAssignment->from) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Assignment End Date</td>
                    <td><?= h($clientDriverAssignment->to) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

