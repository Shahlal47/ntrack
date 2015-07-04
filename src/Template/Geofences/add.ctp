<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Geofences'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Geofence Types'), ['controller' => 'GeofenceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Geofence Type'), ['controller' => 'GeofenceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="geofences form large-10 medium-9 columns">
    <?= $this->Form->create($geofence) ?>
    <fieldset>
        <legend><?= __('Add Geofence') ?></legend>
        <?php
            echo $this->Form->input('geofence_type_id', ['options' => $geofenceTypes]);
            echo $this->Form->input('geofence_points');
            echo $this->Form->input('geo_shape');
            echo $this->Form->input('name');
            echo $this->Form->input('color');
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('client_contact_id', ['options' => $clientContacts, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
