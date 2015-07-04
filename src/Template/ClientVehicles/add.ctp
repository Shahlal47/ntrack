

<div class="portlet light col-md-8">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Vehicle') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                 <li><?= $this->Html->link(__('List Client Vehicles'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fuel Types'), ['controller' => 'FuelTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fuel Type'), ['controller' => 'FuelTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Types'), ['controller' => 'VehicleTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Type'), ['controller' => 'VehicleTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?></li>   
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
     <?= $this->Form->create($clientVehicle,['class' => 'form-horizontal']) ?>
    <fieldset>
        <?php
        $form = ['inputContainer' => '<div class="col-md-7 input form-group {{type}}{{required}}">{{content}}</div>'];
                    $this->Form->templates($form);
            echo $this->Form->input('registrtion_number',['class'=>'form-control']);
            echo $this->Form->input('vehicle_model',['class'=>'form-control']);
            echo $this->Form->input('vehicle_color',['class'=>'form-control']);
            echo $this->Form->input('speed_limit',['class'=>'form-control']);
            echo $this->Form->input('fuel_tank_size',['class'=>'form-control']);
            echo $this->Form->input('fuel_type_id', ['options' => $fuelTypes, 'empty' => true,'class'=>'form-control']);
            echo $this->Form->input('vehicle_type_id', ['options' => $vehicleTypes, 'empty' => true,'class'=>'form-control']);
            echo $this->Form->input('registration_expire_date', ['empty' => true, 'default' => '','class'=>'form-control']);
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true,'class'=>'form-control']);
            echo $this->Form->input('client_device_id', ['options' => $clientDevices, 'empty' => true,'class'=>'form-control']);
            echo $this->Form->input('minimum_mileage',['class'=>'form-control']);
            echo $this->Form->input('maintenance_mileage',['class'=>'form-control']);
            echo $this->Form->input('fuel_consumption',['class'=>'form-control']);
            echo $this->Form->input('comments',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>           
    </div>
</div>