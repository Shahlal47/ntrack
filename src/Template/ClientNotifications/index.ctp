<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Notification List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                   <li><?= $this->Html->link(__('New Client Notification'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Notification Types'), ['controller' => 'NotificationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Notification Type'), ['controller' => 'NotificationTypes', 'action' => 'add']) ?></li> 
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
     <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('client_info_id') ?></th>
            <th><?= $this->Paginator->sort('notifications') ?></th>
            <th><?= $this->Paginator->sort('notification_type_id') ?></th>
            <th><?= $this->Paginator->sort('pulled') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientNotifications as $clientNotification): ?>
        <tr>
            <td><?= $this->Number->format($clientNotification->id) ?></td>
            <td>
                <?= $clientNotification->has('client_info') ? $this->Html->link($clientNotification->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientNotification->client_info->id]) : '' ?>
            </td>
            <td><?= h($clientNotification->notifications) ?></td>
            <td>
                <?= $clientNotification->has('notification_type') ? $this->Html->link($clientNotification->notification_type->name, ['controller' => 'NotificationTypes', 'action' => 'view', $clientNotification->notification_type->id]) : '' ?>
            </td>
            <td><?= h($clientNotification->pulled) ?></td>
            <td><?= h($clientNotification->created) ?></td>
            <td><?= h($clientNotification->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientNotification->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientNotification->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientNotification->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientNotification->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
    </div>           
    </div>
</div>