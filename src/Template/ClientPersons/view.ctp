<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Person'), ['action' => 'edit', $clientPerson->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Person'), ['action' => 'delete', $clientPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientPerson->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Persons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientPersons view large-10 medium-9 columns">
    <h2><?= h($clientPerson->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Device') ?></h6>
            <p><?= $clientPerson->has('client_device') ? $this->Html->link($clientPerson->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientPerson->client_device->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientPerson->has('client_info') ? $this->Html->link($clientPerson->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientPerson->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($clientPerson->name) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($clientPerson->mobile) ?></p>
            <h6 class="subheader"><?= __('Image') ?></h6>
            <p><?= h($clientPerson->image) ?></p>
            <h6 class="subheader"><?= __('Identification Number') ?></h6>
            <p><?= h($clientPerson->identification_number) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientPerson->id) ?></p>
            <h6 class="subheader"><?= __('Identification Type Id') ?></h6>
            <p><?= $this->Number->format($clientPerson->identification_type_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientPerson->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientPerson->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Active') ?></h6>
            <p><?= $clientPerson->active ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
