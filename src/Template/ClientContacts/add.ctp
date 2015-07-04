
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Contact') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Client Contacts'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contact Devices'), ['controller' => 'ClientContactDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact Device'), ['controller' => 'ClientContactDevices', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Device Geofences'), ['controller' => 'ClientDeviceGeofences', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device Geofence'), ['controller' => 'ClientDeviceGeofences', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Trip Paths'), ['controller' => 'ClientTripPaths', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Trip Path'), ['controller' => 'ClientTripPaths', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
<!--    <div class="portlet-body">-->
<!--            --><?//= $this->Form->create($clientContact,['class' => 'form-horizontal']) ?>
<!--    <fieldset>-->
<!--        --><?php
////            echo $this->Form->input('client_info_id',['class'=>'form-control']);
//            echo $this->Form->input('mobile',['class'=>'form-control']);
//            echo $this->Form->input('email',['class'=>'form-control']);
//            echo $this->Form->input('name',['class'=>'form-control']);
//            echo $this->Form->input('nationalid',['class'=>'form-control']);
////            echo $this->Form->input('user_id',['class'=>'form-control']);
//            echo $this->Form->input('phone',['class'=>'form-control']);
//            echo $this->Form->input('fax',['class'=>'form-control']);
//            echo $this->Form->input('mobile_home',['class'=>'form-control']);
//            echo $this->Form->input('mobile_office',['class'=>'form-control']);
//        ?>
<!--    </fieldset>-->
<!--    --><?//= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
<!--    --><?//= $this->Form->end() ?><!--    -->
<!--    </div>-->
</div>


<div class="portlet-body">
    <?= $this->Form->create($clientContact, array('class' => 'form-horizontal')) ?>
    <div class="form-group">
        <label class="col-sm-4 control-label">Client Name</label>
        <div class="col-sm-4">
            <?php echo $this->Form->input('client_info_id', array('options' => $clientInfos, 'label' => false, 'class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Client Contact Name</label>
        <div class="col-sm-4">
            <?php echo $this->Form->input('name', array('label' => false, 'class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Client National ID</label>
        <div class="col-sm-4">
            <?php echo $this->Form->input('nationalid', array('label' => false, 'class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Client Email</label>
        <div class="col-sm-4">
            <?php echo $this->Form->input('email', array('label' => false, 'class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Client Mobile</label>
        <div class="col-sm-4">
            <?php echo $this->Form->input('mobile', array('label' => false, 'class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Client Telephone</label>
        <div class="col-sm-4">
            <?php echo $this->Form->input('phone', array('label' => false, 'class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Fax Number</label>
        <div class="col-sm-4">
            <?php echo $this->Form->input('fax', array('label' => false, 'class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Home Mobile</label>
        <div class="col-sm-4">
            <?php echo $this->Form->input('mobile_home', array('label' => false, 'class'=>'form-control')); ?>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Office Mobile</label>
        <div class="col-sm-4">
            <?php echo $this->Form->input('mobile_office', array('label' => false, 'class'=>'form-control')); ?>
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