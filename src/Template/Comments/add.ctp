<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Comments'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="comments form large-10 medium-9 columns">
    <?= $this->Form->create($comment) ?>
    <fieldset>
        <legend><?= __('Add Comment') ?></legend>
        <?php
            echo $this->Form->input('MYUSER');
            echo $this->Form->input('EMAIL');
            echo $this->Form->input('WEBPAGE');
            echo $this->Form->input('DATUM');
            echo $this->Form->input('SUMMARY');
            echo $this->Form->input('COMMENTS');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
