<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Geofence'), ['action' => 'edit', $geofence->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Geofence'), ['action' => 'delete', $geofence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geofence->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Geofences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Geofence'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Geofence Types'), ['controller' => 'GeofenceTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Geofence Type'), ['controller' => 'GeofenceTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="geofences view large-10 medium-9 columns">
    <h2><?= h($geofence->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Geofence Type') ?></h6>
            <p><?= $geofence->has('geofence_type') ? $this->Html->link($geofence->geofence_type->name, ['controller' => 'GeofenceTypes', 'action' => 'view', $geofence->geofence_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Geo Shape') ?></h6>
            <p><?= h($geofence->geo_shape) ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($geofence->name) ?></p>
            <h6 class="subheader"><?= __('Color') ?></h6>
            <p><?= h($geofence->color) ?></p>
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $geofence->has('client_info') ? $this->Html->link($geofence->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $geofence->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Contact') ?></h6>
            <p><?= $geofence->has('client_contact') ? $this->Html->link($geofence->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $geofence->client_contact->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($geofence->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($geofence->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($geofence->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Geofence Points') ?></h6>
            <?= $this->Text->autoParagraph(h($geofence->geofence_points)) ?>
        </div>
    </div>
</div>
