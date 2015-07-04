

<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Driver List</span>
        </div>
        <div class="actions col-md-12">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                   <li><?= $this->Html->link(__('New Client Driver'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
       <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('driving_license') ?></th>
            <th><?= $this->Paginator->sort('address') ?></th>
            <th><?= $this->Paginator->sort('mobile') ?></th>
            <th><?= $this->Paginator->sort('join_date') ?></th>
            <th><?= $this->Paginator->sort('client_info_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientDrivers as $clientDriver): ?>
        <tr>
            <td><?= $this->Number->format($clientDriver->id) ?></td>
            <td><?= h($clientDriver->name) ?></td>
            <td><?= h($clientDriver->driving_license) ?></td>
            <td><?= h($clientDriver->address) ?></td>
            <td><?= h($clientDriver->mobile) ?></td>
            <td><?= h($clientDriver->join_date) ?></td>
            <td>
                <?= $clientDriver->has('client_info') ? $this->Html->link($clientDriver->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDriver->client_info->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientDriver->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientDriver->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientDriver->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDriver->id)]) ?>
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
</div>