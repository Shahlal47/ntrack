<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Trip Path') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Client Trip Paths'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Information'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Information'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($clientTripPath, array('class' => 'form-horizontal')) ?>
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
            <label class="col-sm-4 control-label">Client Contact</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_contact_id', array(
                    'label' => false,
                    'type' => 'select',
                    'class'=>'form-control',
                    'options' => $clientContacts,
                    'empty' => true));
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Trip Path</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('trip_path', array('label' => false, 'class'=>'form-control')); ?>
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