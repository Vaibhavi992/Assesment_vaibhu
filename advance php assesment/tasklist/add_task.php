
<?php include 'header.php'; ?>

<section class="task-container">
    <h2>Add a New Task</h2>
    <form method="post" action="index.php?action=addTask" class="task-form">
        <input type="text" name="task" class="task-input" placeholder="Enter task" required>
        <button type="submit" class="btn-submit">Add Task</button>
    </form>
    <a href="index.php?action=list" class="btn-back">Back to Task List</a>
</section>


