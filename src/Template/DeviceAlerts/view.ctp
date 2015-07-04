<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Device Alert'), ['action' => 'edit', $deviceAlert->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Device Alert'), ['action' => 'delete', $deviceAlert->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceAlert->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Device Alerts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Device Alert'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alert Types'), ['controller' => 'AlertTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alert Type'), ['controller' => 'AlertTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="deviceAlerts view large-10 medium-9 columns">
    <h2><?= h($deviceAlert->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Deviceid') ?></h6>
            <p><?= h($deviceAlert->deviceid) ?></p>
            <h6 class="subheader"><?= __('Alert Type') ?></h6>
            <p><?= $deviceAlert->has('alert_type') ? $this->Html->link($deviceAlert->alert_type->name, ['controller' => 'AlertTypes', 'action' => 'view', $deviceAlert->alert_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Lat') ?></h6>
            <p><?= h($deviceAlert->lat) ?></p>
            <h6 class="subheader"><?= __('Lng') ?></h6>
            <p><?= h($deviceAlert->lng) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($deviceAlert->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Received At') ?></h6>
            <p><?= h($deviceAlert->received_at) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($deviceAlert->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($deviceAlert->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Pulled') ?></h6>
            <p><?= $deviceAlert->pulled ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
