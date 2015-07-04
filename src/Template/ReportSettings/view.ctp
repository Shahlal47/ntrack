<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Report Setting'), ['action' => 'edit', $reportSetting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Report Setting'), ['action' => 'delete', $reportSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportSetting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Report Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report Setting'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="reportSettings view large-10 medium-9 columns">
    <h2><?= h($reportSetting->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($reportSetting->name) ?></p>
            <h6 class="subheader"><?= __('Human Name') ?></h6>
            <p><?= h($reportSetting->human_name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($reportSetting->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($reportSetting->id) ?></p>
        </div>
    </div>
</div>
