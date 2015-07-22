<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Edit Client Notification') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientNotification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientNotification->id)]) ?></li>
                    <li><?= $this->Html->link(__('List Client Notifications'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Notification Types'), ['controller' => 'NotificationTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Notification Type'), ['controller' => 'NotificationTypes', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($clientNotification, array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Information</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_info_id', array('label' => false, 'type' => 'select', 'class'=>'form-control', 'options' => $clientInfos)); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Notification Type</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('notification_type_id', array('label' => false, 'type' => 'select', 'class'=>'form-control', 'options' => $notificationTypes)); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Notification</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('notifications', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Pulled or Not</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('pulled', array('label' => false, 'type' => 'checkbox', 'class'=>'form-control')); ?>
            </div>
        </div><hr>
        <div class="form-actions">
            <div class="row">
                <div class="col-md-offset-4 col-md-9">
                    <?= $this->Form->button(__('Update'),['class'=>'btn btn-primary']) ?>
                    <?= $this->Form->button(__('Cancel'),['class'=>'btn btn-danger']) ?>
                </div>
            </div>
        </div>
        <?= $this->Form->end() ?>
    </div>
</div>
