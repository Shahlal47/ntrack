<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Device Subscription Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Device Subscription'), ['action' => 'edit', $clientDeviceSubscription->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Device Subscription'), ['action' => 'delete', $clientDeviceSubscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDeviceSubscription->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device Subscription'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Account Types'), ['controller' => 'AccountTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Account Type'), ['controller' => 'AccountTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Name</td>
                    <td><?= $clientDeviceSubscription->has('client_info') ? $this->Html->link($clientDeviceSubscription->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDeviceSubscription->client_info->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Account Type</td>
                    <td><?= $clientDeviceSubscription->has('account_type') ? $this->Html->link($clientDeviceSubscription->account_type->name, ['controller' => 'AccountTypes', 'action' => 'view', $clientDeviceSubscription->account_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Client Device ID</td>
                    <td><?= h($clientDeviceSubscription->client_deviceid) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Subscription Date</td>
                    <td><?= h($clientDeviceSubscription->subscribe_date) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Expire Date</td>
                    <td><?= h($clientDeviceSubscription->expire_date) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Active or Not</td>
                    <td><?= $clientDeviceSubscription->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
