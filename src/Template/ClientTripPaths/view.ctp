<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Trip Path Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Trip Path'), ['action' => 'edit', $clientTripPath->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Trip Path'), ['action' => 'delete', $clientTripPath->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientTripPath->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Trip Paths'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Trip Path'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Information</td>
                    <td>
                        <?= $clientTripPath->has('client_info') ? $this->Html->link($clientTripPath->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientTripPath->client_info->id]) : '' ?>
                    </td>
                </tr>
                <tr>
                    <td class="text-right">Client Contact</td>
                    <td>
                        <?= $clientTripPath->has('client_contact') ? $this->Html->link($clientTripPath->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientTripPath->client_contact->id]) : '' ?>
                    </td>
                </tr>
                <tr><td class="text-right">Client Trip Path</td><td><?= h($clientTripPath->trip_path) ?></td></tr>
                <tr><td class="text-right">Active or Not</td><td><?= $clientTripPath->active ? __('Yes') : __('No'); ?></td></tr>
            </table>
        </div>
    </div>
</div>
