<?php
require_once 'config/db.php';
require_once 'app/controllers/TaskController.php';
require_once 'core/functions.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: /login.php");
    exit();
}

$tasks = TaskController::getAllTasksByUserId($_SESSION['user_id']);

include 'app/views/partials/header.php';
?>

<h2>Your Tasks</h2>
<a href="app/views/create.php">Create New Task</a>

<?php foreach ($tasks as $task): ?>
    <div class="task">
        <h3><?php echo htmlspecialchars($task['title']); ?></h3>
        <p><?php echo htmlspecialchars($task['description']); ?></p>
        <p>Status: <?php echo htmlspecialchars($task['status']); ?></p>
        <a href="app/views/edit.php?id=<?php echo $task['id']; ?>">Edit</a>
        <a href="app/views/delete.php?id=<?php echo $task['id']; ?>" class="delete-task">Delete</a>
    </div>
<?php endforeach; ?>

<?php include 'app/views/partials/footer.php'; ?>
