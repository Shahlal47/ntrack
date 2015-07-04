<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Ext History'), ['action' => 'edit', $extHistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ext History'), ['action' => 'delete', $extHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extHistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ext History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ext History'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="extHistory view large-10 medium-9 columns">
    <h2><?= h($extHistory->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Memo Number') ?></h6>
            <p><?= h($extHistory->memo_number) ?></p>
            <h6 class="subheader"><?= __('Ref Number') ?></h6>
            <p><?= h($extHistory->ref_number) ?></p>
            <h6 class="subheader"><?= __('Client Device Subscription') ?></h6>
            <p><?= $extHistory->has('client_device_subscription') ? $this->Html->link($extHistory->client_device_subscription->id, ['controller' => 'ClientDeviceSubscriptions', 'action' => 'view', $extHistory->client_device_subscription->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($extHistory->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('From Date') ?></h6>
            <p><?= h($extHistory->from_date) ?></p>
            <h6 class="subheader"><?= __('To Date') ?></h6>
            <p><?= h($extHistory->to_date) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($extHistory->created) ?></p>
        </div>
    </div>
</div>
