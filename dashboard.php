<?php 
    $filename = basename($_SERVER['PHP_SELF'], '.php');

    include_once 'inc/global.php';
?>

<?php include_once 'inc/header.php'; ?>

    <!-- Main wrapper -->
    <div class="main-wrapper">

        <div class="color-section">
            <h1>Welcome</h1>
            <pre><?php print_r($_SESSION) ?></pre>
        </div>


    </div>

<?php include_once 'inc/footer.php'; ?>