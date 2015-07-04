<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Fuel Type'), ['action' => 'edit', $fuelType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fuel Type'), ['action' => 'delete', $fuelType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fuelType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fuel Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fuel Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fuelTypes view large-10 medium-9 columns">
    <h2><?= h($fuelType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($fuelType->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($fuelType->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($fuelType->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Vehicles') ?></h4>
    <?php if (!empty($fuelType->client_vehicles)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Registrtion Number') ?></th>
            <th><?= __('Vehicle Model') ?></th>
            <th><?= __('Vehicle Color') ?></th>
            <th><?= __('Speed Limit') ?></th>
            <th><?= __('Fuel Tank Size') ?></th>
            <th><?= __('Fuel Type Id') ?></th>
            <th><?= __('Vehicle Type Id') ?></th>
            <th><?= __('Registration Expire Date') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Device Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Minimum Mileage') ?></th>
            <th><?= __('Maintenance Mileage') ?></th>
            <th><?= __('Fuel Consumption') ?></th>
            <th><?= __('Comments') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($fuelType->client_vehicles as $clientVehicles): ?>
        <tr>
            <td><?= h($clientVehicles->id) ?></td>
            <td><?= h($clientVehicles->registrtion_number) ?></td>
            <td><?= h($clientVehicles->vehicle_model) ?></td>
            <td><?= h($clientVehicles->vehicle_color) ?></td>
            <td><?= h($clientVehicles->speed_limit) ?></td>
            <td><?= h($clientVehicles->fuel_tank_size) ?></td>
            <td><?= h($clientVehicles->fuel_type_id) ?></td>
            <td><?= h($clientVehicles->vehicle_type_id) ?></td>
            <td><?= h($clientVehicles->registration_expire_date) ?></td>
            <td><?= h($clientVehicles->client_info_id) ?></td>
            <td><?= h($clientVehicles->client_device_id) ?></td>
            <td><?= h($clientVehicles->created) ?></td>
            <td><?= h($clientVehicles->modified) ?></td>
            <td><?= h($clientVehicles->minimum_mileage) ?></td>
            <td><?= h($clientVehicles->maintenance_mileage) ?></td>
            <td><?= h($clientVehicles->fuel_consumption) ?></td>
            <td><?= h($clientVehicles->comments) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientVehicles', 'action' => 'view', $clientVehicles->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientVehicles', 'action' => 'edit', $clientVehicles->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientVehicles', 'action' => 'delete', $clientVehicles->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicles->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
