<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Person List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Client Person'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
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
                    <th class="text-center"><?= $this->Paginator->sort('id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('client_info_id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('name') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('mobile') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('image') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('identification_type_id') ?></th>
                    <th class="actions text-center"><?= __('Actions') ?></th>
                </tr>
            <tbody>
                <?php foreach ($clientPersons as $clientPerson): ?>
                <tr>
                    <td class="text-center"><?= $this->Number->format($clientPerson->id) ?></td>
                    <td class="text-center">
                        <?= $clientPerson->has('client_info') ? $this->Html->link($clientPerson->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientPerson->client_info->id]) : '' ?>
                    </td>
                    <td class="text-center"><?= h($clientPerson->name) ?></td>
                    <td class="text-center"><?= h($clientPerson->mobile) ?></td>
                    <td class="text-center"><?= h($clientPerson->image) ?></td>
                    <td class="text-center"><?= $this->Number->format($clientPerson->identification_type_id) ?></td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $clientPerson->id],['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $clientPerson->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientPerson->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientPerson->id)]) ?>
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
        </div>
    </div>
</div>

