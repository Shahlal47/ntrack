<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Public ID List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Client Public ID'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center"><?= $this->Paginator->sort('ID') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('Public ID') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('Client Information') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('Client Device') ?></th>
                <th class="actions text-center"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clientPublicids as $clientPublicid): ?>
                <tr>
                    <td class="text-center"><?= $this->Number->format($clientPublicid->id) ?></td>
                    <td class="text-center"><?= h($clientPublicid->publicid) ?></td>
                    <td class="text-center">
                        <?= $clientPublicid->has('client_info') ? $this->Html->link($clientPublicid->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientPublicid->client_info->id]) : '' ?>
                    </td>
                    <td class="text-center">
                        <?= $clientPublicid->has('client_device') ? $this->Html->link($clientPublicid->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientPublicid->client_device->id]) : '' ?>
                    </td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $clientPublicid->id],['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $clientPublicid->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientPublicid->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientPublicid->id)]) ?>
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