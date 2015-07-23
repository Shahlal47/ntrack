<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Transfer History List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Transfer History'), ['action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center"><?= $this->Paginator->sort('id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('from_veh_reg_no') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('to_veh_reg_no') ?></th>
                    <th class="actions text-center"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($transferHistories as $transferHistory): ?>
                <tr>
                    <td class="text-center"><?= $this->Number->format($transferHistory->id) ?></td>
                    <td class="text-center"><?= h($transferHistory->from_veh_reg_no) ?></td>
                    <td class="text-center"><?= h($transferHistory->to_veh_reg_no) ?></td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $transferHistory->id], ['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $transferHistory->id], ['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $transferHistory->id], ['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $transferHistory->id)]) ?>
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


<!--            <th>--><?//= $this->Paginator->sort('from_user_id') ?><!--</th>-->
<!--            <th>--><?//= $this->Paginator->sort('from_client_info_id') ?><!--</th>-->
<!--            <th>--><?//= $this->Paginator->sort('to_user_id') ?><!--</th>-->
<!--            <th>--><?//= $this->Paginator->sort('to_client_info_id') ?><!--</th>-->

<!--            <td>--><?//= $this->Number->format($transferHistory->from_user_id) ?><!--</td>-->
<!--            <td>--><?//= $this->Number->format($transferHistory->from_client_info_id) ?><!--</td>-->
<!--            <td>--><?//= $this->Number->format($transferHistory->to_user_id) ?><!--</td>-->
<!--            <td>--><?//= $this->Number->format($transferHistory->to_client_info_id) ?><!--</td>-->