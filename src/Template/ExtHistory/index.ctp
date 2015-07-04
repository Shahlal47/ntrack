<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Ext History'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="portlet light">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('memo_number') ?></th>
            <th><?= $this->Paginator->sort('ref_number') ?></th>
            <th><?= $this->Paginator->sort('from_date') ?></th>
            <th><?= $this->Paginator->sort('to_date') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('client_device_subscriptions_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($extHistory as $extHistory): ?>
        <tr>
            <td><?= $this->Number->format($extHistory->id) ?></td>
            <td><?= h($extHistory->memo_number) ?></td>
            <td><?= h($extHistory->ref_number) ?></td>
            <td><?= h($extHistory->from_date) ?></td>
            <td><?= h($extHistory->to_date) ?></td>
            <td><?= h($extHistory->created) ?></td>
            <td>
                <?= $extHistory->has('client_device_subscription') ? $this->Html->link($extHistory->client_device_subscription->id, ['controller' => 'ClientDeviceSubscriptions', 'action' => 'view', $extHistory->client_device_subscription->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $extHistory->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $extHistory->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $extHistory->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $extHistory->id)]) ?>
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
