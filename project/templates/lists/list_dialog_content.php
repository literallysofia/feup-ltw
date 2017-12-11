<div class="list_popup">
    <div id="pop_up_header">
        <button onclick="openDialog('Delete List')">
            <span class="lnr lnr-trash"></span>
        </button>
        <button>
            <span class="lnr lnr-inbox"></span>
        </button>
        <button onclick="closeDialog('List')">
            <span class="lnr lnr-cross"></span>
        </button>
    </div>
    <div id="pop_up_title">
        <label> Title </label>
        <input type="text">
        <button class="edit" onclick="editListTitle(this)">
            <span class="lnr lnr-pencil icon"></span>
        </button>
        <div id="rectangle" style="background: #865766"></div>
    </div>
    <h3>Todo</h3>
    <ul id="incomplete-tasks">
        <?php foreach($tasks as $task)  {?>
        <li class="task_line checkboxAndLabel <?php if($task['Level'] == 1) echo 'priorityMode' ?>">
            <input type="checkbox" onchange="updateCheckbox(this)" id="Task<?php echo $task['ID']?>">
            <label for="Task<?php echo $task['ID']?>"><?php echo $task['Name'] ?></label>
            <input type="text">
            <button class="edit" onclick="editTask(this)">
                <span class="lnr lnr-pencil icon"></span>
            </button>
            <button class="star" onclick="changeLevel(this)">
                <span class="lnr lnr-star-empty"></span>
                <span class="lnr lnr-star"></span>
            </button>
            <button class="delete" onclick="deleteTask(this)">
                <span class="lnr lnr-cross icon"></span>
            </button>
        </li>
        <?php } ?>
    </ul>
    <h3>Completed</h3>
    <ul id="completed-tasks">
        <?php foreach($tasksdone as $taskdone)  {?>
        <li class="task_line checkboxAndLabel <?php if($taskdone['Level'] == 1) echo 'priorityMode' ?>">
            <input type="checkbox" checked onchange="updateCheckbox(this)" id="<?php echo $taskdone['ID']?>">
            <label for="<?php echo $taskdone['ID']?>"><?php echo $taskdone['Name'] ?></label>
            <input type="text">
            <button class="edit" onclick="editTask(this)">
                <span class="lnr lnr-pencil"></span>
            </button>
            <button class="star" onclick="changeLevel(this)">
                <span class="lnr lnr-star-empty"></span>
                <span class="lnr lnr-star"></span>
            </button>
            <button class="delete" onclick="deleteTask(this)">
                <span class="lnr lnr-cross"></span>
            </button>
        </li>
        <?php } ?>
    </ul>
    <h3>Add Item</h3>
    <div class="new_task">
        <label for="new-task"></label>
        <input id="new-task" type="text">
        <button id="add_button" onclick="addTask()">
            <span class="lnr lnr-plus-circle"></span>
        </button>
    </div>
</div>