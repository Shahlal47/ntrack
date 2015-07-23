<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Edit Client Report') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientReport->id)]) ?></li>
                    <li><?= $this->Html->link(__('List Client Reports'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($clientReport, array('class' => 'form-horizontal')) ?>
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
            <label class="col-sm-4 control-label">Reports</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('reports', array('label' => false, 'type' => 'textarea', 'class'=>'form-control')); ?>
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
