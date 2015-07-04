<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Comment'), ['action' => 'edit', $comment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Comment'), ['action' => 'delete', $comment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Comments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="comments view large-10 medium-9 columns">
    <h2><?= h($comment->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('MYUSER') ?></h6>
            <p><?= h($comment->MYUSER) ?></p>
            <h6 class="subheader"><?= __('EMAIL') ?></h6>
            <p><?= h($comment->EMAIL) ?></p>
            <h6 class="subheader"><?= __('WEBPAGE') ?></h6>
            <p><?= h($comment->WEBPAGE) ?></p>
            <h6 class="subheader"><?= __('SUMMARY') ?></h6>
            <p><?= h($comment->SUMMARY) ?></p>
            <h6 class="subheader"><?= __('COMMENTS') ?></h6>
            <p><?= h($comment->COMMENTS) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($comment->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('DATUM') ?></h6>
            <p><?= h($comment->DATUM) ?></p>
        </div>
    </div>
</div>
