<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Vehicle Assignment'), ['action' => 'edit', $clientVehicleAssignment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Vehicle Assignment'), ['action' => 'delete', $clientVehicleAssignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientVehicleAssignment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientVehicleAssignments view large-10 medium-9 columns">
    <h2><?= h($clientVehicleAssignment->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientVehicleAssignment->has('client_info') ? $this->Html->link($clientVehicleAssignment->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientVehicleAssignment->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Vehicle') ?></h6>
            <p><?= $clientVehicleAssignment->has('client_vehicle') ? $this->Html->link($clientVehicleAssignment->client_vehicle->id, ['controller' => 'ClientVehicles', 'action' => 'view', $clientVehicleAssignment->client_vehicle->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Contact') ?></h6>
            <p><?= $clientVehicleAssignment->has('client_contact') ? $this->Html->link($clientVehicleAssignment->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientVehicleAssignment->client_contact->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientVehicleAssignment->id) ?></p>
            <h6 class="subheader"><?= __('Client Trip Id') ?></h6>
            <p><?= $this->Number->format($clientVehicleAssignment->client_trip_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Assignment Date') ?></h6>
            <p><?= h($clientVehicleAssignment->assignment_date) ?></p>
            <h6 class="subheader"><?= __('Start Time') ?></h6>
            <p><?= h($clientVehicleAssignment->start_time) ?></p>
            <h6 class="subheader"><?= __('Finish Time') ?></h6>
            <p><?= h($clientVehicleAssignment->finish_time) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientVehicleAssignment->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientVehicleAssignment->modified) ?></p>
        </div>
    </div>
</div>
