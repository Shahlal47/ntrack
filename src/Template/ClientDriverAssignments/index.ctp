
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Driver Assignment List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Client Driver Assignment'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center"><?= $this->Paginator->sort('client_info_id') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('client_driver_id') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('client_vehicle_id') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('from') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('to') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('client_contact_id') ?></th>
                <th class="actions text-center"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clientDriverAssignments as $clientDriverAssignment): ?>
                <tr>
                    <td class="text-center">
                        <?= $clientDriverAssignment->has('client_info') ? $this->Html->link($clientDriverAssignment->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDriverAssignment->client_info->id]) : '' ?>
                    </td>
                    <td class="text-center">
                        <?= $clientDriverAssignment->has('client_driver') ? $this->Html->link($clientDriverAssignment->client_driver->name, ['controller' => 'ClientDrivers', 'action' => 'view', $clientDriverAssignment->client_driver->id]) : '' ?>
                    </td>
                    <td class="text-center">
                        <?= $clientDriverAssignment->has('client_vehicle') ? $this->Html->link($clientDriverAssignment->client_vehicle->id, ['controller' => 'ClientVehicles', 'action' => 'view', $clientDriverAssignment->client_vehicle->id]) : '' ?>
                    </td>
                    <td class="text-center"><?= h($clientDriverAssignment->from) ?></td>
                    <td class="text-center"><?= h($clientDriverAssignment->to) ?></td>
                    <td class="text-center">
                        <?= $clientDriverAssignment->has('client_contact') ? $this->Html->link($clientDriverAssignment->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientDriverAssignment->client_contact->id]) : '' ?>
                    </td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $clientDriverAssignment->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $clientDriverAssignment->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientDriverAssignment->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDriverAssignment->id)]) ?>
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
