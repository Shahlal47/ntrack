

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Device Subscription List</span>
        </div>
        <div class="actions col-md-12">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                   <li><?= $this->Html->link(__('New Client Device Subscription'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Account Types'), ['controller' => 'AccountTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Account Type'), ['controller' => 'AccountTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li> 
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
            <th><?= $this->Paginator->sort('subscribe_date') ?></th>
            <th><?= $this->Paginator->sort('expire_date') ?></th>
            <th><?= $this->Paginator->sort('active') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientDeviceSubscriptions as $clientDeviceSubscription): ?>
        <tr>
            <td><?= $this->Number->format($clientDeviceSubscription->id) ?></td>
            <td>
                <?= $clientDeviceSubscription->has('client_info') ? $this->Html->link($clientDeviceSubscription->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDeviceSubscription->client_info->id]) : '' ?>
            </td>
            <td><?= h($clientDeviceSubscription->subscribe_date) ?></td>
            <td><?= h($clientDeviceSubscription->expire_date) ?></td>
            <td><?= h($clientDeviceSubscription->active) ?></td>
            <td><?= h($clientDeviceSubscription->created) ?></td>
            <td><?= h($clientDeviceSubscription->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientDeviceSubscription->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientDeviceSubscription->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientDeviceSubscription->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceSubscription->id)]) ?>
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