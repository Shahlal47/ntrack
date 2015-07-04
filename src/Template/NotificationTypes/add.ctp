

<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Notification Type') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                   <li><?= $this->Html->link(__('List Notification Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Client Notifications'), ['controller' => 'ClientNotifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Notification'), ['controller' => 'ClientNotifications', 'action' => 'add']) ?></li> 
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
      <?= $this->Form->create($notificationType,['class' => 'form-horizontal']) ?>
    <fieldset>
        <?php
        $form = ['inputContainer' => '<div class="col-md-7 input form-group {{type}}{{required}}">{{content}}</div>'];
                    $this->Form->templates($form);
            echo $this->Form->input('name',['class'=>'form-control']);
            echo $this->Form->input('description',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>          
    </div>
</div>