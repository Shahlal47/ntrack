<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Notification Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
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
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Information</td>
                    <td>
                        <?= $clientNotification->has('client_info') ? $this->Html->link($clientNotification->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientNotification->client_info->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Notification Type</td>
                    <td>
                        <?= $clientNotification->has('notification_type') ? $this->Html->link($clientNotification->notification_type->name, ['controller' => 'NotificationTypes', 'action' => 'view', $clientNotification->notification_type->id]) : '' ?>
                    </td>
                </tr>
                <tr><td class="text-right">Notification ID</td><td><?= $this->Number->format($clientNotification->id) ?></td></tr>
                <tr><td class="text-right">Notification</td><td><?= h($clientNotification->notifications) ?></td></tr>
                <tr><td class="text-right">Pulled or Not</td><td><?= $clientNotification->pulled ? __('Yes') : __('No'); ?></td></tr>
            </table>
        </div>
    </div>
</div>
