<div class="messages-section">
    <button class="messages-close">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
        <circle cx="12" cy="12" r="10" />
        <line x1="15" y1="9" x2="9" y2="15" />
        <line x1="9" y1="9" x2="15" y2="15" /></svg>
    </button>
    <div class="projects-section-header">
        <p>Notification (4)</p>
    </div>
    <div class="messages">
        <?php
        $sql = "SELECT * FROM notification_tb WHERE user_id = '".$_SESSION['id']."';";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
        ?>
        <div class="message-box">
            <img src="https://cdn-icons-png.flaticon.com/512/6828/6828737.png" alt="profile image">
            <div class="message-content">
                <div class="message-header">
                    <div class="name">
                        <?php echo $row['subject']; ?>
                    </div>
                    <div class="star-checkbox">
                        <input type="checkbox" id="star-1">
                        <label for="star-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                        </label>
                    </div>
                </div>
                <p class="message-line">
                <?php echo $row['message']; ?>
                </p>
                <p class="message-line time">
                <?php echo $row['created_at']; ?>
                </p>
            </div>
        </div>
        <?php
            }
        }
        ?>
        <div class="message-box">
        <img src="https://cdn-icons-png.flaticon.com/512/6828/6828737.png" alt="profile image">
        <div class="message-content">
            <div class="message-header">
            <div class="name">Application Approved</div>
            <div class="star-checkbox">
                <input type="checkbox" id="star-1">
                <label for="star-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                </label>
            </div>
            </div>
            <p class="message-line">
            Your Application for Housing Loan is now approved. We'll send you SMS and Email for further instructions.
            </p>
            <p class="message-line time">
            Dec, 12
            </p>
        </div>
        </div>
        <div class="message-box">
        <img src="https://cdn-icons-png.flaticon.com/512/6828/6828737.png" alt="profile image">
        <div class="message-content">
            <div class="message-header">
            <div class="name">Application Denied</div>
            <div class="star-checkbox">
                <input type="checkbox" id="star-2">
                <label for="star-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                </label>
            </div>
            </div>
            <p class="message-line">
            Your qualification has been denied due to lack of requirement.
            </p>
            <p class="message-line time">
            Dec, 12
            </p>
        </div>
        </div>
        <div class="message-box">
        <img src="https://cdn-icons-png.flaticon.com/512/6828/6828737.png" alt="profile image">
        <div class="message-content">
            <div class="message-header">
            <div class="name">Payment Reminder</div>
            <div class="star-checkbox">
                <input type="checkbox" id="star-3">
                <label for="star-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                </label>
            </div>
            </div>
            <p class="message-line">
            Reminder! Your payment is due on April 20.
            </p>
            <p class="message-line time">
            Dec, 12
            </p>
        </div>
        </div>
        <div class="message-box">
        <img src="https://cdn-icons-png.flaticon.com/512/6828/6828737.png" alt="profile image">
        <div class="message-content">
            <div class="message-header">
            <div class="name">Payment Received</div>
            <div class="star-checkbox">
                <input type="checkbox" id="star-4">
                <label for="star-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
                </label>
            </div>
            </div>
            <p class="message-line">
            Your payment amounting P10,000 is received.
            </p>
            <p class="message-line time">
            Dec, 11
            </p>
        </div>
    </div>
    </div>
</div>