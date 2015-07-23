<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Edit Device Alert') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deviceAlert->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $deviceAlert->id)]) ?>
                    </li>
                    <li><?= $this->Html->link(__('List Device Alerts'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Alert Types'), ['controller' => 'AlertTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Alert Type'), ['controller' => 'AlertTypes', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($deviceAlert, array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Client Device</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('deviceid', array(
                    'label' => false,
                    'empty' => true,
                    'class'=>'form-control',
                    'options' => $alertTypes));
                ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Alert Type</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('alert_type_id', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Received Time</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('received_at', array('label' => false, 'type' => 'text', 'class'=>'form-control', 'placeholder' => 'YY-MM-DD')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Latitude</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('lat', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Longitude</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('lng', array('label' => false, 'class'=>'form-control')); ?>
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
