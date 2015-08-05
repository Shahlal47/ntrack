

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Device Subscription List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Client Device Subscription'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
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
            <th class="text-center"><?= $this->Paginator->sort('client_info_id') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('subscribe_date') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('expire_date') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('active') ?></th>
            <th class="actions text-center"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientDeviceSubscriptions as $clientDeviceSubscription): ?>
        <tr>
            <td class="text-center">
                <?= $clientDeviceSubscription->has('client_info') ? $this->Html->link($clientDeviceSubscription->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDeviceSubscription->client_info->id]) : '' ?>
            </td>
            <td class="text-center"><?= h($clientDeviceSubscription->subscribe_date) ?></td>
            <td class="text-center"><?= h($clientDeviceSubscription->expire_date) ?></td>
            <td class="text-center"><?= h($clientDeviceSubscription->active) ?></td>
            <td class="actions text-center">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientDeviceSubscription->id],['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientDeviceSubscription->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientDeviceSubscription->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceSubscription->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table> 
    <div class="paginator text-center">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('Previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>          
    </div>
</div>
