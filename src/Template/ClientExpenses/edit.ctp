<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientExpense->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientExpense->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Expenses'), ['action' => 'index']) ?></li>
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
<div class="clientExpenses form large-10 medium-9 columns">
    <?= $this->Form->create($clientExpense) ?>
    <fieldset>
        <legend><?= __('Edit Client Expense') ?></legend>
        <?php
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('expense_type_id', ['options' => $expenseTypes, 'empty' => true]);
            echo $this->Form->input('client_device_id', ['options' => $clientDevices, 'empty' => true]);
            echo $this->Form->input('ondate', ['empty' => true, 'default' => '']);
            echo $this->Form->input('amount');
            echo $this->Form->input('comments');
            echo $this->Form->input('client_contact_id', ['options' => $clientContacts, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
