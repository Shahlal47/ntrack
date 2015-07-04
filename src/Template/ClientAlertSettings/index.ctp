

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Alert Setting List</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Alert Types'), ['controller' => 'AlertTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Alert Type'), ['controller' => 'AlertTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
     <table class="table table-bordered">
    <thead>
        <tr>
            <th class="text-center"><?= $this->Paginator->sort('client_info_id') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('alert_type_id') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('client_contact_id') ?></th>
            <th class="text-center"><?= $this->Paginator->sort('client_device_id') ?></th>
            <th class="actions text-center"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($clientAlertSettings as $clientAlertSetting): ?>
        <tr>
            <td class="text-center"><?= $clientAlertSetting->has('client_info') ? $this->Html->link($clientAlertSetting->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientAlertSetting->client_info->id]) : '' ?></td>
            <td class="text-center"><?= $clientAlertSetting->has('alert_type') ? $this->Html->link($clientAlertSetting->alert_type->name, ['controller' => 'AlertTypes', 'action' => 'view', $clientAlertSetting->alert_type->id]) : '' ?></td>
            <td class="text-center"><?= $clientAlertSetting->has('client_contact') ? $this->Html->link($clientAlertSetting->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientAlertSetting->client_contact->id]) : '' ?></td>
            <td class="text-center"><?= $clientAlertSetting->has('client_device') ? $this->Html->link($clientAlertSetting->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientAlertSetting->client_device->id]) : '' ?></td>
            <td class="actions text-center">
                <?= $this->Html->link(__(''), ['action' => 'view', $clientAlertSetting->id],['class'=>'btn btn-xs fa fa-list text-primary']) ?>
                <?= $this->Html->link(__(''), ['action' => 'edit', $clientAlertSetting->id],['class'=>'btn btn-xs fa fa-pencil text-warning']) ?>
                <?= $this->Form->postLink(__(''), ['action' => 'delete', $clientAlertSetting->id],['class'=>'btn btn-xs fa fa-trash text-danger'], ['confirm' => __('Are you sure you want to delete # {0}?', $clientAlertSetting->id)]) ?>
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