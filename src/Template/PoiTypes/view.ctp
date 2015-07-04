<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Poi Type'), ['action' => 'edit', $poiType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Poi Type'), ['action' => 'delete', $poiType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poiType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Poi Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poi Type'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="poiTypes view large-10 medium-9 columns">
    <h2><?= h($poiType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($poiType->name) ?></p>
            <h6 class="subheader"><?= __('Marker') ?></h6>
            <p><?= h($poiType->marker) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($poiType->id) ?></p>
        </div>
    </div>
</div>
