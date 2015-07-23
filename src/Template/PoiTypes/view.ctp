<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Poi Types Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Poi Type'), ['action' => 'edit', $poiType->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Poi Type'), ['action' => 'delete', $poiType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poiType->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Poi Types'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Poi Type'), ['action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Name</td><td><?= h($poiType->name) ?></td></tr>
                <tr><td class="text-right">Marker</td><td><?= h($poiType->marker) ?></td></tr>
                <tr><td class="text-right">Id</td><td><?= $this->Number->format($poiType->id) ?></td></tr>
            </table>
        </div>
    </div>
</div>

