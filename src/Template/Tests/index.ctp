<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Test'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="tests index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('created_by') ?></th>
            <th><?= $this->Paginator->sort('modified_by') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tests as $test): ?>
        <tr>
            <td><?= $this->Number->format($test->id) ?></td>
            <td><?= $this->Number->format($test->name) ?></td>
            <td><?= h($test->created_by) ?></td>
            <td><?= h($test->modified_by) ?></td>
            <td><?= h($test->created) ?></td>
            <td><?= h($test->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $test->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $test->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?>
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
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
