<?php include 'header.php'; ?>

<section class="task-container">
    <h2>TASK LIST</h2>
    <?php if (!empty($tasks)): ?>
        <ul class="task-list">
            <?php foreach ($tasks as $index => $task): ?>
                <li class="task-item">
                    <span><?php echo htmlspecialchars($task); ?></span>
                    <a href="index.php?action=delete&index=<?php echo $index; ?>" class="btn-delete">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="index.php?action=clear" class="btn-clear">Clear Tasks</a>
    <?php else: ?>
        <p class="no-tasks">No tasks available. Please add a new task.</p>
    <?php endif; ?>
    <a href="index.php?action=add" class="btn-add">Add Task</a>
</section>

