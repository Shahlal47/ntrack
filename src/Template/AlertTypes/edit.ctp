
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Alert Type') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $alertType->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $alertType->id)]) ?>
                    </li>
                    <li><?= $this->Html->link(__('List Alert Types'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Device Alerts'), ['controller' => 'DeviceAlerts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Device Alert'), ['controller' => 'DeviceAlerts', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="portlet-body">
        <?= $this->Form->create($alertType, array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Name</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('name', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Description</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('description', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Message Code</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('msg_code', array('label' => false, 'class'=>'form-control')); ?>
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
