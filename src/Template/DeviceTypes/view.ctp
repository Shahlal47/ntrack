<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Device Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Device Type'), ['action' => 'edit', $deviceType->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Device Type'), ['action' => 'delete', $deviceType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceType->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Device Types'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Device Type'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Device Information'), ['controller' => 'DeviceInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Device Information'), ['controller' => 'DeviceInfos', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Name</td><td><?= h($deviceType->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($deviceType->description) ?></td></tr>
            </table>
        </div>
    </div>
</div>
