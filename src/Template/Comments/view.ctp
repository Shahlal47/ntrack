<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Comments Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Comments'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">Date</td><td><?= h($comment->DATUM) ?></td></tr>
                <tr><td class="text-right">My User</td><td><?= h($comment->MYUSER) ?></td></tr>
                <tr><td class="text-right">Email</td><td><?= h($comment->EMAIL) ?></td></tr>
                <tr><td class="text-right">Web Page</td><td><<?= h($comment->WEBPAGE) ?></td></tr>
                <tr><td class="text-right">Summary</td><td><?= h($comment->SUMMARY) ?></td></tr>
                <tr><td class="text-right">Comments</td><td><?= h($comment->COMMENTS) ?></td></tr>
            </table>
        </div>
    </div>
</div>
