<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">List of Client Trip Path</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Client Trip Path'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th class="text-center"><?= $this->Paginator->sort('ID') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('Client Information') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('Client Contact') ?></th>
                <th class="text-center"><?= $this->Paginator->sort('Trip Path') ?></th>
                <th class="actions text-center"><?= __('Actions') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($clientTripPaths as $clientTripPath): ?>
                <tr>
                    <td class="text-center"><?= $this->Number->format($clientTripPath->id) ?></td>
                    <td class="text-center">
                        <?= $clientTripPath->has('client_info') ? $this->Html->link($clientTripPath->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientTripPath->client_info->id]) : '' ?>
                    </td>
                    <td class="text-center">
                        <?= $clientTripPath->has('client_contact') ? $this->Html->link($clientTripPath->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientTripPath->client_contact->id]) : '' ?>
                    </td>
                    <td class="text-center"><?= h($clientTripPath->trip_path) ?></td>
                    <td class="text-center"><?= h($clientTripPath->active) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__(''), ['action' => 'view', $clientTripPath->id],['class'=>'btn btn-xs fa fa-eye text-primary']) ?>
                        <?= $this->Html->link(__(''), ['action' => 'edit', $clientTripPath->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                        <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientTripPath->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientTripPath->id)]) ?>
                    </td>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>
        <div class="paginator text-center">
            <ul class="pagination">
                <?= $this->Paginator->prev('< ' . __('Previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Next') . ' >') ?>
            </ul>
            <p><?= $this->Paginator->counter() ?></p>
        </div>
    </div>
</div>
