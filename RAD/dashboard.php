<?php
session_start();
if(!isset($_SESSION['user'])) header('location: login.php');
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>RAD - Dashboard Page</title>
    <script src="https://kit.fontawesome.com/9c1f6e8358.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div id="dashboardMainContainer">
                <?php include('partials/app-sidebar.php') ?>
        <div class="dashboard_content_container" id="dashboard_content_container">
                <?php include('partials/app-topnav.php')?>
            <div class="dashboard_content">
                <div class="dashboard_content_main">   
                </div>
            </div>
        </div>
    </div>
<script src="js/script.js"></script>

</body>
</html>
