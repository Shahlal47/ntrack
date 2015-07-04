<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientPerson->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientPerson->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Persons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientPersons form large-10 medium-9 columns">
    <?= $this->Form->create($clientPerson) ?>
    <fieldset>
        <legend><?= __('Edit Client Person') ?></legend>
        <?php
            echo $this->Form->input('client_device_id', ['options' => $clientDevices, 'empty' => true]);
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('mobile');
            echo $this->Form->input('image');
            echo $this->Form->input('identification_type_id');
            echo $this->Form->input('identification_number');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
