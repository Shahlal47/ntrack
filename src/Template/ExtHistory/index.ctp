<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Ext History List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Ext History'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center"><?= $this->Paginator->sort('memo_number') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('ref_number') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('from_date') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('to_date') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('client_device_subscriptions_id') ?></th>
                    <th class="actions text-center"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($extHistory as $extHistory): ?>
                <tr>
                    <td class="text-center"><?= h($extHistory->memo_number) ?></td>
                    <td class="text-center"><?= h($extHistory->ref_number) ?></td>
                    <td class="text-center"><?= h($extHistory->from_date) ?></td>
                    <td class="text-center"><?= h($extHistory->to_date) ?></td>
                    <td class="text-center">
                        <?= $extHistory->has('client_device_subscription') ? $this->Html->link($extHistory->client_device_subscription->id, ['controller' => 'ClientDeviceSubscriptions', 'action' => 'view', $extHistory->client_device_subscription->id]) : '' ?>
                    </td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $extHistory->id], ['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $extHistory->id], ['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $extHistory->id], ['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $extHistory->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
        <div class="paginator text-center">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('Previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
