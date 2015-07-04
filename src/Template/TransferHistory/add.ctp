<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Transfer History'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="transferHistory form large-10 medium-9 columns">
    <?= $this->Form->create($transferHistory) ?>
    <fieldset>
        <legend><?= __('Add Transfer History') ?></legend>
        <?php
            echo $this->Form->input('from_user_id');
            echo $this->Form->input('from_client_info_id');
            echo $this->Form->input('to_user_id');
            echo $this->Form->input('to_client_info_id');
            echo $this->Form->input('from_veh_reg_no');
            echo $this->Form->input('to_veh_reg_no');
            echo $this->Form->input('device_id');
            echo $this->Form->input('transfered_by_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
