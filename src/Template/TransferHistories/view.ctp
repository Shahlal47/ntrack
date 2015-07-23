<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Transfer History Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Transfer History'), ['action' => 'edit', $transferHistory->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Transfer History'), ['action' => 'delete', $transferHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transferHistory->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Transfer Histories'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Transfer History'), ['action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr><td class="text-right">From Vehicle Registration Number</td><td><?= h($transferHistory->from_veh_reg_no) ?></td></tr>
                <tr><td class="text-right">To Vehicle Registration Number</td><td><?= h($transferHistory->to_veh_reg_no) ?></td></tr>
            </table>
        </div>
    </div>
</div>


<!--    <div class="row">-->
<!--        <div class="large-2 columns numbers end">-->
<!--            <h6 class="subheader">--><?//= __('From User Id') ?><!--</h6>-->
<!--            <p>--><?//= $this->Number->format($transferHistory->from_user_id) ?><!--</p>-->
<!--            <h6 class="subheader">--><?//= __('From Client Info Id') ?><!--</h6>-->
<!--            <p>--><?//= $this->Number->format($transferHistory->from_client_info_id) ?><!--</p>-->
<!--            <h6 class="subheader">--><?//= __('To User Id') ?><!--</h6>-->
<!--            <p>--><?//= $this->Number->format($transferHistory->to_user_id) ?><!--</p>-->
<!--            <h6 class="subheader">--><?//= __('To Client Info Id') ?><!--</h6>-->
<!--            <p>--><?//= $this->Number->format($transferHistory->to_client_info_id) ?><!--</p>-->
<!--            <h6 class="subheader">--><?//= __('Device Id') ?><!--</h6>-->
<!--            <p>--><?//= $this->Number->format($transferHistory->device_id) ?><!--</p>-->
<!--            <h6 class="subheader">--><?//= __('Transfered By Id') ?><!--</h6>-->
<!--            <p>--><?//= $this->Number->format($transferHistory->transfered_by_id) ?><!--</p>-->
<!--        </div>-->
<!--    </div>-->