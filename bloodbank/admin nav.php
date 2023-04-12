<?php
session_start();
if (!isset($_SESSION['AdminloginId'])) {
    header("location: admin.php");
}
?>

<header class="header fixed-top">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <a class="logo">Blood<span>Bank</span></a>
            <nav class="nav" method="POST">
                <a href="admin panel.php">Dashbord</a>
                <a href="admin.php">Log Out</a>
            </nav>
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
    </div>
    <?php
    if (isset($_POST['Logout'])) {
        session_destroy();
        header("location: admin.php");
    }
    ?>
</header>
<div class="sidebar">
    <ul>
        <li>
            <a href="admin panel.php#index" id="inbox">
                <i class="fas fa-envelope"></i>Inbox
            </a>
        </li>
        <li>
            <a href="admin_doner.php" id="doner">
                <i class="fas fa-users"></i>Doners
            </a>
        </li>
        <li>
            <a href="admin_need.php" id="need_blood">
                <i class="fas fa-procedures"></i>Need Blood
            </a>
        </li>
    </ul>
</div>