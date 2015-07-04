<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $poiType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $poiType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Poi Types'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="poiTypes form large-10 medium-9 columns">
    <?= $this->Form->create($poiType) ?>
    <fieldset>
        <legend><?= __('Edit Poi Type') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('marker');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
