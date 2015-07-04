<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientDeviceGeofence->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceGeofence->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Device Geofences'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientDeviceGeofences form large-10 medium-9 columns">
    <?= $this->Form->create($clientDeviceGeofence) ?>
    <fieldset>
        <legend><?= __('Edit Client Device Geofence') ?></legend>
        <?php
            echo $this->Form->input('client_contact_id', ['options' => $clientContacts, 'empty' => true]);
            echo $this->Form->input('client_device_id', ['options' => $clientDevices, 'empty' => true]);
            echo $this->Form->input('geofence_id', ['options' => $geofences, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
