<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $deviceInfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $deviceInfo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Device Infos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Device Types'), ['controller' => 'DeviceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Device Type'), ['controller' => 'DeviceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="deviceInfos form large-10 medium-9 columns">
    <?= $this->Form->create($deviceInfo) ?>
    <fieldset>
        <legend><?= __('Edit Device Info') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('device_type_id', ['options' => $deviceTypes]);
            echo $this->Form->input('brand');
            echo $this->Form->input('sensors');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
