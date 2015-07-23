<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Device Alert Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Device Alert'), ['action' => 'edit', $deviceAlert->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Device Alert'), ['action' => 'delete', $deviceAlert->id], ['confirm' => __('Are you sure you want to delete # {0}?', $deviceAlert->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Device Alerts'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Device Alert'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Alert Types'), ['controller' => 'AlertTypes', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Alert Type'), ['controller' => 'AlertTypes', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Alert Type</td>
                    <td>
                        <?= $deviceAlert->has('alert_type') ? $this->Html->link($deviceAlert->alert_type->name, ['controller' => 'AlertTypes', 'action' => 'view', $deviceAlert->alert_type->id]) : '' ?>
                    </td>
                </tr>
                <tr><td class="text-right">Device ID</td><td><?= h($deviceAlert->deviceid) ?></td></tr>
                <tr><td class="text-right">Receive Time</td><td><?= h($deviceAlert->received_at) ?></td></tr>
                <tr><td class="text-right">Latitude</td><td><?= h($deviceAlert->lat) ?></td></tr>
                <tr><td class="text-right">Longitude</td><td><?= h($deviceAlert->lng) ?></td></tr>
                <tr><td class="text-right">Pulled or Not</td><td><?= $deviceAlert->pulled ? __('Yes') : __('No'); ?></td></tr>
            </table>
        </div>
    </div>
</div>