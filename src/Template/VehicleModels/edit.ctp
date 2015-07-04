<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vehicleModels->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleModel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="vehicleModel form large-10 medium-9 columns">
    <?= $this->Form->create($vehicleModel) ?>
    <fieldset>
        <legend><?= __('Edit Vehicle Model') ?></legend>
        <?php
            echo $this->Form->input('vehicle_type_id', ['options' => $vehicleTypes]);
            echo $this->Form->input('name');
            echo $this->Form->input('desc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
