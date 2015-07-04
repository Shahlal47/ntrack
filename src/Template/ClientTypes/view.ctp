<div class="portlet light">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client Type'), ['action' => 'edit', $clientType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Type'), ['action' => 'delete', $clientType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="portlet light">
    <h2><?= h($clientType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($clientType->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($clientType->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($clientType->id) ?></p>
        </div>
    </div>
</div>
<div class="portlet light">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Infos') ?></h4>
    <?php if (!empty($clientType->client_infos)): ?>
    <table class="table table-bordered">
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
        <?php foreach ($clientType->client_infos as $clientInfos): ?>
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
