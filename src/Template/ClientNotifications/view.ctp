<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Notification'), ['action' => 'edit', $clientNotification->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Notification'), ['action' => 'delete', $clientNotification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientNotification->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Notifications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Notification'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Notification Types'), ['controller' => 'NotificationTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notification Type'), ['controller' => 'NotificationTypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientNotifications view large-10 medium-9 columns">
    <h2><?= h($clientNotification->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientNotification->has('client_info') ? $this->Html->link($clientNotification->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientNotification->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Notifications') ?></h6>
            <p><?= h($clientNotification->notifications) ?></p>
            <h6 class="subheader"><?= __('Notification Type') ?></h6>
            <p><?= $clientNotification->has('notification_type') ? $this->Html->link($clientNotification->notification_type->name, ['controller' => 'NotificationTypes', 'action' => 'view', $clientNotification->notification_type->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientNotification->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientNotification->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientNotification->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Pulled') ?></h6>
            <p><?= $clientNotification->pulled ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
