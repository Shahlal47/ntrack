<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Driver Assignment'), ['action' => 'edit', $clientDriverAssignment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Driver Assignment'), ['action' => 'delete', $clientDriverAssignment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDriverAssignment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Driver Assignments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Driver Assignment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientDriverAssignments view large-10 medium-9 columns">
    <h2><?= h($clientDriverAssignment->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientDriverAssignment->has('client_info') ? $this->Html->link($clientDriverAssignment->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDriverAssignment->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Driver') ?></h6>
            <p><?= $clientDriverAssignment->has('client_driver') ? $this->Html->link($clientDriverAssignment->client_driver->name, ['controller' => 'ClientDrivers', 'action' => 'view', $clientDriverAssignment->client_driver->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Vehicle') ?></h6>
            <p><?= $clientDriverAssignment->has('client_vehicle') ? $this->Html->link($clientDriverAssignment->client_vehicle->id, ['controller' => 'ClientVehicles', 'action' => 'view', $clientDriverAssignment->client_vehicle->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Contact') ?></h6>
            <p><?= $clientDriverAssignment->has('client_contact') ? $this->Html->link($clientDriverAssignment->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientDriverAssignment->client_contact->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientDriverAssignment->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('From') ?></h6>
            <p><?= h($clientDriverAssignment->from) ?></p>
            <h6 class="subheader"><?= __('To') ?></h6>
            <p><?= h($clientDriverAssignment->to) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientDriverAssignment->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientDriverAssignment->modified) ?></p>
        </div>
    </div>
</div>
