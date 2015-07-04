<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $geofenceType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $geofenceType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Geofence Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="geofenceTypes form large-10 medium-9 columns">
    <?= $this->Form->create($geofenceType) ?>
    <fieldset>
        <legend><?= __('Edit Geofence Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
