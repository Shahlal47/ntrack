<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase">Client Report Details</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Edit Client Report'), ['action' => 'edit', $clientReport->id]) ?> </li>
                    <li><?= $this->Form->postLink(__('Delete Client Report'), ['action' => 'delete', $clientReport->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientReport->id)]) ?> </li>
                    <li><?= $this->Html->link(__('List Client Reports'), ['action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Report'), ['action' => 'add']) ?> </li>
                    <li><?= $this->Html->link(__('List Client Infos'), ['controller' => 'ClientInfos', 'action' => 'index']) ?> </li>
                    <li><?= $this->Html->link(__('New Client Info'), ['controller' => 'ClientInfos', 'action' => 'add']) ?> </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="panel-body">
            <table class="table table-bordered" align="center">
                <tr>
                    <td class="text-right">Client Information</td>
                    <td>
                        <?= $clientReport->has('client_info') ? $this->Html->link($clientReport->client_info->name, ['controller' => 'ClientInfos', 'action' => 'view', $clientReport->client_info->id]) : '' ?>
                    </td>
                </tr>
                <tr><td class="text-right">Client Report</td><td class="col-md-2"><?= h($clientReport->reports) ?></td></tr>
            </table>
        </div>
    </div>
</div>