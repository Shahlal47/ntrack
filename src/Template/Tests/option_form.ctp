<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <span class="caption-subject bold">Testing List Table</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a aria-expanded="false" class="btn btn-circle btn-default btn-sm" href="#" data-toggle="dropdown">Action <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right" role="menu">
                    <li><?= $this->Html->link(__('Create New Test'), ['action' => 'add']) ?></li>
                    <li><?= $this->Html->link(__('Testing List'), ['action' => 'index']) ?></li>
                    <li><?= $this->Html->link(__('Optional Form'), ['action' => 'option_form']) ?></li>
                    <li><?= $this->Html->link(__('Page One'), ['action' => 'page_one']) ?></li>
                    <li><?= $this->Html->link(__('Page Two'), ['action' => 'page_two']) ?></li>
                    <li><?= $this->Html->link(__('Page Three'), ['action' => 'page_three']) ?></li>
                    <li><?= $this->Html->link(__('Page Four'), ['action' => 'page_four']) ?></li>
                    <li><?= $this->Html->link(__('Page Five'), ['action' => 'page_five']) ?></li>
                    <li><?= $this->Html->link(__('Page Six'), ['action' => 'page_six']) ?></li>
                    <li><?= $this->Html->link(__('Page Seven'), ['action' => 'page_seven']) ?></li>
                    <li><?= $this->Html->link(__('Page Eight'), ['action' => 'page_eight']) ?></li>
                    <li><?= $this->Html->link(__('Page Nine'), ['action' => 'page_nine']) ?></li>
                    <li><?= $this->Html->link(__('Page Ten'), ['action' => 'page_ten']) ?></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="content">
            <select id = "options" onchange = "showForm()" class="input-medium form-control">
                <option value = "0">Select Option</option>
                <option value = "1">Option One</option>
                <option value = "2">Option Two</option>
            </select>
        </div><br>

        <div id = "f1" style="display:none">
            <form name= "form1">
                Content of Form One
            </form>
        </div>

        <div id = "f2" style="display:none">
            <form name= "form2">
                Content of Form Two
            </form>
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
    }
</script>