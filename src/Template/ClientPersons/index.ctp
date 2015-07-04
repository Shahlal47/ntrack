<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Client Person'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="portlet light">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('client_device_id') ?></th>
            <th><?= $this->Paginator->sort('client_info_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('mobile') ?></th>
            <th><?= $this->Paginator->sort('image') ?></th>
            <th><?= $this->Paginator->sort('identification_type_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientPersons as $clientPerson): ?>
        <tr>
            <td><?= $this->Number->format($clientPerson->id) ?></td>
            <td>
                <?= $clientPerson->has('client_device') ? $this->Html->link($clientPerson->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientPerson->client_device->id]) : '' ?>
            </td>
            <td>
                <?= $clientPerson->has('client_info') ? $this->Html->link($clientPerson->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientPerson->client_info->id]) : '' ?>
            </td>
            <td><?= h($clientPerson->name) ?></td>
            <td><?= h($clientPerson->mobile) ?></td>
            <td><?= h($clientPerson->image) ?></td>
            <td><?= $this->Number->format($clientPerson->identification_type_id) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientPerson->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientPerson->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientPerson->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientPerson->id)]) ?>
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
