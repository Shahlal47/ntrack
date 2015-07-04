<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientDeviceSubscription->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceSubscription->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Account Types'), ['controller' => 'AccountTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account Type'), ['controller' => 'AccountTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientDeviceSubscriptions form large-10 medium-9 columns">
    <?= $this->Form->create($clientDeviceSubscription) ?>
    <fieldset>
        <legend><?= __('Edit Client Device Subscription') ?></legend>
        <?php
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('subscribe_date', ['empty' => true, 'default' => '']);
            echo $this->Form->input('expire_date', ['empty' => true, 'default' => '']);
            echo $this->Form->input('active');
            echo $this->Form->input('account_type_id', ['options' => $accountTypes, 'empty' => true]);
            echo $this->Form->input('client_deviceid');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
