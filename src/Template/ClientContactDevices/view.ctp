

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Alert Setting Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Contact Device'), ['action' => 'edit', $clientContactDevice->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Contact Device'), ['action' => 'delete', $clientContactDevice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientContactDevice->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contact Devices'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact Device'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Client Contact</td><td><?= $clientContactDevice->has('client_contact') ? $this->Html->link($clientContactDevice->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientContactDevice->client_contact->id]) : '' ?></td></tr>
                <tr><td class="text-right">Client Device</td><td><?= $clientContactDevice->has('client_device') ? $this->Html->link($clientContactDevice->client_device->name, ['controller' => 'ClientDevices', 'action' => 'view', $clientContactDevice->client_device->id]) : '' ?></td></tr>
                <tr><td class="text-right">Device Active or Not</td><td><?= $clientContactDevice->active ? __('Yes') : __('No'); ?></td></tr>
            </table>
        </div>
    </div>
</div>