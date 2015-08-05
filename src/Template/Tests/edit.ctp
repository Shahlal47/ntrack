
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <span class="caption-subject bold">Edit Testing Information</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <?= $this->Form->postLink(__('Delete Test'),
                            ['action' => 'delete', $test->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?>
                    </li>
                    <li><?= $this->Html->link(__('Create New Test'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('Testing List'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('Optional Form'), ['action' => 'option_form']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="portlet-body">
            <?= $this->Form->create($test, array('class' => 'form-horizontal')) ?>
            <fieldset>
                <legend>Personal Information</legend>
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
                    <label class="col-sm-4 control-label">Email ID</label>
                    <div class="col-sm-3">
                        <?php echo $this->Form->input('email', array('label' => false, 'class'=>'form-control')); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Address</label>
                    <div class="col-sm-3">
                        <?php echo $this->Form->input('address', array('label' => false, 'class'=>'form-control')); ?>
                    </div>
                </div><hr>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-10">
                            <?= $this->Form->button(__('Update'),['class'=>'btn btn-primary']) ?>
                            <?= $this->Form->button(__('Cancel'),['class'=>'btn btn-danger']) ?>
                        </div>
                    </div>
                </div>
            </fieldset>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
