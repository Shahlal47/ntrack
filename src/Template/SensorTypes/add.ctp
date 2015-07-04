<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Sensor Types'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="sensorTypes form large-10 medium-9 columns">
    <?= $this->Form->create($sensorType) ?>
    <fieldset>
        <legend><?= __('Add Sensor Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
