<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Vehicle Assignment') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Trip Paths'), ['controller' => 'ClientTripPaths', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Trip Path'), ['controller' => 'ClientTripPaths', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($clientVehicleAssignment, array('class' => 'form-horizontal')) ?>
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
                <?php echo $this->Form->input('client_contact_id', array(
                    'label' => false,
                    'empty' => true,
                    'type' => 'select',
                    'class'=>'form-control',
                    'options' => $clientContacts)); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Vehicle</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_vehicle_id', array(
                    'label' => false,
                    'empty' => true,
                    'type' => 'select',
                    'class'=>'form-control',
                    'options' => $clientVehicles)); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Trip Path</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_trip_path_id', array(
                    'label' => false,
                    'empty' => true,
                    'type' => 'select',
                    'class'=>'form-control',
                    'options' => $clientTripPaths)); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Assignment Date</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('assignment_date', array(
                    'label' => false,
                    'type' => 'text',
                    'empty' => true,
                    'default' => '',
                    'class'=>'form-control',
                    'placeholder' => 'YY-MM-DD')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Start Time</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('start_time', array(
                    'label' => false,
                    'type' => 'text',
                    'empty' => true,
                    'default' => '',
                    'class'=>'form-control',
                    'placeholder' => 'HH:MM')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Finish Time</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('finish_time', array(
                    'label' => false,
                    'type' => 'text',
                    'empty' => true,
                    'default' => '',
                    'class'=>'form-control',
                    'placeholder' => 'HH:MM')); ?>
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
