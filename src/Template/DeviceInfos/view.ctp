<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Device Information Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Device Information'), ['action' => 'edit', $deviceInfo->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Device Information'), ['action' => 'delete', $deviceInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceInfo->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Device Information'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Device Information'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Device Types'), ['controller' => 'DeviceTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Device Type'), ['controller' => 'DeviceTypes', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Device Type</td>
                    <td>
                        <?= $deviceInfo->has('device_type') ? $this->Html->link($deviceInfo->device_type->name, ['controller' => 'DeviceTypes', 'action' => 'view', $deviceInfo->device_type->id]) : '' ?>
                    </td>
                </tr>
                <tr><td class="text-right">Name</td><td><?= h($deviceInfo->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($deviceInfo->description) ?></td></tr>
                <tr><td class="text-right">Brand Name</td><td><?= h($deviceInfo->brand) ?></td></tr>
                <tr><td class="text-right">Sensor</td><td><?= h($deviceInfo->sensors) ?></td></tr>
            </table>
        </div>
    </div>
</div>