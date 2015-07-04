
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Edit Account Type') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountType->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $accountType->id)]) ?>
                    </li>
                    <li><?= $this->Html->link(__('List Account Types'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($accountType,array('class' => 'form-horizontal')) ?>
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
            <label class="col-sm-4 control-label">Month(s)</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('months', array('label' => false, 'class'=>'form-control')); ?>
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