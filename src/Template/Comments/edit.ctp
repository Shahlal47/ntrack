<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Edit Comment') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li>
                        <?= $this->Form->postLink(__('Delete'),
                            ['action' => 'delete', $comment->id],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?>
                    </li>
                    <li><?= $this->Html->link(__('List Comments'), ['action' => 'index']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <?= $this->Form->create($comment, array('class' => 'form-horizontal')) ?>
        <div class="form-group">
            <label class="col-sm-4 control-label">Date</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('DATUM', array(
                    'label' => false,
                    'type' => 'text',
                    'class'=>'form-control',
                    'placeholder' => 'YY-MM-DD')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">My User</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('MYUSER', array(
                    'label' => false,
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('EMAIL', array(
                    'label' => false,
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Web Page</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('WEBPAGE', array(
                    'label' => false,
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Summary</label>
            <div class="col-sm-3">
                <?php echo $this->Form->input('SUMMARY', array(
                    'label' => false,
                    'class'=>'form-control')); ?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Comments</label>
            <div class="col-sm-5">
                <?php echo $this->Form->input('COMMENTS', array(
                    'label' => false,
                    'class'=>'form-control')); ?>
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
