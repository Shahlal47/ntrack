<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Vehicle'), ['action' => 'edit', $clientVehicle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Vehicle'), ['action' => 'delete', $clientVehicle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fuel Types'), ['controller' => 'FuelTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fuel Type'), ['controller' => 'FuelTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientVehicles view large-10 medium-9 columns">
    <h2><?= h($clientVehicle->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Registrtion Number') ?></h6>
            <p><?= h($clientVehicle->registrtion_number) ?></p>
            <h6 class="subheader"><?= __('Vehicle Model') ?></h6>
            <p><?= h($clientVehicle->vehicle_model) ?></p>
            <h6 class="subheader"><?= __('Vehicle Color') ?></h6>
            <p><?= h($clientVehicle->vehicle_color) ?></p>
            <h6 class="subheader"><?= __('Fuel Type') ?></h6>
            <p><?= $clientVehicle->has('fuel_type') ? $this->Html->link($clientVehicle->fuel_type->name, ['controller' => 'FuelTypes', 'action' => 'view', $clientVehicle->fuel_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Vehicle Type') ?></h6>
            <p><?= $clientVehicle->has('vehicle_type') ? $this->Html->link($clientVehicle->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $clientVehicle->vehicle_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientVehicle->has('client_info') ? $this->Html->link($clientVehicle->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientVehicle->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Device') ?></h6>
            <p><?= $clientVehicle->has('client_device') ? $this->Html->link($clientVehicle->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientVehicle->client_device->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Comments') ?></h6>
            <p><?= h($clientVehicle->comments) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientVehicle->id) ?></p>
            <h6 class="subheader"><?= __('Speed Limit') ?></h6>
            <p><?= $this->Number->format($clientVehicle->speed_limit) ?></p>
            <h6 class="subheader"><?= __('Fuel Tank Size') ?></h6>
            <p><?= $this->Number->format($clientVehicle->fuel_tank_size) ?></p>
            <h6 class="subheader"><?= __('Minimum Mileage') ?></h6>
            <p><?= $this->Number->format($clientVehicle->minimum_mileage) ?></p>
            <h6 class="subheader"><?= __('Maintenance Mileage') ?></h6>
            <p><?= $this->Number->format($clientVehicle->maintenance_mileage) ?></p>
            <h6 class="subheader"><?= __('Fuel Consumption') ?></h6>
            <p><?= $this->Number->format($clientVehicle->fuel_consumption) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Registration Expire Date') ?></h6>
            <p><?= h($clientVehicle->registration_expire_date) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientVehicle->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientVehicle->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Driver Assignments') ?></h4>
    <?php if (!empty($clientVehicle->client_driver_assignments)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Driver Id') ?></th>
            <th><?= __('Client Vehicle Id') ?></th>
            <th><?= __('From') ?></th>
            <th><?= __('To') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientVehicle->client_driver_assignments as $clientDriverAssignments): ?>
        <tr>
            <td><?= h($clientDriverAssignments->id) ?></td>
            <td><?= h($clientDriverAssignments->client_info_id) ?></td>
            <td><?= h($clientDriverAssignments->client_driver_id) ?></td>
            <td><?= h($clientDriverAssignments->client_vehicle_id) ?></td>
            <td><?= h($clientDriverAssignments->from) ?></td>
            <td><?= h($clientDriverAssignments->to) ?></td>
            <td><?= h($clientDriverAssignments->client_contact_id) ?></td>
            <td><?= h($clientDriverAssignments->created) ?></td>
            <td><?= h($clientDriverAssignments->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientDriverAssignments', 'action' => 'view', $clientDriverAssignments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientDriverAssignments', 'action' => 'edit', $clientDriverAssignments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientDriverAssignments', 'action' => 'delete', $clientDriverAssignments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDriverAssignments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Vehicle Assignments') ?></h4>
    <?php if (!empty($clientVehicle->client_vehicle_assignments)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Vehicle Id') ?></th>
            <th><?= __('Client Trip Id') ?></th>
            <th><?= __('Assignment Date') ?></th>
            <th><?= __('Start Time') ?></th>
            <th><?= __('Finish Time') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientVehicle->client_vehicle_assignments as $clientVehicleAssignments): ?>
        <tr>
            <td><?= h($clientVehicleAssignments->id) ?></td>
            <td><?= h($clientVehicleAssignments->client_info_id) ?></td>
            <td><?= h($clientVehicleAssignments->client_vehicle_id) ?></td>
            <td><?= h($clientVehicleAssignments->client_trip_id) ?></td>
            <td><?= h($clientVehicleAssignments->assignment_date) ?></td>
            <td><?= h($clientVehicleAssignments->start_time) ?></td>
            <td><?= h($clientVehicleAssignments->finish_time) ?></td>
            <td><?= h($clientVehicleAssignments->client_contact_id) ?></td>
            <td><?= h($clientVehicleAssignments->created) ?></td>
            <td><?= h($clientVehicleAssignments->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientVehicleAssignments', 'action' => 'view', $clientVehicleAssignments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientVehicleAssignments', 'action' => 'edit', $clientVehicleAssignments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientVehicleAssignments', 'action' => 'delete', $clientVehicleAssignments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicleAssignments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
