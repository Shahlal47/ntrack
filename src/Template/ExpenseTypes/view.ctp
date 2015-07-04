<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Expense Type'), ['action' => 'edit', $expenseType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Expense Type'), ['action' => 'delete', $expenseType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $expenseType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Expense Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Expense Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="expenseTypes view large-10 medium-9 columns">
    <h2><?= h($expenseType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($expenseType->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($expenseType->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($expenseType->id) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= $this->Number->format($expenseType->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= $this->Number->format($expenseType->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Expenses') ?></h4>
    <?php if (!empty($expenseType->client_expenses)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Expense Type Id') ?></th>
            <th><?= __('Client Device Id') ?></th>
            <th><?= __('Ondate') ?></th>
            <th><?= __('Amount') ?></th>
            <th><?= __('Comments') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($expenseType->client_expenses as $clientExpenses): ?>
        <tr>
            <td><?= h($clientExpenses->id) ?></td>
            <td><?= h($clientExpenses->client_info_id) ?></td>
            <td><?= h($clientExpenses->expense_type_id) ?></td>
            <td><?= h($clientExpenses->client_device_id) ?></td>
            <td><?= h($clientExpenses->ondate) ?></td>
            <td><?= h($clientExpenses->amount) ?></td>
            <td><?= h($clientExpenses->comments) ?></td>
            <td><?= h($clientExpenses->created) ?></td>
            <td><?= h($clientExpenses->modified) ?></td>
            <td><?= h($clientExpenses->client_contact_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientExpenses', 'action' => 'view', $clientExpenses->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientExpenses', 'action' => 'edit', $clientExpenses->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientExpenses', 'action' => 'delete', $clientExpenses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientExpenses->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
