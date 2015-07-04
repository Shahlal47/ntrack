<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Trip Path'), ['action' => 'edit', $clientTripPath->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Trip Path'), ['action' => 'delete', $clientTripPath->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientTripPath->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Trip Paths'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Trip Path'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientTripPaths view large-10 medium-9 columns">
    <h2><?= h($clientTripPath->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientTripPath->has('client_info') ? $this->Html->link($clientTripPath->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientTripPath->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Contact') ?></h6>
            <p><?= $clientTripPath->has('client_contact') ? $this->Html->link($clientTripPath->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientTripPath->client_contact->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Trip Path') ?></h6>
            <p><?= h($clientTripPath->trip_path) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientTripPath->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientTripPath->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientTripPath->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Active') ?></h6>
            <p><?= $clientTripPath->active ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
