<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(__('Delete'),
                ['action' => 'delete', $clientContactDevice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientContactDevice->id)]) ?>
        </li>
        <li><?= $this->Html->link(__('List Client Contact Devices'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientContactDevices form large-10 medium-9 columns">
    <?= $this->Form->create($clientContactDevice) ?>
    <fieldset>
        <legend><?= __('Edit Client Contact Device') ?></legend>
        <?php
            echo $this->Form->input('client_contact_id', ['options' => $clientContacts]);
            echo $this->Form->input('client_device_id', ['options' => $clientDevices]);
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>


