<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        
    </ul>
</div>
<div class="clientInfos form large-10 medium-9 columns">
    
</div>

<div class="portlet light col-md-8">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Edit Client Info') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                   <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientInfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientInfo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Types'), ['controller' => 'ClientTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Type'), ['controller' => 'ClientTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Company Types'), ['controller' => 'CompanyTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company Type'), ['controller' => 'CompanyTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Notifications'), ['controller' => 'ClientNotifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Notification'), ['controller' => 'ClientNotifications', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Persons'), ['controller' => 'ClientPersons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Person'), ['controller' => 'ClientPersons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Publicids'), ['controller' => 'ClientPublicids', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Publicid'), ['controller' => 'ClientPublicids', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Reports'), ['controller' => 'ClientReports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Report'), ['controller' => 'ClientReports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Trip Paths'), ['controller' => 'ClientTripPaths', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Trip Path'), ['controller' => 'ClientTripPaths', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Geofences'), ['controller' => 'Geofences', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Geofence'), ['controller' => 'Geofences', 'action' => 'add']) ?></li> 
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
       <?= $this->Form->create($clientInfo,['class' => 'form-horizontal']) ?>
    <fieldset>
        <?php
        $form = ['inputContainer' => '<div class="col-md-7 input form-group {{type}}{{required}}">{{content}}</div>'];
                    $this->Form->templates($form);
            echo $this->Form->input('name',['class'=>'form-control']);
            echo $this->Form->input('client_type_id', ['options' => $clientTypes,'class'=>'form-control']);
            echo $this->Form->input('company_type_id', ['options' => $companyTypes, 'empty' => true,'class'=>'form-control']);
            echo $this->Form->input('address',['class'=>'form-control']);
            echo $this->Form->input('buyerno',['class'=>'form-control']);
            echo $this->Form->input('website',['class'=>'form-control']);
            echo $this->Form->input('user_id',['class'=>'form-control']);
            echo $this->Form->input('client_contact_id',['class'=>'form-control']);
            echo $this->Form->input('logo',['class'=>'form-control']);
            echo $this->Form->input('numOfTrackers',['class'=>'form-control']);
            echo $this->Form->input('numOfGeoFences',['class'=>'form-control']);
            echo $this->Form->input('sensors',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>         
    </div>
</div>