<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vehicleType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vehicle Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="vehicleTypes form large-10 medium-9 columns">
    <?= $this->Form->create($vehicleType) ?>
    <fieldset>
        <legend><?= __('Edit Vehicle Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('def_speed_limit');
            echo $this->Form->input('def_min_mileage');
            echo $this->Form->input('def_man_mileage');
            echo $this->Form->input('def_fuel_consumption');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
