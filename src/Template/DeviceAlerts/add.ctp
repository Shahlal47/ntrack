

<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Device Alert') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                   <li><?= $this->Html->link(__('List Device Alerts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Alert Types'), ['controller' => 'AlertTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alert Type'), ['controller' => 'AlertTypes', 'action' => 'add']) ?></li> 
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
       <?= $this->Form->create($deviceAlert,['class' => 'form-horizontal']) ?>
    <fieldset>
        <?php
        $form = ['inputContainer' => '<div class="col-md-7 input form-group {{type}}{{required}}">{{content}}</div>'];
                    $this->Form->templates($form);
            echo $this->Form->input('deviceid',['class'=>'form-control']);
            echo $this->Form->input('alert_type_id', ['options' => $alertTypes, 'empty' => true,'class'=>'form-control']);
            echo $this->Form->input('pulled',['class'=>'form-control']);
            echo $this->Form->input('received_at',['class'=>'form-control']);
            echo $this->Form->input('lat',['class'=>'form-control']);
            echo $this->Form->input('lng',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>         
    </div>
</div>