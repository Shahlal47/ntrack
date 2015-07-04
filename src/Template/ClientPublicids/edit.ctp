<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientPublicid->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientPublicid->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Publicids'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientPublicids form large-10 medium-9 columns">
    <?= $this->Form->create($clientPublicid) ?>
    <fieldset>
        <legend><?= __('Edit Client Publicid') ?></legend>
        <?php
            echo $this->Form->input('publicid');
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('client_device_id', ['options' => $clientDevices, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
