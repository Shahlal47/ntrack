<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientDriver->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientDriver->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Drivers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientDrivers form large-10 medium-9 columns">
    <?= $this->Form->create($clientDriver) ?>
    <fieldset>
        <legend><?= __('Edit Client Driver') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('driving_license');
            echo $this->Form->input('address');
            echo $this->Form->input('mobile');
            echo $this->Form->input('join_date');
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('client_contact_id', ['options' => $clientContacts, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
