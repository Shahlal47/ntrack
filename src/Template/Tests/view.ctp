
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Testing Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Test'), ['action' => 'edit', $test->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Test'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?> </li>
                    <li><?= $this->Html->link(__('Testing List'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('Create New Test'), ['action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Name</td><td><?= h($test->name) ?></td></tr>
                <tr><td class="text-right">Mobile</td><td><?= h($test->mobile)  ?></td></tr>
                <tr><td class="text-right">Email</td><td><?= h($test->email) ?></td></tr>
                <tr><td class="text-right">Address</td><td><?= h($test->address) ?></td></tr>
                <tr><td class="text-right">Created By</td><td><?= h($test->created_by) ?></td></tr>
                <tr><td class="text-right">Modified By</td><td><?= h($test->modified_by) ?></td></tr>
                <tr><td class="text-right">Created Time</td><td><?=  h($test->created) ?></td></tr>
                <tr><td class="text-right">Modified Time</td><td><?= h($test->modified) ?></td></tr>
            </table>
        </div>
    </div>
</div>