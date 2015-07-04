<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $fuelType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $fuelType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fuel Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="fuelTypes form large-10 medium-9 columns">
    <?= $this->Form->create($fuelType) ?>
    <fieldset>
        <legend><?= __('Edit Fuel Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
