<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">User Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit User Type'), ['action' => 'edit', $userType->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete User Type'), ['action' => 'delete', $userType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userType->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List User Types'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User Type'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List User Logs'), ['controller' => 'UserLogs', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User Log'), ['controller' => 'UserLogs', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Name</td><td><?= h($userType->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?=  h($userType->description) ?></td></tr>
                <tr><td class="text-right">Id</td><td><?= $this->Number->format($userType->id)  ?></td></tr>
            </table>
        </div>
    </div>
</div>


