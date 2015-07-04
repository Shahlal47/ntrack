

<div class="portlet light col-md-8">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Person') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                 <li><?= $this->Html->link(__('List Client Persons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>   
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
     <?= $this->Form->create($clientPerson,['class' => 'form-horizontal']) ?>
    <fieldset>
        <?php
            echo $this->Form->input('client_device_id', ['options' => $clientDevices, 'empty' => true]);
            echo $this->Form->input('client_info_id', ['options' => $clientInfos, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('mobile');
            echo $this->Form->input('image');
            echo $this->Form->input('identification_type_id');
            echo $this->Form->input('identification_number');
            echo $this->Form->input('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>           
    </div>
</div>