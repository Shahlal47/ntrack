<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientVehicle->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicle->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fuel Types'), ['controller' => 'FuelTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fuel Type'), ['controller' => 'FuelTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientVehicles form large-10 medium-9 columns">
    <?= $this->Form->create($clientVehicle) ?>
    <fieldset>
        <legend><?= __('Edit Client Vehicle') ?></legend>
        <?php
            echo $this->Form->input('registrtion_number');
            echo $this->Form->input('vehicle_model');
            echo $this->Form->input('vehicle_color');
            echo $this->Form->input('speed_limit');
            echo $this->Form->input('fuel_tank_size');
            echo $this->Form->input('fuel_type_id', ['options' => $fuelTypes, 'empty' => true]);
            echo $this->Form->input('vehicle_type_id', ['options' => $vehicleTypes, 'empty' => true]);
            echo $this->Form->input('registration_expire_date', ['empty' => true, 'default' => '']);
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('client_device_id', ['options' => $clientDevices, 'empty' => true]);
            echo $this->Form->input('minimum_mileage');
            echo $this->Form->input('maintenance_mileage');
            echo $this->Form->input('fuel_consumption');
            echo $this->Form->input('comments');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
