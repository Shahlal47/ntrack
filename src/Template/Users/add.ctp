

<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add User') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">
                    Action <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu pull-right" role="menu">
                 <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List User Types'), ['controller' => 'UserTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Type'), ['controller' => 'UserTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List User Logs'), ['controller' => 'UserLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User Log'), ['controller' => 'UserLogs', 'action' => 'add']) ?></li>   
                </ul>
            </div>
        </div>

    </div>
    <div class="portlet-body">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <?php
        $form = ['inputContainer' => '<div class="col-md-7 input form-group {{type}}{{required}}">{{content}}</div>'];
                    $this->Form->templates($form);
            echo $this->Form->input('username',['class'=>'form-control']);
            echo $this->Form->input('password',['class'=>'form-control']);
            echo $this->Form->input('hash_change_password',['class'=>'form-control']);
            echo $this->Form->input('user_type_id', ['options' => $userTypes,'class'=>'form-control']);
            echo $this->Form->input('active',['class'=>'form-control']);
            echo $this->Form->input('email',['class'=>'form-control']);
            echo $this->Form->input('client_contact_id',['class'=>'form-control']);
            echo $this->Form->input('client_info_id',['class'=>'form-control']);
            echo $this->Form->input('block_type',['class'=>'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>            
    </div>
</div>