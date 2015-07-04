<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Publicid'), ['action' => 'edit', $clientPublicid->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Publicid'), ['action' => 'delete', $clientPublicid->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientPublicid->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Publicids'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Publicid'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientPublicids view large-10 medium-9 columns">
    <h2><?= h($clientPublicid->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Publicid') ?></h6>
            <p><?= h($clientPublicid->publicid) ?></p>
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientPublicid->has('client_info') ? $this->Html->link($clientPublicid->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientPublicid->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Device') ?></h6>
            <p><?= $clientPublicid->has('client_device') ? $this->Html->link($clientPublicid->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientPublicid->client_device->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientPublicid->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientPublicid->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientPublicid->modified) ?></p>
        </div>
    </div>
</div>
