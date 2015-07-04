<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Client Trip Path'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="portlet light">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('client_info_id') ?></th>
            <th><?= $this->Paginator->sort('client_contact_id') ?></th>
            <th><?= $this->Paginator->sort('trip_path') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th><?= $this->Paginator->sort('active') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientTripPaths as $clientTripPath): ?>
        <tr>
            <td><?= $this->Number->format($clientTripPath->id) ?></td>
            <td>
                <?= $clientTripPath->has('client_info') ? $this->Html->link($clientTripPath->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientTripPath->client_info->id]) : '' ?>
            </td>
            <td>
                <?= $clientTripPath->has('client_contact') ? $this->Html->link($clientTripPath->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientTripPath->client_contact->id]) : '' ?>
            </td>
            <td><?= h($clientTripPath->trip_path) ?></td>
            <td><?= h($clientTripPath->created) ?></td>
            <td><?= h($clientTripPath->modified) ?></td>
            <td><?= h($clientTripPath->active) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientTripPath->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientTripPath->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientTripPath->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientTripPath->id)]) ?>
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
