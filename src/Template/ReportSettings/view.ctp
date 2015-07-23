<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Account Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Report Setting'), ['action' => 'edit', $reportSetting->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Report Setting'), ['action' => 'delete', $reportSetting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reportSetting->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Report Settings'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Report Setting'), ['action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Name</td><td><?=  h($reportSetting->name) ?></td></tr>
                <tr><td class="text-right">Human Name</td><td><?= h($reportSetting->human_name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($reportSetting->description) ?></td></tr>
                <tr><td class="text-right">Id</td><td><?= $this->Number->format($reportSetting->id) ?></td></tr>
            </table>
        </div>
    </div>
</div>



