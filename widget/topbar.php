<div class="app-header">
    <div class="app-header-left">
    <img width="40px" src="https://scontent.fmnl18-1.fna.fbcdn.net/v/t1.15752-9/251388057_897044520933745_4821668144666608954_n.png?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHjZRG2lGri8BNqfUYFe6tknXLyPJNedGCdcvI8k150YC6g_LJ59qMK-wyvGFxnHWoSrdvAdeq2U7PnIV-0P3fC&_nc_ohc=ilaoJncLRX4AX964hPD&_nc_ht=scontent.fmnl18-1.fna&oh=03_AdRg9qiPxu0lcNBw-FavuNMLnX8pzo8SIY7mJvYIDHVpVA&oe=645583A1" alt="">
    <p class="app-name">National Housing Authority</p>
    <div class="search-wrapper">
        <input class="search-input" type="text" placeholder="Search">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="feather feather-search" viewBox="0 0 24 24">
        <defs></defs>
        <circle cx="11" cy="11" r="8"></circle>
        <path d="M21 21l-4.35-4.35"></path>
        </svg>
    </div>
</div>
<div class="app-header-right">
    <button class="mode-switch" title="Switch Theme">
        <svg class="moon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" width="24" height="24" viewBox="0 0 24 24">
        <defs></defs>
        <path d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z"></path>
        </svg>
    </button>
    <button class="profile-btn">
        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" />
        <span><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></span>
    </button>
    </div>
    <button class="messages-btn">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
        <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z" /></svg>
    </button>
</div>