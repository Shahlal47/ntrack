<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $deviceType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $deviceType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Device Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Device Infos'), ['controller' => 'DeviceInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Device Info'), ['controller' => 'DeviceInfos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="deviceTypes form large-10 medium-9 columns">
    <?= $this->Form->create($deviceType) ?>
    <fieldset>
        <legend><?= __('Edit Device Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
