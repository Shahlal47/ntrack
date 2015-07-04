<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Vehicle Model'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="portlet light">
    <table class="table table-bordered">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('vehicle_type_id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('desc') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($vehicleModels as $vehicleModel): ?>
        <tr>
            <td><?= $this->Number->format($vehicleModel->id) ?></td>
            <td>
                <?= $vehicleModel->has('vehicle_type') ? $this->Html->link($vehicleModel->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $vehicleModel->vehicle_type->id]) : '' ?>
            </td>
            <td><?= h($vehicleModel->name) ?></td>
            <td><?= h($vehicleModel->desc) ?></td>
            <td><?= h($vehicleModel->created) ?></td>
            <td><?= h($vehicleModel->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__(''), ['action' => 'view', $vehicleModel->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $vehicleModel->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $vehicleModel->id],['class'=>'btn btn-xs fa fa-trash text-danger'],['confirm' => __('Are you sure you want to delete # {0}?', $vehicleModel->id)]) ?>
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
