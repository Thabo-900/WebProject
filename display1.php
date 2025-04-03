
<?php session_start(); ?>
<?php if (!isset($_SESSION['logged_in'])) { header('Location: login1.php'); exit(); } ?>
<!DOCTYPE html>
<html>
<head>
    <title>Task Details</title>
</head>
<body>
    <h2>Task Details</h2>
    <?php if (isset($_SESSION['task_data'])): ?>
        <ul>
            <?php foreach ($_SESSION['task_data'] as $task): ?>
                <li><?php echo "{$task['task_name']} - {$task['task_deadline']} ({$task['task_priority']}) - {$task['task_description']}"; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No tasks added.</p>
    <?php endif; ?>
    <a href="submissionf.php">Add More Tasks</a>
    <a href="logout1.php">Logout</a>
</body>
</html>
