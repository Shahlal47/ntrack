<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Expense List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                  <li><?= $this->Html->link(__('New Client Expense'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Expense Types'), ['controller' => 'ExpenseTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Expense Type'), ['controller' => 'ExpenseTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>  
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
            <th><?= $this->Paginator->sort('expense_type_id') ?></th>
            <th><?= $this->Paginator->sort('client_device_id') ?></th>
            <th><?= $this->Paginator->sort('ondate') ?></th>
            <th><?= $this->Paginator->sort('amount') ?></th>
            <th><?= $this->Paginator->sort('comments') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientExpenses as $clientExpense): ?>
        <tr>
            <td><?= $this->Number->format($clientExpense->id) ?></td>
            <td>
                <?= $clientExpense->has('client_info') ? $this->Html->link($clientExpense->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientExpense->client_info->id]) : '' ?>
            </td>
            <td>
                <?= $clientExpense->has('expense_type') ? $this->Html->link($clientExpense->expense_type->name, ['controller' => 'ExpenseTypes', 'action' => 'view', $clientExpense->expense_type->id]) : '' ?>
            </td>
            <td>
                <?= $clientExpense->has('client_device') ? $this->Html->link($clientExpense->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientExpense->client_device->id]) : '' ?>
            </td>
            <td><?= h($clientExpense->ondate) ?></td>
            <td><?= $this->Number->format($clientExpense->amount) ?></td>
            <td><?= h($clientExpense->comments) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientExpense->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientExpense->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientExpense->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientExpense->id)]) ?>
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
    </div>           
    </div>
</div>