<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
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
<div class="userTypes view large-10 medium-9 columns">
    <h2><?= h($userType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($userType->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($userType->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($userType->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related User Logs') ?></h4>
    <?php if (!empty($userType->user_logs)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('User Type Id') ?></th>
            <th><?= __('Created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($userType->user_logs as $userLogs): ?>
        <tr>
            <td><?= h($userLogs->id) ?></td>
            <td><?= h($userLogs->user_id) ?></td>
            <td><?= h($userLogs->user_type_id) ?></td>
            <td><?= h($userLogs->created) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'UserLogs', 'action' => 'view', $userLogs->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'UserLogs', 'action' => 'edit', $userLogs->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'UserLogs', 'action' => 'delete', $userLogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userLogs->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($userType->users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Username') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Hash Change Password') ?></th>
            <th><?= __('User Type Id') ?></th>
            <th><?= __('Active') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Block Type') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($userType->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->username) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->created) ?></td>
            <td><?= h($users->modified) ?></td>
            <td><?= h($users->hash_change_password) ?></td>
            <td><?= h($users->user_type_id) ?></td>
            <td><?= h($users->active) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->client_contact_id) ?></td>
            <td><?= h($users->client_info_id) ?></td>
            <td><?= h($users->block_type) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
