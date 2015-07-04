<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit System Info'), ['action' => 'edit', $systemInfo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete System Info'), ['action' => 'delete', $systemInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $systemInfo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List System Info'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New System Info'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="systemInfo view large-10 medium-9 columns">
    <h2><?= h($systemInfo->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($systemInfo->id) ?></p>
            <h6 class="subheader"><?= __('Device Seq Start') ?></h6>
            <p><?= $this->Number->format($systemInfo->device_seq_start) ?></p>
            <h6 class="subheader"><?= __('Device Seq Last') ?></h6>
            <p><?= $this->Number->format($systemInfo->device_seq_last) ?></p>
        </div>
    </div>
</div>
