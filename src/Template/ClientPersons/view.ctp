<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Person Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Person'), ['action' => 'edit', $clientPerson->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Person'), ['action' => 'delete', $clientPerson->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientPerson->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Persons'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Person'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Device</td>
                    <td>
                        <?= $clientPerson->has('client_device') ? $this->Html->link($clientPerson->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientPerson->client_device->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Client Information</td>
                    <td>
                        <?= $clientPerson->has('client_info') ? $this->Html->link($clientPerson->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientPerson->client_info->id]) : '' ?>
                    </td>
                </tr>
                <tr><td class="text-right">Name</td><td><?= h($clientPerson->name) ?></td></tr>
                <tr><td class="text-right">Mobile</td><td><?= h($clientPerson->mobile) ?></td></tr>
                <tr><td class="text-right">Image</td><td><?= h($clientPerson->image) ?></td></tr>
                <tr><td class="text-right">Identification Number</td><td><?= h($clientPerson->identification_number) ?></td></tr>
                <tr><td class="text-right">ID</td><td><?= $this->Number->format($clientPerson->id) ?></td></tr>
                <tr><td class="text-right">Identification Type</td><td><?= $this->Number->format($clientPerson->identification_type_id) ?></td></tr>
                <tr><td class="text-right">Active or Not</td><td><?= $clientPerson->active ? __('Yes') : __('No'); ?></td></tr>
            </table>
        </div>
    </div>
</div>