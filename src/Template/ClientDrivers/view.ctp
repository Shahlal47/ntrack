<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Driver'), ['action' => 'edit', $clientDriver->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Driver'), ['action' => 'delete', $clientDriver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDriver->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Drivers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Driver'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clientDrivers view large-10 medium-9 columns">
    <h2><?= h($clientDriver->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($clientDriver->name) ?></p>
            <h6 class="subheader"><?= __('Driving License') ?></h6>
            <p><?= h($clientDriver->driving_license) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($clientDriver->address) ?></p>
            <h6 class="subheader"><?= __('Mobile') ?></h6>
            <p><?= h($clientDriver->mobile) ?></p>
            <h6 class="subheader"><?= __('Client Info') ?></h6>
            <p><?= $clientDriver->has('client_info') ? $this->Html->link($clientDriver->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDriver->client_info->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Client Contact') ?></h6>
            <p><?= $clientDriver->has('client_contact') ? $this->Html->link($clientDriver->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientDriver->client_contact->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientDriver->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Join Date') ?></h6>
            <p><?= h($clientDriver->join_date) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($clientDriver->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($clientDriver->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Driver Assignments') ?></h4>
    <?php if (!empty($clientDriver->client_driver_assignments)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Driver Id') ?></th>
            <th><?= __('Client Vehicle Id') ?></th>
            <th><?= __('From') ?></th>
            <th><?= __('To') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($clientDriver->client_driver_assignments as $clientDriverAssignments): ?>
        <tr>
            <td><?= h($clientDriverAssignments->id) ?></td>
            <td><?= h($clientDriverAssignments->client_info_id) ?></td>
            <td><?= h($clientDriverAssignments->client_driver_id) ?></td>
            <td><?= h($clientDriverAssignments->client_vehicle_id) ?></td>
            <td><?= h($clientDriverAssignments->from) ?></td>
            <td><?= h($clientDriverAssignments->to) ?></td>
            <td><?= h($clientDriverAssignments->client_contact_id) ?></td>
            <td><?= h($clientDriverAssignments->created) ?></td>
            <td><?= h($clientDriverAssignments->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'ClientDriverAssignments', 'action' => 'view', $clientDriverAssignments->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientDriverAssignments', 'action' => 'edit', $clientDriverAssignments->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientDriverAssignments', 'action' => 'delete', $clientDriverAssignments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDriverAssignments->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
