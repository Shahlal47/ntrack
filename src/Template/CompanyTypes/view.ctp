<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Company Type'), ['action' => 'edit', $companyType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Company Type'), ['action' => 'delete', $companyType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companyType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Company Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="companyTypes view large-10 medium-9 columns">
    <h2><?= h($companyType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($companyType->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($companyType->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($companyType->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($companyType->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($companyType->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Client Infos') ?></h4>
    <?php if (!empty($companyType->client_infos)): ?>
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
        <?php foreach ($companyType->client_infos as $clientInfos): ?>
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
