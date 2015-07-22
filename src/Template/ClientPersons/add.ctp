<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Person') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Client Persons'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($clientPerson, array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Device</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_device_id', array(
                    'label' => false,
                    'type' => 'select',
                    'class'=>'form-control',
                    'options' => $clientDevices,
                    'empty' => true));
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Information</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_info_id', array(
                    'label' => false,
                    'type' => 'select',
                    'class'=>'form-control',
                    'options' => $clientInfos,
                    'empty' => true));
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Name</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('name', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Mobile</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('mobile', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Image</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('image', array(
                    'label' => false,
                    'type' => 'file',
                    'class'=>'form-control',
                    'empty' => true));
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Identification Type</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('identification_type_id', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Identification Number</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('identification_number', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Active or Not</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('active', array('label' => false, 'type' => 'checkbox', 'class'=>'form-control')); ?>
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