
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Device Subscription') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Account Types'), ['controller' => 'AccountTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Account Type'), ['controller' => 'AccountTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="portlet-body">
        <?= $this->Form->create($clientDeviceSubscription, array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Name</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true, 'label' => false, 'class'=>'form-control']); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Account Type</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('account_type_id', ['options' => $accountTypes, 'empty' => true, 'label' => false, 'class'=>'form-control']); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Subscription Date</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('subscribe_date', ['empty' => true, 'default' => '', 'type' => 'text', 'label' => false, 'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Expire Date</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('expire_date', ['empty' => true, 'default' => '', 'type' => 'text', 'label' => false, 'class' => 'form-control']); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Active or Not</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('active', ['class'=>'form-control', 'label' => false]); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Device ID</label>
            <div class="col-sm-4">
                <?php echo $this->Form->input('client_deviceid', ['label' => false, 'class'=>'form-control']); ?>
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
