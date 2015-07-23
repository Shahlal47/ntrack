<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Expense Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Ext History'), ['action' => 'edit', $extHistory->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Ext History'), ['action' => 'delete', $extHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $extHistory->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Ext History'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Ext History'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Device Subscription</td>
                    <td>
                        <?= $extHistory->has('client_device_subscription') ? $this->Html->link($extHistory->client_device_subscription->id, ['controller' => 'ClientDeviceSubscriptions', 'action' => 'view', $extHistory->client_device_subscription->id]) : '' ?>
                    </td>
                </tr>
                <tr><td class="text-right">Memo Number</td><td><?= h($extHistory->memo_number) ?></td></tr>
                <tr><td class="text-right">Reference Number</td><td><?= h($extHistory->ref_number) ?></td></tr>
                <tr><td class="text-right">From Date</td><td><?= h($extHistory->from_date) ?></td></tr>
                <tr><td class="text-right">To Date</td><td><?= h($extHistory->to_date) ?></td></tr>
            </table>
        </div>
    </div>
</div>
