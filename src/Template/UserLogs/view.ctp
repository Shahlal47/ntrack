<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
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
<div class="userLogs view large-10 medium-9 columns">
    <h2><?= h($userLog->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($userLog->id) ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $userLog->has('user') ? $this->Html->link($userLog->user->id, ['controller' => 'Users', 'action' => 'view', $userLog->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User Type') ?></h6>
            <p><?= $userLog->has('user_type') ? $this->Html->link($userLog->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $userLog->user_type->id]) : '' ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($userLog->created) ?></p>
        </div>
    </div>
</div>
