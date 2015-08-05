
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Vehicle Type</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Vehicle Type'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
            <tr>

            <th class="text-center"><?= $this->Paginator->sort('Name') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Description') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Speed Limit') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Minimum Mileage') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Maximum Mileage') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('Fuel Consumption') ?></th>
            <th class="actions text-center"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($vehicleTypes as $vehicleType): ?>
        <tr>
            <td class="text-center"><?= h($vehicleType->name) ?></td>
            <td class="text-center"><?= h($vehicleType->description) ?></td>
            <td class="text-center"><?= $this->Number->format($vehicleType->def_speed_limit) ?></td>
            <td class="text-center"><?= $this->Number->format($vehicleType->def_min_mileage) ?></td>
            <td class="text-center"><?= $this->Number->format($vehicleType->def_man_mileage) ?></td>
            <td class="text-center"><?= $this->Number->format($vehicleType->def_fuel_consumption) ?></td>
            <td class="actions text-center">
                <?= $this->Html->link(__(''), ['action' => 'view', $vehicleType->id],['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $vehicleType->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $vehicleType->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $vehicleType->id)]) ?>
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
