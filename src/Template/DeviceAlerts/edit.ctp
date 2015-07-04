<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $deviceAlert->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $deviceAlert->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Device Alerts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Alert Types'), ['controller' => 'AlertTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alert Type'), ['controller' => 'AlertTypes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="deviceAlerts form large-10 medium-9 columns">
    <?= $this->Form->create($deviceAlert) ?>
    <fieldset>
        <legend><?= __('Edit Device Alert') ?></legend>
        <?php
            echo $this->Form->input('deviceid');
            echo $this->Form->input('alert_type_id', ['options' => $alertTypes, 'empty' => true]);
            echo $this->Form->input('pulled');
            echo $this->Form->input('received_at');
            echo $this->Form->input('lat');
            echo $this->Form->input('lng');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
