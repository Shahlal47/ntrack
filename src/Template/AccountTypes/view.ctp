<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Account Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Account Type'), ['action' => 'edit', $accountType->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Account Type'), ['action' => 'delete', $accountType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $accountType->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Account Types'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Account Type'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Account Type</td><td><?= h($accountType->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($accountType->description) ?></td></tr>
                <tr><td class="text-right">Account Type ID</td><td><?= $this->Number->format($accountType->id) ?></td></tr>
                <tr><td class="text-right">Month</td><td><?= $this->Number->format($accountType->months) ?></td></tr>
            </table>
        </div>
    </div>
</div>

