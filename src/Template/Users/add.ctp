

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add User ') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List User Types'), ['controller' => 'UserTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New User Type'), ['controller' => 'UserTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List User Logs'), ['controller' => 'UserLogs', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New User Log'), ['controller' => 'UserLogs', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($user,array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Username</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('username', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Password</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('password', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Hash change password</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('hash_change_password', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-4 control-label">User Type Id</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('user_type_id', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Password</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('active', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('email', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Client Contact Id</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_contact_id', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Client info id</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_info_id', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Block type</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('block_type', array('label' => false, 'class'=>'form-control')); ?>
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
