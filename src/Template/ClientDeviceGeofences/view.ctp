<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Device Geofence'), ['action' => 'edit', $clientDeviceGeofence->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Device Geofence'), ['action' => 'delete', $clientDeviceGeofence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceGeofence->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Device Geofences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device Geofence'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientDeviceGeofences view large-10 medium-9 columns">
    <h2><?= h($clientDeviceGeofence->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Contact') ?></h6>
            <p><?= $clientDeviceGeofence->has('client_contact') ? $this->Html->link($clientDeviceGeofence->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientDeviceGeofence->client_contact->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Device') ?></h6>
            <p><?= $clientDeviceGeofence->has('client_device') ? $this->Html->link($clientDeviceGeofence->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientDeviceGeofence->client_device->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Geofence') ?></h6>
            <p><?= $clientDeviceGeofence->has('geofence') ? $this->Html->link($clientDeviceGeofence->geofence->name, ['controller' => 'Geofences', 'action' => 'view', $clientDeviceGeofence->geofence->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientDeviceGeofence->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientDeviceGeofence->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientDeviceGeofence->modified) ?></p>
        </div>
    </div>
</div>
