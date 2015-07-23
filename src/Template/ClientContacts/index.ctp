<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Contact List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Client Contact'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contact Devices'), ['controller' => 'ClientContactDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact Device'), ['controller' => 'ClientContactDevices', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Device Geo Fences'), ['controller' => 'ClientDeviceGeofences', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device Geo Fence'), ['controller' => 'ClientDeviceGeofences', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Trip Paths'), ['controller' => 'ClientTripPaths', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Trip Path'), ['controller' => 'ClientTripPaths', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Geo Fences'), ['controller' => 'Geofences', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Geo Fence'), ['controller' => 'Geofences', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center"><?= $this->Paginator->sort('name') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('email') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('mobile') ?></th>
                <th class="actions text-center"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clientContacts as $clientContact): ?>
                <tr>
                    <td class="text-center"><?= h($clientContact->name) ?></td>
                    <td class="text-center"><?= h($clientContact->email) ?></td>
                    <td class="text-center"><?= h($clientContact->mobile) ?></td>
                    <td class="actions text-center">
                        <?= $this->Html->link(__(''), ['action' => 'view', $clientContact->id],['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $clientContact->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientContact->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientContact->id)]) ?>
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
</div>