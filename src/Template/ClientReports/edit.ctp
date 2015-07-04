<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientReport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientReport->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Reports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="clientReports form large-10 medium-9 columns">
    <?= $this->Form->create($clientReport) ?>
    <fieldset>
        <legend><?= __('Edit Client Report') ?></legend>
        <?php
            echo $this->Form->input('client_info_id', ['options' => $clientInfos]);
            echo $this->Form->input('reports');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
