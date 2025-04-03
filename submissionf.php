
<?php session_start(); ?>
<?php if (!isset($_SESSION['logged_in'])) { header('Location: login1.php'); exit(); } ?>
<!DOCTYPE html>
<html>
<head>
    <title>Task Management</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <form action="process1.php" method="POST">
        <input type="text" name="task_name" placeholder="Task Name" required>
        <input type="date" name="task_deadline" required>
        <select name="task_priority">
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select>
        <textarea name="task_description" placeholder="Task Description" required></textarea>
        <button type="submit">Submit</button>
    </form>
    <a href="logout1.php">Logout</a>
</body>
</html>