<!--<div class="actions columns large-2 medium-3">-->
<!--    <h3>--><?//= __('Actions') ?><!--</h3>-->
<!--    <ul class="side-nav">-->
<!--        <li>--><?//= $this->Html->link(__('List Tests'), ['action' => 'index']) ?><!--</li>-->
<!--    </ul>-->
<!--</div>-->
<!--<div class="tests form large-10 medium-9 columns">-->
<!--    --><?//= $this->Form->create($test) ?>
<!--    <fieldset>-->
<!--        <legend>--><?//= __('Add Test') ?><!--</legend>-->
<!--        --><?php
//            echo $this->Form->input('name');
//            echo $this->Form->input('created_by');
//            echo $this->Form->input('modified_by');
//        ?>
<!--    </fieldset>-->
<!--    --><?//= $this->Form->button(__('Submit')) ?>
<!--    --><?//= $this->Form->end() ?>
<!--</div>-->



<select id = "opts" onchange = "showForm()">
    <option value = "0">Select Option</option>
    <option value = "1">Option 1</option>
    <option value = "2">Option 2</option>
</select>

<div id = "f1" style="display:none">
    <form name= "form1">
        Content of Form 1
    </form>
</div>

<div id = "f2" style="display:none">
    <form name= "form2">
        Content of Form 2
    </form>
</div>

<script type = "text/javascript">
    function showForm(){
        var selopt = document.getElementById("opts").value;
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