<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Type'), ['action' => 'edit', $clientType->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Type'), ['action' => 'delete', $clientType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientType->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Types'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Type'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">ID</td><td><?= $this->Number->format($clientType->id) ?></td></tr>
                <tr><td class="text-right">Name</td><td><?= h($clientType->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($clientType->description) ?></td></tr>
            </table>
        </div>
    </div>
</div>
