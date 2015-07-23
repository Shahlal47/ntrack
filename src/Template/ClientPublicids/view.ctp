<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Public ID Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Publicid'), ['action' => 'edit', $clientPublicid->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Publicid'), ['action' => 'delete', $clientPublicid->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientPublicid->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Publicids'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Publicid'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Client Public ID</td><td><?= h($clientPublicid->publicid) ?></td></tr>
                <tr>
                    <td class="text-right">Client Device</td>
                    <td>
                        <?= $clientPublicid->has('client_device') ? $this->Html->link($clientPublicid->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientPublicid->client_device->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Client Information</td>
                    <td>
                        <?= $clientPublicid->has('client_info') ? $this->Html->link($clientPublicid->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientPublicid->client_info->id]) : '' ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>