<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $expenseType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $expenseType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Expense Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="expenseTypes form large-10 medium-9 columns">
    <?= $this->Form->create($expenseType) ?>
    <fieldset>
        <legend><?= __('Edit Expense Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
