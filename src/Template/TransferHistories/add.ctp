<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Transfer History') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action<i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Transfer Histories'), ['action' => 'index']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($transferHistory, array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">From Vehicle Registration Number</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('from_veh_reg_no', array('label' => false, 'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">To Vehicle Registration Number</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('to_veh_reg_no', array('label' => false, 'class'=>'form-control')); ?>
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



<!--            echo $this->Form->input('from_user_id');-->
<!--            echo $this->Form->input('from_client_info_id');-->
<!--            echo $this->Form->input('to_user_id');-->
<!--            echo $this->Form->input('to_client_info_id');-->
<!--            echo $this->Form->input('from_veh_reg_no');-->
<!--            echo $this->Form->input('to_veh_reg_no');-->
<!--            echo $this->Form->input('device_id');-->
<!--            echo $this->Form->input('transfered_by_id');-->
