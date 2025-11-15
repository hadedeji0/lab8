<?php 
    $title = "Received";
    require_once './includes/header.php';
?>
    <h1>Testing!!</h1>
    <?php echo $_POST['email']; ?>
    <?php echo $_POST['address']; ?>
    <?php echo $_POST['city']; ?>
    <?php echo $_POST['province']; ?>
    <?php echo $_POST['postal_code']; ?>
<?php 
    require_once './includes/footer.php';
?>