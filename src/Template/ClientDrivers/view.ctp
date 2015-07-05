<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Driver Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
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
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Name</td>
                    <td><?= $clientDriver->has('client_info') ? $this->Html->link($clientDriver->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDriver->client_info->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Account Type</td>
                    <td><?= $clientDriver->has('client_contact') ? $this->Html->link($clientDriver->client_contact->name, ['controller' => 'ClientContacts', 'action' => 'view', $clientDriver->client_contact->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Driver Name</td>
                    <td><?= h($clientDriver->name) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Driving License</td>
                    <td><?= h($clientDriver->driving_license) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Mobile</td>
                    <td><?= h($clientDriver->mobile) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Address</td>
                    <td><?= h($clientDriver->address) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Joining Date</td>
                    <td><?= h($clientDriver->join_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

