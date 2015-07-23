
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Users  Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List User Types'), ['controller' => 'UserTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User Type'), ['controller' => 'UserTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List User Logs'), ['controller' => 'UserLogs', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New User Log'), ['controller' => 'UserLogs', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Id</td><td><?= h($user->id) ?></td></tr>
                <tr><td class="text-right">Username</td><td><?= h($user->username)  ?></td></tr>
                <tr><td class="text-right">User Type</td><td><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></td></tr>
                <tr><td class="text-right">Email</td><td><?= h($user->email) ?></td></tr>
                <tr><td class="text-right">Client Contact Id</td><td><?= h($user->client_contact_id) ?></td></tr>
                <tr><td class="text-right">Client Info Id</td><td><?= h($user->client_info_id) ?></td></tr>
                <tr><td class="text-right">Block Type</td><td><?= h($user->block_type) ?></td></tr>
                <tr><td class="text-right">Created</td><td><?=  h($user->created) ?></td></tr>
                <tr><td class="text-right">Modified</td><td><?= h($user->modified) ?></td></tr>
            </table>
        </div>
    </div>
</div>


