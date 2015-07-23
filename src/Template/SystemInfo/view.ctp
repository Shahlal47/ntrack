
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Account Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit System Info'), ['action' => 'edit', $systemInfo->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete System Info'), ['action' => 'delete', $systemInfo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $systemInfo->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List System Info'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New System Info'), ['action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Id</td><td><?= $this->Number->format($systemInfo->id) ?></td></tr>
                <tr><td class="text-right">Device Seq Start</td><td><?= $this->Number->format($systemInfo->device_seq_start) ?></td></tr>
                <tr><td class="text-right">Device Seq Last</td><td><?= $this->Number->format($systemInfo->device_seq_last) ?></td></tr>
            </table>
        </div>
    </div>
</div>

