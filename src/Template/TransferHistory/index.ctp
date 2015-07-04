<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Transfer History'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="portlet light">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('from_user_id') ?></th>
            <th><?= $this->Paginator->sort('from_client_info_id') ?></th>
            <th><?= $this->Paginator->sort('to_user_id') ?></th>
            <th><?= $this->Paginator->sort('to_client_info_id') ?></th>
            <th><?= $this->Paginator->sort('from_veh_reg_no') ?></th>
            <th><?= $this->Paginator->sort('to_veh_reg_no') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($transferHistory as $transferHistory): ?>
        <tr>
            <td><?= $this->Number->format($transferHistory->id) ?></td>
            <td><?= $this->Number->format($transferHistory->from_user_id) ?></td>
            <td><?= $this->Number->format($transferHistory->from_client_info_id) ?></td>
            <td><?= $this->Number->format($transferHistory->to_user_id) ?></td>
            <td><?= $this->Number->format($transferHistory->to_client_info_id) ?></td>
            <td><?= h($transferHistory->from_veh_reg_no) ?></td>
            <td><?= h($transferHistory->to_veh_reg_no) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $transferHistory->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $transferHistory->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $transferHistory->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $transferHistory->id)]) ?>
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
