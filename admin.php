<?php
    session_start();
    include "php/environment.php";
    include "php/init.php";
    include "php/mobileDetect.php";
    include "php/connection.php";
    include "php/ClickatellSMS.php";
    include "php/notification.php";
    include "php/dataIn.php";
    include "php/login.php";
    include "php/employee.php";
    include "php/manageCart.php";

    /* USER VERIFY */
    if(isset($_SESSION['logged_status'])){
        if($_SESSION['task'] == "ADMIN"){
            // Admin Authenticated 
        }else if($_SESSION['task'] == "USER"){
            header("location: main.php");
        }else if($_SESSION['task'] == "ROLE1"){
            header("location: admin.php");
        }else if($_SESSION['task'] == "ROLE2"){
            header("location: admin.php");
        }
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
    <link rel="stylesheet" href="css/admin-style.css">
    <script src="https://unpkg.com/phosphor-icons"></script>
    <title><?php echo $__title; ?></title>
</head>
<body>
    <div class="app">
        <header class="app-header">
            <div class="app-header-logo">
                <div class="logo">
                    <span class="logo-icon">
                        <img src="https://scontent.fmnl18-1.fna.fbcdn.net/v/t1.15752-9/251388057_897044520933745_4821668144666608954_n.png?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHjZRG2lGri8BNqfUYFe6tknXLyPJNedGCdcvI8k150YC6g_LJ59qMK-wyvGFxnHWoSrdvAdeq2U7PnIV-0P3fC&_nc_ohc=ilaoJncLRX4AX964hPD&_nc_ht=scontent.fmnl18-1.fna&oh=03_AdRg9qiPxu0lcNBw-FavuNMLnX8pzo8SIY7mJvYIDHVpVA&oe=645583A1" />
                    </span>
                    <h1 class="logo-title">
                        <span>NHA</span>
                        <span>Dashboard</span>
                    </h1>
                </div>
            </div>
            <div class="app-header-navigation">
                <div class="tabs">
                    <a href="#" onclick="switchPanel('Information')">
                        Information
                    </a>
                    <a href="#" onclick="switchPanel('Applications')">
                        Applications
                    </a>
                    <a href="#" onclick="switchPanel('Assets')">
                        Availabe Assets
                    </a>
                    <a href="#" onclick="switchPanel('Accounts')">
                        Accounts
                    </a>
                    <a href="#" onclick="switchPanel('Payment')">
                        Payment
                    </a>
                    <a href="#" onclick="switchPanel('Taxation')">
                        Taxation
                    </a>
                </div>
            </div>
            <script>
                function switchPanel(panel){
                    if(panel == "Information"){
                        document.getElementById("Information").style.display = "block";
                        document.getElementById("Applications").style.display = "none";
                        document.getElementById("Assets").style.display = "none";
                    }else if(panel == "Applications"){
                        document.getElementById("Information").style.display = "none";
                        document.getElementById("Applications").style.display = "block";
                        document.getElementById("Assets").style.display = "none";
                    }else if(panel == "Assets") {
                        document.getElementById("Information").style.display = "none";
                        document.getElementById("Applications").style.display = "none";
                        document.getElementById("Assets").style.display = "block";
                    }
                }
            </script>
            <div class="app-header-actions">
                <button class="user-profile">
                    <span><?php echo $_SESSION['fname']." ".$_SESSION['lname'];?></span>
                    <span>
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" />
                    </span>
                </button>
                <div class="app-header-actions-buttons">
                    <button class="icon-button large">
                        <i class="ph-magnifying-glass"></i>
                    </button>
                    <button class="icon-button large">
                        <i class="ph-bell"></i>
                    </button>
                </div>
            </div>
            <div class="app-header-mobile">
                <button class="icon-button large">
                    <i class="ph-list"></i>
                </button>
            </div>
    
        </header>
        <div class="app-body">
            <div class="app-body-navigation">
                <nav class="navigation">
                    <a href="index.php">
                        <i class="ph-browsers"></i>
                        <span>Home</span>
                    </a>
                    <a href="admin.php">
                        <i class="ph-browsers"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="account.php">
                        <i class="ph-check-square"></i>
                        <span>Account</span>
                    </a>
                    <a href="email.php">
                        <i class="ph-file-text"></i>
                        <span>Email</span>
                    </a>
                    <a href="check-asset.php">
                        <i class="ph-globe"></i>
                        <span>Check Assets</span>
                    </a>
                    <a href="documents.php">
                        <i class="ph-clipboard-text"></i>
                        <span>Documents</span>
                    </a>
                    <a href="?signout=<?php echo $_SESSION['id']; ?>">
                        <i class="ph-sign-out"></i>
                        <span>Logout</span>
                    </a>
                </nav>
                <footer class="footer">
                    <h1>NHA Team<small>©</small></h1>
                    <div>
                        nha.gov.ph ©<br />
                        All Rights Reserved 2023
                    </div>
                </footer>
            </div>

            <div id="Information" style="display:block;">
                <div class="app-body-main-content">
                    <section class="service-section">
                        <h2>Monitoring</h2>
                        <div class="tiles">
                            <article class="tile">
                                <div class="tile-header">
                                    <i class="ph-lightning-light"></i>
                                    <h3>
                                        <span>1184</span>
                                        <span>Applicants</span>
                                    </h3>
                                </div>
                                <a href="#">
                                    <span>Go to Applicants</span>
                                    <span class="icon-button">
                                        <i class="ph-caret-right-bold"></i>
                                    </span>
                                </a>
                            </article>
                            <article class="tile">
                                <div class="tile-header">
                                    <i class="ph-fire-simple-light"></i>
                                    <h3>
                                        <span>1643</span>
                                        <span>Available Assets</span>
                                    </h3>
                                </div>
                                <a href="#">
                                    <span>Go to Assets</span>
                                    <span class="icon-button">
                                        <i class="ph-caret-right-bold"></i>
                                    </span>
                                </a>
                            </article>
                            <article class="tile">
                                <div class="tile-header">
                                    <i class="ph-file-light"></i>
                                    <h3>
                                        <span>82912</span>
                                        <span>NHA Owners</span>
                                    </h3>
                                </div>
                                <a href="#">
                                    <span>Go to Accounts</span>
                                    <span class="icon-button">
                                        <i class="ph-caret-right-bold"></i>
                                    </span>
                                </a>
                            </article>
                        </div>
                    </section>
                    <section class="transfer-section">
                        <div class="transfer-section-header">
                            <h2>Latest transfers</h2>
                            <div class="filter-options">
                                <p>Filter selected: more than 100 Peso</p>
                                <button class="icon-button">
                                    <i class="ph-funnel"></i>
                                </button>
                                <button class="icon-button">
                                    <i class="ph-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="transfers">
                            <div class="transfer">
                                <div class="transfer-logo">
                                    <img src="https://assets.codepen.io/285131/apple.svg" />
                                </div>
                                <dl class="transfer-details">
                                    <div>
                                        <dt>Test Inc.</dt>
                                        <dd>Test ID Payment</dd>
                                    </div>
                                    <div>
                                        <dt>4012</dt>
                                        <dd>Last four digits</dd>
                                    </div>
                                    <div>
                                        <dt>28 Oct. 23</dt>
                                        <dd>Date payment</dd>
                                    </div>
                                </dl>
                                <div class="transfer-number">
                                    - Php 550
                                </div>
                            </div>
                            <div class="transfer">
                                <div class="transfer-logo">
                                    <img src="https://assets.codepen.io/285131/pinterest.svg" />
                                </div>
                                <dl class="transfer-details">
                                    <div>
                                        <dt>Test</dt>
                                        <dd>Test</dd>
                                    </div>
                                    <div>
                                        <dt>5214</dt>
                                        <dd>Last four digits</dd>
                                    </div>
                                    <div>
                                        <dt>26 Oct. 21</dt>
                                        <dd>Date payment</dd>
                                    </div>
                                </dl>
                                <div class="transfer-number">
                                    - Php 120
                                </div>
                            </div>
                            <div class="transfer">
                                <div class="transfer-logo">
                                    <img src="https://assets.codepen.io/285131/warner-bros.svg" />
                                </div>
                                <dl class="transfer-details">
                                    <div>
                                        <dt>Test Pay.</dt>
                                        <dd>Test</dd>
                                    </div>
                                    <div>
                                        <dt>2228</dt>
                                        <dd>Last four digits</dd>
                                    </div>
                                    <div>
                                        <dt>22 Oct. 21</dt>
                                        <dd>Date payment</dd>
                                    </div>
                                </dl>
                                <div class="transfer-number">
                                    - Php 70
                                </div>
                            </div>
                        </div>
                    </section>
                    <h2>Summary</h2>
                    <div class="service-section-footer">
                        <p style="max-width: 1300px;text-align:justify;">As of the latest records, there are currently %number% applicants who have applied for housing through the National Housing Authority (NHA). These applicants come from diverse backgrounds and have varying circumstances that have led them to seek housing assistance. The NHA is dedicated to providing safe, affordable housing options for all those in need, and these %number% applicants represent the growing demand for these services.</p>
                        <p style="max-width: 1300px;text-align:justify;">To meet the needs of these applicants, the NHA has worked hard to acquire and maintain a variety of assets that can be used to create affordable housing solutions. At present, there are $number% worth of assets available for use in housing projects, including land, buildings, and other resources. These assets represent a significant investment in the future of affordable housing and will be crucial in creating safe and secure homes for those who need them most.</p>
                        <p style="max-width: 1300px;text-align:justify;">Of course, the NHA's work doesn't stop once housing has been created. The agency is also committed to supporting and empowering those who live in its properties, and this includes the %number% active NHA owners who currently reside in NHA housing. These individuals have worked hard to become homeowners and have demonstrated a strong commitment to their communities. Through ongoing support and outreach programs, the NHA aims to help all of its homeowners thrive and succeed in their homes.</p>
                    </div>
                </div>
            </div>

            <div id="Applications" style="display:none;">
                <div class="app-body-main-content">
                    <section class="service-section">
                        <h2>Applications</h2>
                        <div class="service-section-header" style="width: 1300px;">
                            <div class="search-field">
                                <i class="ph-magnifying-glass"></i>
                                <input type="text" placeholder="Application ID Number">
                            </div>
                            <div class="dropdown-field">
                                <select>
                                    <option>New</option>
                                    <option>Background Checking</option>
                                    <option>Provision</option>
                                    <option>Approved</option>
                                </select>
                                <i class="ph-caret-down"></i>
                            </div>
                            <button class="flat-button">
                                Search
                            </button>
                        </div>
                        <div class="mobile-only">
                            <button class="flat-button">
                                Toggle search
                            </button>
                        </div>
                        <div class="service-section-footer">
                            <p>Services are paid according to the current state of the currency and tariff.</p>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <th>Application ID</th>
                                    <th>Status</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Home Address</th>
                                    <th>Occupation</th>
                                    <th>Proof of Income</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1223112322</td>
                                    <td>Approved</td>
                                    <td>User</td>
                                    <td>Test</td>
                                    <td>Test</td>
                                    <td>IT Developer</td>
                                    <td>Yes</td>
                                    <td>Open</td>
                                </tr>
                            </table>
                        </div>
                    </section>
                </div>

                <div class="app-body-sidebar">
                    <section class="payment-section">
                        <h2>New Payment</h2>
                        <div class="payment-section-header">
                            <p>Choose a card to transfer money</p>
                            <div>
                                <button class="card-button mastercard">
                                    <svg width="2001" height="1237" viewBox="0 0 2001 1237" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="a624784f2834e21c94a1c0c9a58bbbaa">
                                            <path id="7869b07bea546aa59a5ee138adbcfd5a" d="M1270.57 1104.15H729.71V132.15H1270.58L1270.57 1104.15Z" fill="currentColor"></path>
                                            <path id="b54e3ab4d7044a9f288082bc6b864ae6" d="M764 618.17C764 421 856.32 245.36 1000.08 132.17C891.261 46.3647 756.669 -0.204758 618.09 9.6031e-07C276.72 9.6031e-07 0 276.76 0 618.17C0 959.58 276.72 1236.34 618.09 1236.34C756.672 1236.55 891.268 1189.98 1000.09 1104.17C856.34 991 764 815.35 764 618.17Z" fill="currentColor"></path>
                                            <path id="67f94b4d1b83252a6619ed6e0cc0a3a1" d="M2000.25 618.17C2000.25 959.58 1723.53 1236.34 1382.16 1236.34C1243.56 1236.54 1108.95 1189.97 1000.11 1104.17C1143.91 990.98 1236.23 815.35 1236.23 618.17C1236.23 420.99 1143.91 245.36 1000.11 132.17C1108.95 46.3673 1243.56 -0.201169 1382.15 -2.24915e-05C1723.52 -2.24915e-05 2000.24 276.76 2000.24 618.17" fill="currentColor"></path>
                                        </g>
                                    </svg>
                                </button>
                                <button class="card-button visa active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" viewBox="0 0 141.732 141.732">
                                        <g fill="currentColor">
                                            <path d="M62.935 89.571h-9.733l6.083-37.384h9.734zM45.014 52.187L35.735 77.9l-1.098-5.537.001.002-3.275-16.812s-.396-3.366-4.617-3.366h-15.34l-.18.633s4.691.976 10.181 4.273l8.456 32.479h10.141l15.485-37.385H45.014zM121.569 89.571h8.937l-7.792-37.385h-7.824c-3.613 0-4.493 2.786-4.493 2.786L95.881 89.571h10.146l2.029-5.553h12.373l1.14 5.553zm-10.71-13.224l5.114-13.99 2.877 13.99h-7.991zM96.642 61.177l1.389-8.028s-4.286-1.63-8.754-1.63c-4.83 0-16.3 2.111-16.3 12.376 0 9.658 13.462 9.778 13.462 14.851s-12.075 4.164-16.06.965l-1.447 8.394s4.346 2.111 10.986 2.111c6.642 0 16.662-3.439 16.662-12.799 0-9.72-13.583-10.625-13.583-14.851.001-4.227 9.48-3.684 13.645-1.389z" />
                                        </g>
                                        <path d="M34.638 72.364l-3.275-16.812s-.396-3.366-4.617-3.366h-15.34l-.18.633s7.373 1.528 14.445 7.253c6.762 5.472 8.967 12.292 8.967 12.292z" fill="currentColor" />
                                        <path fill="none" d="M0 0h141.732v141.732H0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="payments">
                            <div class="payment">
                                <div class="card green">
                                    <span>01/22</span>
                                    <span>
                                        •••• 4012
                                    </span>
                                </div>
                                <div class="payment-details">
                                    <h3>Internet</h3>
                                    <div>
                                        <span>Php 2,110</span>
                                        <button class="icon-button">
                                            <i class="ph-caret-right-bold"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="payment">
                                <div class="card olive">
                                    <span>12/23</span>
                                    <span>
                                        •••• 2228
                                    </span>
                                </div>
                                <div class="payment-details">
                                    <h3>Universal</h3>
                                    <div>
                                        <span>Php 5,621</span>
                                        <button class="icon-button">
                                            <i class="ph-caret-right-bold"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="payment">
                                <div class="card gray">
                                    <span>03/22</span>
                                    <span>
                                        •••• 5214
                                    </span>
                                </div>
                                <div class="payment-details">
                                    <h3>Gold</h3>
                                    <div>
                                        <span>Php 3,473</span>
                                        <button class="icon-button">
                                            <i class="ph-caret-right-bold"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq">
                            <p>Most frequently asked questions</p>
                            <div>
                                <label>Question</label>
                                <input type="text" placeholder="Type here">
                            </div>
                        </div>
                        <div class="payment-section-footer">
                            <button class="save-button">
                                Save
                            </button>
                            <button class="settings-button">
                                <i class="ph-gear"></i>
                                <span>More settings</span>
                            </button>
                        </div>
                    </section>
                </div>
            </div>

            <div id="Assets" style="display:none;">
                <div class="app-body-main-content">
                    <section class="service-section">
                        <h2>Available Assets</h2>
                        <div class="service-section-header" style="width: 1300px;">
                            <div class="search-field">
                                <i class="ph-magnifying-glass"></i>
                                <input type="text" placeholder="Slot ID Number">
                            </div>
                            <div class="dropdown-field">
                                <select>
                                    <option>National Capital Region</option>
                                </select>
                                <i class="ph-caret-down"></i>
                            </div>
                            <button class="flat-button">
                                Search
                            </button>
                        </div>
                        <div class="mobile-only">
                            <button class="flat-button">
                                Toggle search
                            </button>
                        </div>
                        <div class="service-section-footer">
                            <p>Services are paid according to the current state of the currency and tariff.</p>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <th>Slot ID</th>
                                    <th>Land Size</th>
                                    <th>Address</th>
                                    <th>Municipality</th>
                                    <th>City</th>
                                    <th>Region</th>
                                    <th>Action</th>
                                </tr>
                                <form method="POST">
                                    <tr>
                                        <td><input type="text" name="id" placeholder="ID" required></td>
                                        <td><input type="text" name="size" placeholder="Size" required></td>
                                        <td><input type="text" name="address" placeholder="Address" required></td>
                                        <td><input type="text" name="municipality" placeholder="Municipality" required></td>
                                        <td><input type="text" name="city" placeholder="City" required></td>
                                        <td><input type="text" name="region" placeholder="Region" required></td>
                                        <td><input name="submit" type="submit" value="Add"></td>
                                    </tr>
                                </form>
                                <style>
                                    input {
                                        background-color: inherit;
                                        border: none;
                                        color: white;
                                    }
                                </style>
                                <?php
                                    $sql = "SELECT * FROM assets_tb;";
                                    $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)) {
                                    ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['size']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['municipality']; ?></td>
                                    <td><?php echo $row['city']; ?></td>
                                    <td><?php echo $row['region']; ?></td>
                                    <td>sample</td>
                                </tr>
                                <?php 
                                            }
                                        }
                                ?>
                            </table>
                        </div>
                    </section>
                    <section class="transfer-section">
                        <div class="transfer-section-header">
                            <h2>Latest transfers</h2>
                            <div class="filter-options">
                                <p>Filter selected: more than 100 Php</p>
                                <button class="icon-button">
                                    <i class="ph-funnel"></i>
                                </button>
                                <button class="icon-button">
                                    <i class="ph-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="transfers">
                            <div class="transfer">
                                <div class="transfer-logo">
                                    <img src="https://assets.codepen.io/285131/apple.svg" />
                                </div>
                                <dl class="transfer-details">
                                    <div>
                                        <dt>Test Inc.</dt>
                                        <dd>Test ID Payment</dd>
                                    </div>
                                    <div>
                                        <dt>4012</dt>
                                        <dd>Last four digits</dd>
                                    </div>
                                    <div>
                                        <dt>28 Oct. 21</dt>
                                        <dd>Date payment</dd>
                                    </div>
                                </dl>
                                <div class="transfer-number">
                                    - Php 550
                                </div>
                            </div>
                            <div class="transfer">
                                <div class="transfer-logo">
                                    <img src="https://assets.codepen.io/285131/pinterest.svg" />
                                </div>
                                <dl class="transfer-details">
                                    <div>
                                        <dt>Test</dt>
                                        <dd>Test</dd>
                                    </div>
                                    <div>
                                        <dt>5214</dt>
                                        <dd>Last four digits</dd>
                                    </div>
                                    <div>
                                        <dt>26 Oct. 21</dt>
                                        <dd>Date payment</dd>
                                    </div>
                                </dl>
                                <div class="transfer-number">
                                    - Php 120
                                </div>
                            </div>
                            <div class="transfer">
                                <div class="transfer-logo">
                                    <img src="https://assets.codepen.io/285131/warner-bros.svg" />
                                </div>
                                <dl class="transfer-details">
                                    <div>
                                        <dt>Test Payment.</dt>
                                        <dd>Test</dd>
                                    </div>
                                    <div>
                                        <dt>2228</dt>
                                        <dd>Last four digits</dd>
                                    </div>
                                    <div>
                                        <dt>22 Oct. 21</dt>
                                        <dd>Date payment</dd>
                                    </div>
                                </dl>
                                <div class="transfer-number">
                                    - Php 70
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="app-body-sidebar">
                    <section class="payment-section">
                        <h2>New Payment</h2>
                        <div class="payment-section-header">
                            <p>Choose a card to transfer money</p>
                            <div>
                                <button class="card-button mastercard">
                                    <svg width="2001" height="1237" viewBox="0 0 2001 1237" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="a624784f2834e21c94a1c0c9a58bbbaa">
                                            <path id="7869b07bea546aa59a5ee138adbcfd5a" d="M1270.57 1104.15H729.71V132.15H1270.58L1270.57 1104.15Z" fill="currentColor"></path>
                                            <path id="b54e3ab4d7044a9f288082bc6b864ae6" d="M764 618.17C764 421 856.32 245.36 1000.08 132.17C891.261 46.3647 756.669 -0.204758 618.09 9.6031e-07C276.72 9.6031e-07 0 276.76 0 618.17C0 959.58 276.72 1236.34 618.09 1236.34C756.672 1236.55 891.268 1189.98 1000.09 1104.17C856.34 991 764 815.35 764 618.17Z" fill="currentColor"></path>
                                            <path id="67f94b4d1b83252a6619ed6e0cc0a3a1" d="M2000.25 618.17C2000.25 959.58 1723.53 1236.34 1382.16 1236.34C1243.56 1236.54 1108.95 1189.97 1000.11 1104.17C1143.91 990.98 1236.23 815.35 1236.23 618.17C1236.23 420.99 1143.91 245.36 1000.11 132.17C1108.95 46.3673 1243.56 -0.201169 1382.15 -2.24915e-05C1723.52 -2.24915e-05 2000.24 276.76 2000.24 618.17" fill="currentColor"></path>
                                        </g>
                                    </svg>
                                </button>
                                <button class="card-button visa active">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="2500" height="2500" viewBox="0 0 141.732 141.732">
                                        <g fill="currentColor">
                                            <path d="M62.935 89.571h-9.733l6.083-37.384h9.734zM45.014 52.187L35.735 77.9l-1.098-5.537.001.002-3.275-16.812s-.396-3.366-4.617-3.366h-15.34l-.18.633s4.691.976 10.181 4.273l8.456 32.479h10.141l15.485-37.385H45.014zM121.569 89.571h8.937l-7.792-37.385h-7.824c-3.613 0-4.493 2.786-4.493 2.786L95.881 89.571h10.146l2.029-5.553h12.373l1.14 5.553zm-10.71-13.224l5.114-13.99 2.877 13.99h-7.991zM96.642 61.177l1.389-8.028s-4.286-1.63-8.754-1.63c-4.83 0-16.3 2.111-16.3 12.376 0 9.658 13.462 9.778 13.462 14.851s-12.075 4.164-16.06.965l-1.447 8.394s4.346 2.111 10.986 2.111c6.642 0 16.662-3.439 16.662-12.799 0-9.72-13.583-10.625-13.583-14.851.001-4.227 9.48-3.684 13.645-1.389z" />
                                        </g>
                                        <path d="M34.638 72.364l-3.275-16.812s-.396-3.366-4.617-3.366h-15.34l-.18.633s7.373 1.528 14.445 7.253c6.762 5.472 8.967 12.292 8.967 12.292z" fill="currentColor" />
                                        <path fill="none" d="M0 0h141.732v141.732H0z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="payments">
                            <div class="payment">
                                <div class="card green">
                                    <span>01/22</span>
                                    <span>
                                        •••• 4012
                                    </span>
                                </div>
                                <div class="payment-details">
                                    <h3>Internet</h3>
                                    <div>
                                        <span>Php 2,110</span>
                                        <button class="icon-button">
                                            <i class="ph-caret-right-bold"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="payment">
                                <div class="card olive">
                                    <span>12/23</span>
                                    <span>
                                        •••• 2228
                                    </span>
                                </div>
                                <div class="payment-details">
                                    <h3>Universal</h3>
                                    <div>
                                        <span>Php 5,621</span>
                                        <button class="icon-button">
                                            <i class="ph-caret-right-bold"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="payment">
                                <div class="card gray">
                                    <span>03/22</span>
                                    <span>
                                        •••• 5214
                                    </span>
                                </div>
                                <div class="payment-details">
                                    <h3>Gold</h3>
                                    <div>
                                        <span>Php 3,473</span>
                                        <button class="icon-button">
                                            <i class="ph-caret-right-bold"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="faq">
                            <p>Most frequently asked questions</p>
                            <div>
                                <label>Question</label>
                                <input type="text" placeholder="Type here">
                            </div>
                        </div>
                        <div class="payment-section-footer">
                            <button class="save-button">
                                Save
                            </button>
                            <button class="settings-button">
                                <i class="ph-gear"></i>
                                <span>More settings</span>
                            </button>
                        </div>
                    </section>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>