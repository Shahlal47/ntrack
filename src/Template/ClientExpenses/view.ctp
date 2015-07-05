<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Expense Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Expense'), ['action' => 'edit', $clientExpense->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Expense'), ['action' => 'delete', $clientExpense->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientExpense->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Expenses'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Expense'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Expense Types'), ['controller' => 'ExpenseTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Expense Type'), ['controller' => 'ExpenseTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Name</td>
                    <td><?= $clientExpense->has('client_info') ? $this->Html->link($clientExpense->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientExpense->client_info->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Expense Type</td>
                    <td><?= $clientExpense->has('expense_type') ? $this->Html->link($clientExpense->expense_type->name, ['controller' => 'ExpenseTypes', 'action' => 'view', $clientExpense->expense_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Client Device</td>
                    <td><?= $clientExpense->has('client_device') ? $this->Html->link($clientExpense->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientExpense->client_device->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Client Contact</td>
                    <td><?= $clientExpense->has('client_contact') ? $this->Html->link($clientExpense->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientExpense->client_contact->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Comments</td>
                    <td><?= h($clientExpense->comments) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Amount</td>
                    <td><?= $this->Number->format($clientExpense->amount) ?></td>
                </tr>
                <tr>
                    <td class="text-right">ONN Date</td>
                    <td><?= h($clientExpense->ondate) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
