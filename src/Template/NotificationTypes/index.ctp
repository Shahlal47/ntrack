
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Notification Type List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                   <li><?= $this->Html->link(__('New Notification Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Notifications'), ['controller' => 'ClientNotifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Notification'), ['controller' => 'ClientNotifications', 'action' => 'add']) ?></li> 
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
     <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($notificationTypes as $notificationType): ?>
        <tr>
            <td><?= $this->Number->format($notificationType->id) ?></td>
            <td><?= h($notificationType->name) ?></td>
            <td><?= h($notificationType->description) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $notificationType->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $notificationType->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $notificationType->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $notificationType->id)]) ?>
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
        <p><?= $this->Paginator->counter() ?></p>
    </div>           
    </div>
</div>