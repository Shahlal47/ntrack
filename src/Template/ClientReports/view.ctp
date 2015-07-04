<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Report'), ['action' => 'edit', $clientReport->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Report'), ['action' => 'delete', $clientReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientReport->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Reports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Report'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientReports view large-10 medium-9 columns">
    <h2><?= h($clientReport->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientReport->has('client_info') ? $this->Html->link($clientReport->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientReport->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Reports') ?></h6>
            <p><?= h($clientReport->reports) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientReport->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientReport->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientReport->modified) ?></p>
        </div>
    </div>
</div>
