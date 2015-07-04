
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Alert Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Alert Type'), ['action' => 'edit', $alertType->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Alert Type'), ['action' => 'delete', $alertType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alertType->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Alert Types'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Alert Type'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Device Alerts'), ['controller' => 'DeviceAlerts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Device Alert'), ['controller' => 'DeviceAlerts', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Alert Type Name</td><td><?= h($alertType->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($alertType->description) ?></td></tr>
                <tr><td class="text-right">Alert Type ID</td><td><?= $this->Number->format($alertType->id) ?></td></tr>
                <tr><td class="text-right">Message Code</td><td><?= $this->Number->format($alertType->msg_code) ?></td></tr>
            </table>
        </div>
    </div>
</div>
