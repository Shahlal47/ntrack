
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">User Log Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit User Log'), ['action' => 'edit', $userLog->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete User Log'), ['action' => 'delete', $userLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userLog->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List User Logs'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User Log'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List User Types'), ['controller' => 'UserTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User Type'), ['controller' => 'UserTypes', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Id</td><td><?= h($userLog->id) ?></td></tr>
                <tr><td class="text-right">User</td><td><?= $userLog->has('user') ? $this->Html->link($userLog->user->id, ['controller' => 'Users', 'action' => 'view', $userLog->user->id]) : '' ?></td></tr>
                <tr><td class="text-right">User Type</td><td><?= $userLog->has('user_type') ? $this->Html->link($userLog->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $userLog->user_type->id]) : '' ?></td></tr>
                <tr><td class="text-right">Created</td><td><?= h($userLog->created) ?></td></tr>
            </table>
        </div>
    </div>
</div>



