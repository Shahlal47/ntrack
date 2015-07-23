

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Edit Geofence') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $geofence->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $geofence->id)]
                        )
                        ?></li>
                    <li><?= $this->Html->link(__('List Geofences'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Geofence Types'), ['controller' => 'GeofenceTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Geofence Type'), ['controller' => 'GeofenceTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($geofence,array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">geofence_type_id</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('geofence_type_id', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">geofence_points</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('geofence_points', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">geo_shape</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('geo_shape', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>


        <div class="form-group">
            <label class="col-sm-4 control-label">name</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('name', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">color</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('color', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">client_info_id</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_info_id', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">client_contact_id</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('client_contact_id', array('label' => false, 'class'=>'form-control')); ?>
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


