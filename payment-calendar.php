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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <p>Payment Calendar</p>
            <p class="time">
                <button onclick="window.location.href='application.php'" style="border: none; background: black; color: white; padding: 10px; border-radius: 13px; width: 100px;">Apply</button>
            </p>
        </div>
        <div class="project-boxes jsGridView">

            <div>
                <div class="card-container">
                    <div class="card">
                        <h2>Card Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec malesuada massa. In maximus purus vel malesuada rutrum. Suspendisse potenti. </p>
                        <button class="btn">View</button>
                    </div>
                    <div class="card">
                        <h2>Card Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec malesuada massa. In maximus purus vel malesuada rutrum. Suspendisse potenti. </p>
                        <button class="btn">View</button>
                    </div>
                    <div class="card">
                        <h2>Card Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec malesuada massa. In maximus purus vel malesuada rutrum. Suspendisse potenti. </p>
                        <button class="btn">View</button>
                    </div>
                </div>
                <style scoped>
                    .card {
                        background-color: #fff;
                        border: 1px solid #ddd;
                        padding: 20px;
                        text-align: center;
                        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                        transition: 0.3s;
                        margin: 10px;
                        display: grid;
                        grid-template-columns: 1fr;
                        grid-gap: 10px;
                    }

                    .card:hover {
                        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                    }

                    .btn {
                        background-color: #4CAF50;
                        color: #fff;
                        padding: 8px 16px;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        font-size: 14px;
                        margin-top: 10px;
                    }

                    @media screen and (min-width: 768px) {
                        .card-container {
                            display: grid;
                            grid-template-columns: repeat(3, 1fr);
                            grid-gap: 20px;
                        }
                    }
                </style>
            </div>
        
        </div>
    </div>
    
    <?php include 'widget/notification.php'; ?>

    </div>
    </div>
</body>
<script src="js/index-script.js"></script>
</html>