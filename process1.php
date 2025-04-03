
<?php
session_start();
if (!isset($_SESSION['logged_in'])) { header('Location: login1.php'); exit(); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['task_data'][] = [
        'task_name' => htmlspecialchars($_POST['task_name']),
        'task_deadline' => htmlspecialchars($_POST['task_deadline']),
        'task_priority' => htmlspecialchars($_POST['task_priority']),
        'task_description' => htmlspecialchars($_POST['task_description'])
    ];
    header('Location: display1.php');
    exit();
}
?>