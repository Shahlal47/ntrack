<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Vehicle') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Fuel Types'), ['controller' => 'FuelTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Fuel Type'), ['controller' => 'FuelTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($clientVehicle, array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Information</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_info_id', array(
                    'label' => false,
                    'empty' => true,
                    'type' => 'select',
                    'class'=>'form-control',
                    'options' => $clientInfos));?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Contact</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_device_id', array(
                    'label' => false,
                    'empty' => true,
                    'type' => 'select',
                    'class'=>'form-control',
                    'options' => $clientDevices)); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Fuel Type</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('fuel_type_id', array(
                    'label' => false,
                    'empty' => true,
                    'type' => 'select',
                    'class'=>'form-control',
                    'options' => $fuelTypes)); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Vehicle Type</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('vehicle_type_id', array(
                    'label' => false,
                    'empty' => true,
                    'type' => 'select',
                    'class'=>'form-control',
                    'options' => $vehicleTypes)); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Registration Expire Date</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('registration_expire_date', array(
                    'label' => false,
                    'type' => 'text',
                    'empty' => true,
                    'default' => '',
                    'class'=>'form-control',
                    'placeholder' => 'YY-MM-DD')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Registration Number</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('registrtion_number', array(
                    'label' => false,
                    'type' => 'text',
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Vehicle Model</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('vehicle_model', array(
                    'label' => false,
                    'type' => 'text',
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Vehicle Color</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('vehicle_color', array(
                    'label' => false,
                    'type' => 'text',
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Speed Limit</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('speed_limit', array(
                    'label' => false,
                    'type' => 'text',
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Fuel Tank Size</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('fuel_tank_size', array(
                    'label' => false,
                    'type' => 'text',
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Minimum Mileage</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('minimum_mileage', array(
                    'label' => false,
                    'type' => 'text',
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Maintenance Mileage</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('maintenance_mileage', array(
                    'label' => false,
                    'type' => 'text',
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Fuel Consumption</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('fuel_consumption', array(
                    'label' => false,
                    'type' => 'text',
                    'class'=>'form-control')); ?>
            </div>
        </div><div class="form-group">
            <label class="col-sm-4 control-label">Comments</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('comments', array(
                    'label' => false,
                    'type' => 'text',
                    'class'=>'form-control')); ?>
            </div>
        </div><hr>
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