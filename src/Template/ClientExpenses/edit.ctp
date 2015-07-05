
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Expense') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $clientExpense->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $clientExpense->id)]) ?>
                    </li>
                    <li><?= $this->Html->link(__('List Client Expenses'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Expense Types'), ['controller' => 'ExpenseTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Expense Type'), ['controller' => 'ExpenseTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="portlet-body">
        <div class="portlet-body">
            <?= $this->Form->create($clientExpense, array('class' => 'form-horizontal')) ?>
            <div class="form-group">
                <label class="col-sm-4 control-label">Client Name</label>
                <div class="col-sm-4">
                    <?php echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true, 'label' => false, 'class'=>'form-control']); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Expense Type</label>
                <div class="col-sm-4">
                    <?php echo $this->Form->input('expense_type_id', ['options' => $expenseTypes, 'empty' => true, 'label' => false, 'class'=>'form-control']); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Client Device</label>
                <div class="col-sm-4">
                    <?php echo $this->Form->input('client_device_id', ['options' => $clientDevices, 'empty' => true, 'label' => false, 'class'=>'form-control']); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Client Contact</label>
                <div class="col-sm-4">
                    <?php echo $this->Form->input('client_contact_id', ['options' => $clientContacts, 'empty' => true, 'label' => false, 'class'=>'form-control']); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">ON Date</label>
                <div class="col-sm-4">
                    <?php echo $this->Form->input('ondate', ['empty' => true,'class'=>'form-control', 'label' => false, 'default' => '']); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Amount</label>
                <div class="col-sm-4">
                    <?php echo $this->Form->input('amount',['class'=>'form-control', 'type' => 'text', 'label' => false]); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Comments</label>
                <div class="col-sm-4">
                    <?php echo $this->Form->input('comments',['class'=>'form-control', 'type' => 'text', 'label' => false]); ?>
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
</div>