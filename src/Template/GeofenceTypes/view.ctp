<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Geofence Type'), ['action' => 'edit', $geofenceType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Geofence Type'), ['action' => 'delete', $geofenceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geofenceType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Geofence Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Geofence Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="geofenceTypes view large-10 medium-9 columns">
    <h2><?= h($geofenceType->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($geofenceType->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($geofenceType->description) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($geofenceType->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Geofences') ?></h4>
    <?php if (!empty($geofenceType->geofences)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Geofence Type Id') ?></th>
            <th><?= __('Geofence Points') ?></th>
            <th><?= __('Geo Shape') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Color') ?></th>
            <th><?= __('Client Info Id') ?></th>
            <th><?= __('Client Contact Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($geofenceType->geofences as $geofences): ?>
        <tr>
            <td><?= h($geofences->id) ?></td>
            <td><?= h($geofences->geofence_type_id) ?></td>
            <td><?= h($geofences->geofence_points) ?></td>
            <td><?= h($geofences->geo_shape) ?></td>
            <td><?= h($geofences->name) ?></td>
            <td><?= h($geofences->created) ?></td>
            <td><?= h($geofences->modified) ?></td>
            <td><?= h($geofences->color) ?></td>
            <td><?= h($geofences->client_info_id) ?></td>
            <td><?= h($geofences->client_contact_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Geofences', 'action' => 'view', $geofences->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Geofences', 'action' => 'edit', $geofences->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Geofences', 'action' => 'delete', $geofences->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geofences->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
