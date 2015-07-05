<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Driver') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Client Drivers'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="portlet-body">

        <?= $this->Form->create($clientDriver, array('class' => 'form-horizontal')) ?>

        <div class="form-group">
            <label class="col-sm-4 control-label">Client Name</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true, 'label' => false, 'class'=>'form-control']); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Contact</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('client_contact_id', ['options' => $clientContacts, 'empty' => true, 'label' => false, 'class'=>'form-control']); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Driver Name</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('name', ['class'=>'form-control', 'type' => 'text', 'label' => false]); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Address</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('address', ['class'=>'form-control', 'type' => 'textarea', 'label' => false]); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Driving License Number</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('driving_license', ['class'=>'form-control', 'type' => 'text', 'label' => false]); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Mobile Number</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('mobile', ['class'=>'form-control', 'type' => 'text', 'label' => false]); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Joining Date</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('join_date', ['class'=>'form-control', 'type' => 'date', 'label' => false]); ?>
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