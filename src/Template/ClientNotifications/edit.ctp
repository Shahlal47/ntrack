<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientNotification->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientNotification->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Notifications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notification Types'), ['controller' => 'NotificationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notification Type'), ['controller' => 'NotificationTypes', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientNotifications form large-10 medium-9 columns">
    <?= $this->Form->create($clientNotification) ?>
    <fieldset>
        <legend><?= __('Edit Client Notification') ?></legend>
        <?php
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('notifications');
            echo $this->Form->input('notification_type_id', ['options' => $notificationTypes, 'empty' => true]);
            echo $this->Form->input('pulled');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
