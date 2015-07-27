<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <span class="caption-subject bold uppercase"><?= __('Add Client Information') ?></span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('List Client Information'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('List Client Types'), ['controller' => 'ClientTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Type'), ['controller' => 'ClientTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Company Types'), ['controller' => 'CompanyTypes', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Company Type'), ['controller' => 'CompanyTypes', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Contacts'), ['controller' => 'ClientContacts', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Contact'), ['controller' => 'ClientContacts', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Alert Settings'), ['controller' => 'ClientAlertSettings', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Alert Setting'), ['controller' => 'ClientAlertSettings', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Device Subscriptions'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device Subscription'), ['controller' => 'ClientDeviceSubscriptions', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Devices'), ['controller' => 'ClientDevices', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Device'), ['controller' => 'ClientDevices', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Driver Assignments'), ['controller' => 'ClientDriverAssignments', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Driver Assignment'), ['controller' => 'ClientDriverAssignments', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Drivers'), ['controller' => 'ClientDrivers', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Driver'), ['controller' => 'ClientDrivers', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Expenses'), ['controller' => 'ClientExpenses', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Expense'), ['controller' => 'ClientExpenses', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Notifications'), ['controller' => 'ClientNotifications', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Notification'), ['controller' => 'ClientNotifications', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Persons'), ['controller' => 'ClientPersons', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Person'), ['controller' => 'ClientPersons', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Public ID'), ['controller' => 'ClientPublicids', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Public ID'), ['controller' => 'ClientPublicids', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Reports'), ['controller' => 'ClientReports', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Report'), ['controller' => 'ClientReports', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Trip Paths'), ['controller' => 'ClientTripPaths', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Trip Path'), ['controller' => 'ClientTripPaths', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicle Assignments'), ['controller' => 'ClientVehicleAssignments', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle Assignment'), ['controller' => 'ClientVehicleAssignments', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Client Vehicles'), ['controller' => 'ClientVehicles', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Client Vehicle'), ['controller' => 'ClientVehicles', 'action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('List Geo Fences'), ['controller' => 'Geofences', 'action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('New Geo Fence'), ['controller' => 'Geofences', 'action' => 'add']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="form-group">
                    <label class="col-md-3 control-label">Client Type</label>
                    <div class="col-md-6">
                        <select id = "options" onchange = "showForm()" class="form-control" name="">
                            <option value = "" selected>Select Type</option>
                            <option value = "1">Single</option>
                            <option value = "2">Group</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id = "f1">
        <div class="portlet-body">
            <?= $this->Form->create($clientInfo, array('class' => 'form-horizontal')) ?>
            <form name= "form1">
                <div class="form-group" hidden="hidden">
                    <label class="col-sm-4 control-label">Client Type</label>
                    <div class="col-sm-3">
                        <?php echo $this->Form->input('client_type_id', array('label' => false, 'class'=>'form-control')); ?>
                    </div>
                </div>
                <fieldset>
                    <legend>Login Information</legend>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Login Name</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('Users.username', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('Users.password', array('label' => false, 'type' => 'password', 'class'=>'form-control')); ?>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Client Information</legend>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Name</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientInfos.name', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Buyer Number</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientInfos.buyerno', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Website</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientInfos.website', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Address</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientInfos.address', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Client Contact Details</legend>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">National ID</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientContacts.nationalid', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientContacts.email', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mobile Number</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientContacts.mobile', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Phone Number</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientContacts.phone', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Fax</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientContacts.fax', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mobile Home</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientContacts.mobile_home', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mobile Office</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('ClientContacts.mobile_office', array('label' => false, 'class'=>'form-control')); ?>
                        </div>
                    </div>
                </fieldset><hr>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-9">
                            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
                            <?= $this->Form->button(__('Cancel'),['class'=>'btn btn-danger']) ?>
                        </div>
                    </div>
                </div>
            </form>
            <?= $this->Form->end() ?>
        </div>
    </div>

    <div id="f2" style="display:none">
        <div class="portlet-body">
            <?= $this->Form->create($clientInfo, array('class' => 'form-horizontal')) ?>
            <form name="form2">
                <div class="form-group" hidden="hidden">
                    <label class="col-sm-4 control-label">Client Type</label>
                    <div class="col-sm-3">
                        <?php echo $this->Form->input('client_type_id', array('label' => false, 'class' => 'form-control')); ?>
                    </div>
                </div>
                <fieldset>
                    <legend>Login Information</legend>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Login Name</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('name', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Password</label>
                        <div class="col-sm-3">
                            <?php echo $this->Form->input('password', array('label' => false, 'type' => 'password', 'class' => 'form-control')); ?>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Client Information</legend>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Business Name</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('name', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Company Type</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('company_type_id', array('label' => false, 'type' => 'select', 'class' => 'form-control', 'options' => $companyTypes)); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Buyer Number</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('buyerno', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Website</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('website', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Address</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('address', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Client Contact Details</legend>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Contact Person Name</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('name', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">National ID</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('nationalid', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Email Address</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('email', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mobile Number</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('mobile', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Phone Number</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('phone', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Fax Number</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('fax', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mobile Home</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('mobile_home', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Mobile Office</label>

                        <div class="col-sm-3">
                            <?php echo $this->Form->input('mobile_office', array('label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </div>
                </fieldset><hr>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-4 col-md-9">
                            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                            <?= $this->Form->button(__('Cancel'), ['class' => 'btn btn-danger']) ?>
                        </div>
                    </div>
                </div>
            </form>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>


<script type = "text/javascript">
    function showForm(){
        var selopt = document.getElementById("options").value;

        if (selopt == 1) {
            document.getElementById("f1").style.display="block";
            document.getElementById("f2").style.display="none";
        }

        if (selopt == 2) {
            document.getElementById("f2").style.display="block";
            document.getElementById("f1").style.display="none";
        }

        $('#client_type_id').val(selopt);
    }
</script>



<!--                <div class="form-group">-->
<!--                    <label class="col-sm-4 control-label">User ID</label>-->
<!--                    <div class="col-sm-3">-->
<!--                        --><?php //echo $this->Form->input('user_id', array('label' => false, 'class'=>'form-control')); ?>
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label class="col-sm-4 control-label">Client Contact</label>-->
<!--                    <div class="col-sm-3">-->
<!--                        --><?php //echo $this->Form->input('client_contact_id', array('label' => false, 'class'=>'form-control')); ?>
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label class="col-sm-4 control-label">Client Company Logo</label>-->
<!--                    <div class="col-sm-3">-->
<!--                        --><?php //echo $this->Form->input('logo', array('label' => false, 'class'=>'form-control')); ?>
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label class="col-sm-4 control-label">Number of Tracker</label>-->
<!--                    <div class="col-sm-3">-->
<!--                        --><?php //echo $this->Form->input('numOfTrackers', array('label' => false, 'class'=>'form-control')); ?>
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label class="col-sm-4 control-label">Number of Geo Fences</label>-->
<!--                    <div class="col-sm-3">-->
<!--                        --><?php //echo $this->Form->input('numOfGeoFences', array('label' => false, 'class'=>'form-control')); ?>
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <label class="col-sm-4 control-label">Sensor</label>-->
<!--                    <div class="col-sm-3">-->
<!--                        --><?php //echo $this->Form->input('sensors', array('label' => false, 'class'=>'form-control')); ?>
<!--                    </div>-->
<!--                </div>-->