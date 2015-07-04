<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Contact Device'), ['action' => 'edit', $clientContactDevice->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Contact Device'), ['action' => 'delete', $clientContactDevice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientContactDevice->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Contact Devices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Contact Device'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientContactDevices view large-10 medium-9 columns">
    <h2><?= h($clientContactDevice->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Contact') ?></h6>
            <p><?= $clientContactDevice->has('client_contact') ? $this->Html->link($clientContactDevice->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientContactDevice->client_contact->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Device') ?></h6>
            <p><?= $clientContactDevice->has('client_device') ? $this->Html->link($clientContactDevice->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientContactDevice->client_device->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientContactDevice->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientContactDevice->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientContactDevice->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Active') ?></h6>
            <p><?= $clientContactDevice->active ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
