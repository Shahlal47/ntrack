

<div class="portlet light col-md-8">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Vehicle Type') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><?= $this->Html->link(__('List Vehicle Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vehicle Model'), ['controller' => 'VehicleModels', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
       <?= $this->Form->create($vehicleType,['class' => 'form-horizontal']) ?>
    <fieldset>
        <?php
        $form = ['inputContainer' => '<div class="col-md-7 input form-group {{type}}{{required}}">{{content}}</div>'];
                    $this->Form->templates($form);
            echo $this->Form->input('name',['class'=>'form-control']);
            echo $this->Form->input('description',['class'=>'form-control']);
            echo $this->Form->input('def_speed_limit',['class'=>'form-control']);
            echo $this->Form->input('def_min_mileage',['class'=>'form-control']);
            echo $this->Form->input('def_man_mileage',['class'=>'form-control']);
            echo $this->Form->input('def_fuel_consumption',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>         
    </div>
</div>