<div class="app-sidebar">
    <a href="index.php" class="app-sidebar-link <?php if (basename($_SERVER['PHP_SELF']) == "index.php" || basename($_SERVER['PHP_SELF']) == "listing.php" || basename($_SERVER['PHP_SELF']) == "listing-view.php") { ?>active<?php } ?>">
        <i class="fa fa-home fa-lg"></i>
    </a>
    <a href="account.php" class="app-sidebar-link <?php if (basename($_SERVER['PHP_SELF']) == "account.php") { ?>active<?php } ?>">
        <i class="fa fa-user fa-lg"></i>
    </a>
    <a href="application-list.php" class="app-sidebar-link <?php if (basename($_SERVER['PHP_SELF']) == "application-list.php" || basename($_SERVER['PHP_SELF']) == "application-view.php") { ?>active<?php } ?>">
        <i class="fa fa-list fa-lg"></i>
    </a>
    <a href="payment-calendar.php" class="app-sidebar-link <?php if (basename($_SERVER['PHP_SELF']) == "payment-calendar.php") { ?>active<?php } ?>">
        <i class="fa fa-calendar-day fa-lg"></i>
    </a>
    <a href="admin.php" class="app-sidebar-link <?php if (basename($_SERVER['PHP_SELF']) == "admin.php") { ?>active<?php } ?>">
        <i class="fa fa-users fa-lg"></i>
    </a>
    <a href="settings.php" class="app-sidebar-link <?php if (basename($_SERVER['PHP_SELF']) == "settings.php") { ?>active<?php } ?>">
        <i class="fa fa-wrench fa-lg"></i>
    </a>
</div>