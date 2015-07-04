

<div class="portlet light col-md-8">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Driver Assignment') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><?= $this->Html->link(__('List Client Driver Assignments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>  
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
         <?= $this->Form->create($clientDriverAssignment,['class' => 'form-horizontal']) ?>
    <fieldset>
        <?php
        $form = ['inputContainer' => '<div class="col-md-7 input form-group {{type}}{{required}}">{{content}}</div>'];
                    $this->Form->templates($form);
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true,'class'=>'form-control']);
            echo $this->Form->input('client_driver_id', ['options' => $clientDrivers, 'empty' => true,'class'=>'form-control']);
            echo $this->Form->input('client_vehicle_id', ['options' => $clientVehicles, 'empty' => true,'class'=>'form-control']);
            echo $this->Form->input('from',['class'=>'form-control']);
            echo $this->Form->input('to',['class'=>'form-control']);
            echo $this->Form->input('client_contact_id', ['options' => $clientContacts, 'empty' => true,'class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>       
    </div>
</div>