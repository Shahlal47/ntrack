<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Expense Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Expense Type'), ['action' => 'edit', $expenseType->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Expense Type'), ['action' => 'delete', $expenseType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expenseType->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Expense Types'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Expense Type'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Name</td><td><?= h($expenseType->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($expenseType->description) ?></td></tr>
            </table>
        </div>
    </div>
</div>
