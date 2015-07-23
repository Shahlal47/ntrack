
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Account Type Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Fuel Type'), ['action' => 'edit', $fuelType->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Fuel Type'), ['action' => 'delete', $fuelType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fuelType->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Fuel Types'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Fuel Type'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Name</td><td><?=  h($fuelType->name) ?></td></tr>
                <tr><td class="text-right">Description</td><td><?= h($fuelType->description) ?></td></tr>
                <tr><td class="text-right">Id</td><td><?= $this->Number->format($fuelType->id) ?></td></tr>
            </table>
        </div>
    </div>
</div>


