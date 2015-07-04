<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reportSetting->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reportSetting->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Report Settings'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="reportSettings form large-10 medium-9 columns">
    <?= $this->Form->create($reportSetting) ?>
    <fieldset>
        <legend><?= __('Edit Report Setting') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('human_name');
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
