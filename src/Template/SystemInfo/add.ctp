<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List System Info'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="systemInfo form large-10 medium-9 columns">
    <?= $this->Form->create($systemInfo) ?>
    <fieldset>
        <legend><?= __('Add System Info') ?></legend>
        <?php
            echo $this->Form->input('device_seq_start');
            echo $this->Form->input('device_seq_last');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
