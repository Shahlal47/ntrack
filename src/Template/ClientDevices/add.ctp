<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Device') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Client Devices'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Device Infos'), ['controller' => 'DeviceInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Device Info'), ['controller' => 'DeviceInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Device Types'), ['controller' => 'DeviceTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Device Type'), ['controller' => 'DeviceTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contact Devices'), ['controller' => 'ClientContactDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact Device'), ['controller' => 'ClientContactDevices', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Device Geofences'), ['controller' => 'ClientDeviceGeofences', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device Geofence'), ['controller' => 'ClientDeviceGeofences', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Persons'), ['controller' => 'ClientPersons', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Person'), ['controller' => 'ClientPersons', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Publicids'), ['controller' => 'ClientPublicids', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Publicid'), ['controller' => 'ClientPublicids', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($clientDevice, array('class' => 'form-horizontal')) ?>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-horizontal">
                    <label class="control-label col-md-5">Client Name</label>
                    <div class="col-md-6">
                        <?php echo $this->Form->input('device_info_id', array('options' => $deviceInfos, 'empty' => true, 'label' => false, 'class'=>'form-control')); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-horizontal">
                    <label class="control-label col-md-5 pull-left">Client Device</label>
                    <div class="col-md-6">
                        <?php echo $this->Form->input('client_info_id', array('options' => $clientInfos, 'empty' => true, 'label' => false, 'class'=>'form-control')); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-horizontal">
                    <label class="control-label col-md-5">Vehicle Type</label>
                    <div class="col-md-6">
                        <?php echo $this->Form->input('vehicle_type_id', array('options' => $vehicleTypes, 'empty' => true, 'label' => false, 'class'=>'form-control')); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-horizontal">
                    <label class="control-label col-md-5 pull-left">Device Type</label>
                    <div class="col-md-6">
                        <?php echo $this->Form->input('device_type_id', array('options' => $deviceTypes, 'empty' => true, 'label' => false, 'class'=>'form-control')); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group form-horizontal">
                    <label class="control-label col-md-5">Vehicle Subscription</label>
                    <div class="col-md-6">
                        <?php echo $this->Form->input('client_device_subscription_id', array('options' => $clientDeviceSubscriptions, 'empty' => true, 'label' => false, 'class'=>'form-control')); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group form-horizontal">
                    <label class="control-label col-md-5 pull-left">Vehicle Model</label>
                    <div class="col-md-6">
                        <?php echo $this->Form->input('vehicle_model_id', array('options' => $vehicleModels, 'empty' => true, 'label' => false, 'class'=>'form-control')); ?>
                    </div>
                </div>
            </div>
        </div>
        <hr>

        <div class="form-group">
            <label class="col-sm-4 control-label">Name</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('name', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Device ID</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('deviceid', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Active or Not</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('active', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">IMEI Number</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('imei', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Mobile Number</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('mob_no', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Speed Limit</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('speed_limit', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Minimum Mileage</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('minimum_mileage', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Maintenance Mileage</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('maintenance_mileage', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Fuel Consumption</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('fuel_consumption', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Comments</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('comments', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tags</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('tags', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Credit File Number</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('credit_file_num', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tracker ID</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('tracker_id', array('type' => 'text', 'label' => false, 'class'=>'form-control')); ?>
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

