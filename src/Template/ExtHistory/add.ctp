<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Ext History'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="extHistory form large-10 medium-9 columns">
    <?= $this->Form->create($extHistory) ?>
    <fieldset>
        <legend><?= __('Add Ext History') ?></legend>
        <?php
            echo $this->Form->input('memo_number');
            echo $this->Form->input('ref_number');
            echo $this->Form->input('from_date');
            echo $this->Form->input('to_date');
            echo $this->Form->input('client_device_subscriptions_id', ['options' => $clientDeviceSubscriptions]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
