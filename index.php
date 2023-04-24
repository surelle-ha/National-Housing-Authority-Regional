<?php
    session_start();
    include "php/environment.php";
    include "php/init.php";
    include "php/connection.php";
    include "php/ClickatellSMS.php";
    include "php/notification.php";
    include "php/dataIn.php";
    include "php/login.php";
    include "php/employee.php";
    include "php/manageCart.php";

    /* USER VERIFY */
    if(isset($_SESSION['logged_status'])){
        // Do Nothing
    }else{
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index-style.css">
    <title>Document</title>
</head>
<body>
    <div class="app-container">
    <?php include "widget/topbar.php"?>
    <div class="app-content">
        <?php include "widget/sidebar.php"; ?>
        <div class="projects-section">
        <div class="projects-section-header">
            <p>Applications</p>
        </div>
        <div class="projects-section-line">
            <div class="projects-status">
            <div class="item-status">
                <span class="status-number">
                    <?php 
                    $sql = "SELECT COUNT(*) as count FROM assets_tb";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        echo $row['count'];
                    }
                    ?>
                </span>
                <span class="status-type">Total Acquired Asset</span>
            </div>
            <div class="item-status">
                <span class="status-number">1</span>
                <span class="status-type">Test</span>
            </div>
            <div class="item-status">
                <span class="status-number">2</span>
                <span class="status-type">Test</span>
            </div>
            </div>
            <div class="view-actions">
            <button class="view-btn list-view" title="List View">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                <line x1="8" y1="6" x2="21" y2="6" />
                <line x1="8" y1="12" x2="21" y2="12" />
                <line x1="8" y1="18" x2="21" y2="18" />
                <line x1="3" y1="6" x2="3.01" y2="6" />
                <line x1="3" y1="12" x2="3.01" y2="12" />
                <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
            </button>
            <button class="view-btn grid-view active" title="Grid View">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                <rect x="3" y="3" width="7" height="7" />
                <rect x="14" y="3" width="7" height="7" />
                <rect x="14" y="14" width="7" height="7" />
                <rect x="3" y="14" width="7" height="7" /></svg>
            </button>
            </div>
        </div>
        <div class="project-boxes jsGridView">

        <?php 
            $sql = "SELECT cellsite, COUNT(*) as count FROM assets_tb GROUP BY cellsite";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="project-box-wrapper">
                    <div class="project-box" style="background-color: #e9e7fd;">
                        <div class="project-box-header">
                            <span>Last Updated: <?php echo date("m/d/Y", strtotime($row["date_added"])); ?></span>
                        </div>
                        <div class="project-box-content-header">
                            <p class="box-content-header"><?php echo $row["cellsite"]; ?></p>
                            <p class="box-content-subheader">Acquired Asset: <?php echo $row["count"]; ?></p>
                        </div>
                        <div class="box-progress-wrapper">
                        </div>
                        <div class="project-box-footer">
                            <div class="days-left" style="color: #4D4D54;" onclick="window.location.href='listing.php?cellsite=<?php echo $row['cellsite']; ?>'">
                                View
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>

        
        </div>
    </div>
    
    <?php include 'widget/notification.php'; ?>

    </div>
    </div>
</body>
<script src="js/index-script.js"></script>
</html>