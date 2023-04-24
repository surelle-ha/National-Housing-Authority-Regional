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
        header('location: landing.php');
    }

    if(!isset($_GET['cellsite'])){
        header('location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index-style.css">
    <title>Listing | <?php echo $_GET['cellsite']; ?></title>
</head>
<body>
    <div class="app-container">
    <?php include "widget/topbar.php"?>
    <div class="app-content">
        <?php include "widget/sidebar.php"; ?>
        <div class="projects-section">
        <div class="projects-section-header">
            <p><?php echo $_GET['cellsite']; ?></p>
            <p class="time">
                <button onclick="window.location.href='index.php'" style="border: none; background: black; color: white; padding: 10px; border-radius: 13px; width: 100px;">Back</button>
            </p>
        </div>
        <div class="projects-section-line">
            <div class="projects-status">
            <div class="item-status">
                <span class="status-type">Sort by Price [Asc]</span>
            </div>
            <div class="item-status">
                <span class="status-type">Sort by Type [Asc]</span>
            </div>
            <div class="item-status">
                <span class="status-type">Sort by Location [Asc]</span>
            </div>
            </div>
        </div>
        <div class="project-boxes jsListView">

            <?php 
                $sql = "SELECT * FROM assets_tb WHERE cellsite = '".$_GET['cellsite']."';";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
            ?>
                <div class="project-box-wrapper">
                    <div class="project-box" style="background-color: #fee4cb;">
                        <div class="project-box-header">
                            <span>ID: <?php echo $row['id']; ?> | Date Added: <?php echo $row['date_added']; ?></span>
                            <div class="more-wrapper">
                                <div class="project-box-footer">
                                    <div class="days-left" onclick="window.location.href = 'application.php?applyon=<?php echo $row['id']; ?>'" style="color: #4D4D54;">Apply</div>
                                </div>
                            </div>
                        </div>
                        <div class="project-box-content-header">
                            <p class="box-content-header" style="width: 300px;"><?php echo $row['address'].', '.$row['municipality']; ?></p>
                            <p class="box-content-subheader"><?php echo $row['city']; ?></p>
                        </div>
                        <div class="box-progress-wrapper">
                        </div>
                        <div class="project-box-footer" style="margin-right: 80px;">
                            <div class="days-left" onclick="window.location.href = 'listing-view.php?viewon=<?php echo $row['id']; ?>'" color: #4D4D54;">View Details</div>
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