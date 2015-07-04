<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Notification Type'), ['action' => 'edit', $notificationType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Notification Type'), ['action' => 'delete', $notificationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $notificationType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Notification Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Notification Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Notifications'), ['controller' => 'ClientNotifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Notification'), ['controller' => 'ClientNotifications', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="notificationTypes view large-10 medium-9 columns">
    <h2><?= h($notificationType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($notificationType->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($notificationType->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($notificationType->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Notifications') ?></h4>
    <?php if (!empty($notificationType->client_notifications)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Notifications') ?></th>
            <th><?= __('Notification Type Id') ?></th>
            <th><?= __('Pulled') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($notificationType->client_notifications as $clientNotifications): ?>
        <tr>
            <td><?= h($clientNotifications->id) ?></td>
            <td><?= h($clientNotifications->client_info_id) ?></td>
            <td><?= h($clientNotifications->notifications) ?></td>
            <td><?= h($clientNotifications->notification_type_id) ?></td>
            <td><?= h($clientNotifications->pulled) ?></td>
            <td><?= h($clientNotifications->created) ?></td>
            <td><?= h($clientNotifications->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientNotifications', 'action' => 'view', $clientNotifications->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientNotifications', 'action' => 'edit', $clientNotifications->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientNotifications', 'action' => 'delete', $clientNotifications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientNotifications->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
