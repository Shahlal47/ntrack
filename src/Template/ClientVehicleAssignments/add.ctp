<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientVehicleAssignments form large-10 medium-9 columns">
    <?= $this->Form->create($clientVehicleAssignment) ?>
    <fieldset>
        <legend><?= __('Add Client Vehicle Assignment') ?></legend>
        <?php
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('client_vehicle_id', ['options' => $clientVehicles, 'empty' => true]);
            echo $this->Form->input('client_trip_id');
            echo $this->Form->input('assignment_date', ['empty' => true, 'default' => '']);
            echo $this->Form->input('start_time');
            echo $this->Form->input('finish_time');
            echo $this->Form->input('client_contact_id', ['options' => $clientContacts, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
