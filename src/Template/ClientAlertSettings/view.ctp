<div class="clientAlertSettings view large-10 medium-9 columns">
    <h2><?= h($clientAlertSetting->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientAlertSetting->has('client_info') ? $this->Html->link($clientAlertSetting->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientAlertSetting->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Alert Type') ?></h6>
            <p><?= $clientAlertSetting->has('alert_type') ? $this->Html->link($clientAlertSetting->alert_type->name, ['controller' => 'AlertTypes', 'action' => 'view', $clientAlertSetting->alert_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Contact') ?></h6>
            <p><?= $clientAlertSetting->has('client_contact') ? $this->Html->link($clientAlertSetting->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientAlertSetting->client_contact->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Device') ?></h6>
            <p><?= $clientAlertSetting->has('client_device') ? $this->Html->link($clientAlertSetting->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientAlertSetting->client_device->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientAlertSetting->id) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Is Sms') ?></h6>
            <p><?= $clientAlertSetting->is_sms ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Is Email') ?></h6>
            <p><?= $clientAlertSetting->is_email ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>


<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Alert Setting Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Alert Setting'), ['action' => 'edit', $clientAlertSetting->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Alert Setting'), ['action' => 'delete', $clientAlertSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientAlertSetting->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Alert Types'), ['controller' => 'AlertTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Alert Type'), ['controller' => 'AlertTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Alert Type Name</td><td><?= h($clientAlertSetting->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($clientAlertSetting->description) ?></td></tr>
                <tr><td class="text-right">Alert Type ID</td><td><?= $this->Number->format($clientAlertSetting->id) ?></td></tr>
                <tr><td class="text-right">Message Code</td><td><?= $this->Number->format($clientAlertSetting->msg_code) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($clientAlertSetting->description) ?></td></tr>
                <tr><td class="text-right">Alert Type ID</td><td><?= $this->Number->format($clientAlertSetting->id) ?></td></tr>
                <tr><td class="text-right">Message Code</td><td><?= $this->Number->format($clientAlertSetting->msg_code) ?></td></tr>
            </table>
        </div>
    </div>
</div>