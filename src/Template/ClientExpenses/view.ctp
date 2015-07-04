<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
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
<div class="clientExpenses view large-10 medium-9 columns">
    <h2><?= h($clientExpense->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientExpense->has('client_info') ? $this->Html->link($clientExpense->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientExpense->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Expense Type') ?></h6>
            <p><?= $clientExpense->has('expense_type') ? $this->Html->link($clientExpense->expense_type->name, ['controller' => 'ExpenseTypes', 'action' => 'view', $clientExpense->expense_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Device') ?></h6>
            <p><?= $clientExpense->has('client_device') ? $this->Html->link($clientExpense->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientExpense->client_device->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Comments') ?></h6>
            <p><?= h($clientExpense->comments) ?></p>
            <h6 class="subheader"><?= __('Client Contact') ?></h6>
            <p><?= $clientExpense->has('client_contact') ? $this->Html->link($clientExpense->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientExpense->client_contact->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientExpense->id) ?></p>
            <h6 class="subheader"><?= __('Amount') ?></h6>
            <p><?= $this->Number->format($clientExpense->amount) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Ondate') ?></h6>
            <p><?= h($clientExpense->ondate) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientExpense->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientExpense->modified) ?></p>
        </div>
    </div>
</div>
