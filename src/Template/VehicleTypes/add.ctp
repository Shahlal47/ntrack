<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Vehicle Type') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Vehicle Types'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($vehicleType,array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Name</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('name', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Description</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('description', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Def speed limit</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('def_speed_limit', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Def min mileage</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('def_min_mileage', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Def man mileage</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('def_man_mileage', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Def fuel consumption</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('def_fuel_consumption', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <hr>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-4 col-md-9">
                    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
                    <?= $this->Form->button(__('Cancel'),['class'=>'btn btn-danger']) ?>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>

