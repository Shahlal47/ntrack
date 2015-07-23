<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Report List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Client Report'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center"><?= $this->Paginator->sort('ID') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('Client Information') ?></th>
        <!--            <th class="text-center col-sm-1">--><?//= $this->Paginator->sort('Reports') ?><!--</th>-->
                    <th class="actions text-center"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($clientReports as $clientReport): ?>
                <tr>
                    <td class="text-center"><?= $this->Number->format($clientReport->id) ?></td>
                    <td class="text-center">
                        <?= $clientReport->has('client_info') ? $this->Html->link($clientReport->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientReport->client_info->id]) : '' ?>
                    </td>
        <!--            <td class="text-center" style="width:10%">--><?//= h($clientReport->reports) ?><!--</td>-->
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $clientReport->id],['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $clientReport->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientReport->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientReport->id)]) ?>
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
