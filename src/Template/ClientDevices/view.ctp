<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Device Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Device'), ['action' => 'edit', $clientDevice->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Device'), ['action' => 'delete', $clientDevice->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDevice->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Device Infos'), ['controller' => 'DeviceInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Device Info'), ['controller' => 'DeviceInfos', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Device Types'), ['controller' => 'DeviceTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Device Type'), ['controller' => 'DeviceTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Information</td>
                    <td><?= $clientDevice->has('client_info') ? $this->Html->link($clientDevice->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientDevice->client_info->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Client Device</td>
                    <td><?= $clientDevice->has('device_info') ? $this->Html->link($clientDevice->device_info->name, ['controller' => 'DeviceInfos', 'action' => 'view', $clientDevice->device_info->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Vehicle Type</td>
                    <td><?= $clientDevice->has('vehicle_type') ? $this->Html->link($clientDevice->vehicle_type->name, ['controller' => 'VehicleTypes', 'action' => 'view', $clientDevice->vehicle_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Device Type</td>
                    <td><?= $clientDevice->has('device_type') ? $this->Html->link($clientDevice->device_type->name, ['controller' => 'DeviceTypes', 'action' => 'view', $clientDevice->device_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Client Device Subscriptions</td>
                    <td><?= $clientDevice->has('client_device_subscription') ? $this->Html->link($clientDevice->client_device_subscription->id, ['controller' => 'ClientDeviceSubscriptions', 'action' => 'view', $clientDevice->client_device_subscription->id]) : '' ?></td>
                </tr>
                <tr>
                    <td class="text-right">Device ID</td>
                    <td><?= h($clientDevice->deviceid) ?></td>
                </tr>
                <tr>
                    <td class="text-right">IMEI Number</td>
                    <td><?= h($clientDevice->imei) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Mobile Number</td>
                    <td><?= h($clientDevice->mob_no) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Comments</td>
                    <td><?= h($clientDevice->comments) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Name</td>
                    <td><?= h($clientDevice->name) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Tags</td>
                    <td><?= h($clientDevice->tags) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Credit File Number</td>
                    <td><?= h($clientDevice->credit_file_num) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Tracker ID</td>
                    <td><?= h($clientDevice->tracker_id) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Speed Limit</td>
                    <td><?= $this->Number->format($clientDevice->speed_limit) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Minimum Mileage</td>
                    <td><?= $this->Number->format($clientDevice->minimum_mileage) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Maintenance Mileage</td>
                    <td><?= $this->Number->format($clientDevice->maintenance_mileage) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Fuel Consumption</td>
                    <td><?= $this->Number->format($clientDevice->fuel_consumption) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Vehicle Model</td>
                    <td><?= $this->Number->format($clientDevice->vehicle_model_id) ?></td>
                </tr>
                <tr>
                    <td class="text-right">Is Active</td>
                    <td><?= $clientDevice->active ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>