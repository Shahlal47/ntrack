<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Transfer History'), ['action' => 'edit', $transferHistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transfer History'), ['action' => 'delete', $transferHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transferHistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transfer History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transfer History'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="transferHistory view large-10 medium-9 columns">
    <h2><?= h($transferHistory->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('From Veh Reg No') ?></h6>
            <p><?= h($transferHistory->from_veh_reg_no) ?></p>
            <h6 class="subheader"><?= __('To Veh Reg No') ?></h6>
            <p><?= h($transferHistory->to_veh_reg_no) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($transferHistory->id) ?></p>
            <h6 class="subheader"><?= __('From User Id') ?></h6>
            <p><?= $this->Number->format($transferHistory->from_user_id) ?></p>
            <h6 class="subheader"><?= __('From Client Info Id') ?></h6>
            <p><?= $this->Number->format($transferHistory->from_client_info_id) ?></p>
            <h6 class="subheader"><?= __('To User Id') ?></h6>
            <p><?= $this->Number->format($transferHistory->to_user_id) ?></p>
            <h6 class="subheader"><?= __('To Client Info Id') ?></h6>
            <p><?= $this->Number->format($transferHistory->to_client_info_id) ?></p>
            <h6 class="subheader"><?= __('Device Id') ?></h6>
            <p><?= $this->Number->format($transferHistory->device_id) ?></p>
            <h6 class="subheader"><?= __('Transfered By Id') ?></h6>
            <p><?= $this->Number->format($transferHistory->transfered_by_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($transferHistory->created) ?></p>
        </div>
    </div>
</div>
