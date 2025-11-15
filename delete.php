<?php 
    $title = 'Delete Record';
    require_once './includes/header.php';
    require_once './db/conn.php';
?>
<div class="container py-3">
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['primary_key']) ? trim($_POST['primary_key']) : '';

    if ($id === '' || !ctype_digit($id)) {
        echo '<div class="alert alert-warning">Please provide a valid numeric primary key.</div>';
    } else {
        $id = (int)$id;
        $stmt = mysqli_prepare($conn, 'DELETE FROM client_info WHERE client_id = ?');
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, 'i', $id);
            if (mysqli_stmt_execute($stmt)) {
                if (mysqli_stmt_affected_rows($stmt) > 0) {
                    echo '<div class="alert alert-success">Record with ID ' . htmlspecialchars((string)$id) . ' deleted successfully.</div>';
                } else {
                    echo '<div class="alert alert-info">No record found with ID ' . htmlspecialchars((string)$id) . '.</div>';
                }
            } else {
                echo '<div class="alert alert-danger">Error executing delete: ' . htmlspecialchars(mysqli_error($conn)) . '</div>';
            }
            mysqli_stmt_close($stmt);
        } else {
            echo '<div class="alert alert-danger">Failed to prepare delete statement.</div>';
        }
    }
} else {
    echo '<div class="alert alert-secondary">No data submitted.</div>';
}
?>
    <div class="d-flex gap-2 mt-3">
        <a href="index.php" class="btn btn-secondary">Back to Home</a>
        <a href="viewrecords.php" class="btn btn-info">View Records</a>
    </div>
</div>
<?php 
    require_once './includes/footer.php';
?>