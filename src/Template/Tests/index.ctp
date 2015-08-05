
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <span class="caption-subject bold">Testing List Table</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Create New Test'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('Optional Form'), ['action' => 'option_form']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered"><br>
            <thead>
                <tr>
                    <th class="text-center"><?= $this->Paginator->sort('Name') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('Mobile') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('Email') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('Address') ?></th>
                    <th class="actions text-center"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($tests as $test): ?>
                <tr>
                    <td class="text-center"><?= h($test->name) ?></td>
                    <td class="text-center"><?= h($test->mobile) ?></td>
                    <td class="text-center"><?= h($test->email) ?></td>
                    <td class="text-center"><?= h($test->address) ?></td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $test->id], ['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $test->id], ['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $test->id], ['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator text-center">
            <ul class="pagination">
                <?= $this->Paginator->prev('' . __('Previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Next') . '') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
