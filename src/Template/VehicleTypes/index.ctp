
<div class="portlet light">
    <div class="btn-group right">
        <button type="button" class="btn blue-hoki btn-sm dropdown-toggle" data-toggle="dropdown" data-close-others="true">
        <span class="hidden-sm hidden-xs">Actions&nbsp;</span><i class="fa fa-angle-down"></i>
        </button>
        <ul class="dropdown-menu">
        <li><?= $this->Html->link(__('New Vehicle Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'add']) ?></li>
    </ul>
            </div>

            <hr/>

    <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('description') ?></th>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('def_speed_limit') ?></th>
            <th><?= $this->Paginator->sort('def_min_mileage') ?></th>
            <th><?= $this->Paginator->sort('def_man_mileage') ?></th>
            <th><?= $this->Paginator->sort('def_fuel_consumption') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($vehicleTypes as $vehicleType): ?>
        <tr>
            <td><?= h($vehicleType->name) ?></td>
            <td><?= h($vehicleType->description) ?></td>
            <td><?= $this->Number->format($vehicleType->id) ?></td>
            <td><?= $this->Number->format($vehicleType->def_speed_limit) ?></td>
            <td><?= $this->Number->format($vehicleType->def_min_mileage) ?></td>
            <td><?= $this->Number->format($vehicleType->def_man_mileage) ?></td>
            <td><?= $this->Number->format($vehicleType->def_fuel_consumption) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $vehicleType->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $vehicleType->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $vehicleType->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleType->id)]) ?>
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
