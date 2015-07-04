<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientDriverAssignment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientDriverAssignment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Driver Assignments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientDriverAssignments form large-10 medium-9 columns">
    <?= $this->Form->create($clientDriverAssignment) ?>
    <fieldset>
        <legend><?= __('Edit Client Driver Assignment') ?></legend>
        <?php
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('client_driver_id', ['options' => $clientDrivers, 'empty' => true]);
            echo $this->Form->input('client_vehicle_id', ['options' => $clientVehicles, 'empty' => true]);
            echo $this->Form->input('from');
            echo $this->Form->input('to');
            echo $this->Form->input('client_contact_id', ['options' => $clientContacts, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
