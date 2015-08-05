<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Vehicle Assignment List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Trip Paths'), ['controller' => 'ClientTripPaths', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Trip Path'), ['controller' => 'ClientTripPaths', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center"><?= $this->Paginator->sort('Client') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('client_contact_id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('client_vehicle_id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('client_trip_path_id') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('assignment_date') ?></th>
                    <th class="text-center"><?= $this->Paginator->sort('start_time') ?></th>
                    <th class="actions text-center"><?= __('Actions') ?></th>
                </tr>
            </thead>
    <tbody>
    <?php foreach ($clientVehicleAssignments as $clientVehicleAssignment): ?>
        <tr>
            <td class="text-center">
                <?= $clientVehicleAssignment->has('client_info') ? $this->Html->link($clientVehicleAssignment->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientVehicleAssignment->client_info->id]) : '' ?>
            </td>
            <td class="text-center">
                <?= $clientVehicleAssignment->has('client_contact') ? $this->Html->link($clientVehicleAssignment->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientVehicleAssignment->client_contact->id]) : '' ?>
            </td>
            <td class="text-center">
                <?= $clientVehicleAssignment->has('client_vehicle') ? $this->Html->link($clientVehicleAssignment->client_vehicle->id, ['controller' => 'ClientVehicles', 'action' => 'view', $clientVehicleAssignment->client_vehicle->id]) : '' ?>
            </td>
            <td class="text-center">
                <?= $clientVehicleAssignment->has('client_trip_path') ? $this->Html->link($clientVehicleAssignment->client_trip_path->id, ['controller' => 'ClientTripPaths', 'action' => 'view', $clientVehicleAssignment->client_trip_path->id]) : '' ?>
            </td>
            <td class="text-center"><?= h($clientVehicleAssignment->assignment_date) ?></td>
            <td class="text-center"><?= h($clientVehicleAssignment->start_time) ?></td>
            <td class="actions text-center">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientVehicleAssignment->id], ['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientVehicleAssignment->id], ['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientVehicleAssignment->id], ['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicleAssignment->id)]) ?>
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
