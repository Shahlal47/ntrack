<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
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
            <th><?= $this->Paginator->sort('client_vehicle_id') ?></th>
            <th><?= $this->Paginator->sort('client_trip_id') ?></th>
            <th><?= $this->Paginator->sort('assignment_date') ?></th>
            <th><?= $this->Paginator->sort('start_time') ?></th>
            <th><?= $this->Paginator->sort('finish_time') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientVehicleAssignments as $clientVehicleAssignment): ?>
        <tr>
            <td><?= $this->Number->format($clientVehicleAssignment->id) ?></td>
            <td>
                <?= $clientVehicleAssignment->has('client_info') ? $this->Html->link($clientVehicleAssignment->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientVehicleAssignment->client_info->id]) : '' ?>
            </td>
            <td>
                <?= $clientVehicleAssignment->has('client_vehicle') ? $this->Html->link($clientVehicleAssignment->client_vehicle->id, ['controller' => 'ClientVehicles', 'action' => 'view', $clientVehicleAssignment->client_vehicle->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($clientVehicleAssignment->client_trip_id) ?></td>
            <td><?= h($clientVehicleAssignment->assignment_date) ?></td>
            <td><?= h($clientVehicleAssignment->start_time) ?></td>
            <td><?= h($clientVehicleAssignment->finish_time) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientVehicleAssignment->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientVehicleAssignment->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientVehicleAssignment->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicleAssignment->id)]) ?>
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
