<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
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
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= h($user->id) ?></p>
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Hash Change Password') ?></h6>
            <p><?= h($user->hash_change_password) ?></p>
            <h6 class="subheader"><?= __('User Type') ?></h6>
            <p><?= $user->has('user_type') ? $this->Html->link($user->user_type->name, ['controller' => 'UserTypes', 'action' => 'view', $user->user_type->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <h6 class="subheader"><?= __('Client Contact Id') ?></h6>
            <p><?= h($user->client_contact_id) ?></p>
            <h6 class="subheader"><?= __('Client Info Id') ?></h6>
            <p><?= h($user->client_info_id) ?></p>
            <h6 class="subheader"><?= __('Block Type') ?></h6>
            <p><?= h($user->block_type) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Active') ?></h6>
            <p><?= $user->active ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Contacts') ?></h4>
    <?php if (!empty($user->client_contacts)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Mobile') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Nationalid') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Phone') ?></th>
            <th><?= __('Fax') ?></th>
            <th><?= __('Mobile Home') ?></th>
            <th><?= __('Mobile Office') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->client_contacts as $clientContacts): ?>
        <tr>
            <td><?= h($clientContacts->id) ?></td>
            <td><?= h($clientContacts->client_info_id) ?></td>
            <td><?= h($clientContacts->mobile) ?></td>
            <td><?= h($clientContacts->email) ?></td>
            <td><?= h($clientContacts->name) ?></td>
            <td><?= h($clientContacts->created) ?></td>
            <td><?= h($clientContacts->modified) ?></td>
            <td><?= h($clientContacts->nationalid) ?></td>
            <td><?= h($clientContacts->user_id) ?></td>
            <td><?= h($clientContacts->phone) ?></td>
            <td><?= h($clientContacts->fax) ?></td>
            <td><?= h($clientContacts->mobile_home) ?></td>
            <td><?= h($clientContacts->mobile_office) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientContacts', 'action' => 'view', $clientContacts->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientContacts', 'action' => 'edit', $clientContacts->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientContacts', 'action' => 'delete', $clientContacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientContacts->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Infos') ?></h4>
    <?php if (!empty($user->client_infos)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Client Type Id') ?></th>
            <th><?= __('Company Type Id') ?></th>
            <th><?= __('Address') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Buyerno') ?></th>
            <th><?= __('Website') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Logo') ?></th>
            <th><?= __('NumOfTrackers') ?></th>
            <th><?= __('NumOfGeoFences') ?></th>
            <th><?= __('Sensors') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->client_infos as $clientInfos): ?>
        <tr>
            <td><?= h($clientInfos->id) ?></td>
            <td><?= h($clientInfos->name) ?></td>
            <td><?= h($clientInfos->client_type_id) ?></td>
            <td><?= h($clientInfos->company_type_id) ?></td>
            <td><?= h($clientInfos->address) ?></td>
            <td><?= h($clientInfos->created) ?></td>
            <td><?= h($clientInfos->modified) ?></td>
            <td><?= h($clientInfos->buyerno) ?></td>
            <td><?= h($clientInfos->website) ?></td>
            <td><?= h($clientInfos->user_id) ?></td>
            <td><?= h($clientInfos->client_contact_id) ?></td>
            <td><?= h($clientInfos->logo) ?></td>
            <td><?= h($clientInfos->numOfTrackers) ?></td>
            <td><?= h($clientInfos->numOfGeoFences) ?></td>
            <td><?= h($clientInfos->sensors) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientInfos', 'action' => 'view', $clientInfos->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientInfos', 'action' => 'edit', $clientInfos->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientInfos', 'action' => 'delete', $clientInfos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientInfos->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related User Logs') ?></h4>
    <?php if (!empty($user->user_logs)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('User Type Id') ?></th>
            <th><?= __('Created') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->user_logs as $userLogs): ?>
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
