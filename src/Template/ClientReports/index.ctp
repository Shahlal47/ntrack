<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Client Report'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="portlet light">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('client_info_id') ?></th>
            <th><?= $this->Paginator->sort('reports') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientReports as $clientReport): ?>
        <tr>
            <td><?= $this->Number->format($clientReport->id) ?></td>
            <td>
                <?= $clientReport->has('client_info') ? $this->Html->link($clientReport->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientReport->client_info->id]) : '' ?>
            </td>
            <td><?= h($clientReport->reports) ?></td>
            <td><?= h($clientReport->created) ?></td>
            <td><?= h($clientReport->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientReport->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientReport->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientReport->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientReport->id)]) ?>
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
