<?php 

if(isset($_POST['application_sent'])){
    $application_id = 'NHA'.rand(1000,9999).'N'.rand(10000,99999).'BSK';
    $sql1 = "INSERT INTO applications_tb VALUES('".$application_id."', '".$_POST['assetid']."', '".$_SESSION['id']."', '".$_POST['fname']."', '".$_POST['lname']."', '".$_POST['birthday']."', '".$_POST['marital']."', '".$_POST['email']."', '".$_POST['contact']."', '".$_POST['address1']."', '".$_POST['address2']."', '".$_POST['city']."', '".$_POST['state']."', '".$_POST['zip']."', TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, '".date('Y/m/d')."', '0');";
    if ($conn->query($sql1) === TRUE) {

        if(notifSMS('h31-G9dlTi-LBWen05L24Q==', $_POST['contact'], 'NHA - The team is now reviewing your application and will get back to you as soon as possible.')){
            $sql2 = "INSERT INTO notification_tb VALUES('".'NHA'.rand(1000,9999).'N'.rand(10000,99999).'BSK'."', '".$_SESSION['id']."', 'Application Submitted', 'Thank you for submitting your application (".$application_id.") and requirements. The team is now reviewing your application and will get back to you as soon as possible.', '".date('M, d')."', TRUE, TRUE);";
            $conn->query($sql2);
        }else{
            // log error here
        }

        /* Confirmation Email Send */
        require_once 'vendor/autoload.php';
        $transport = (new Swift_SmtpTransport('smtp-relay.sendinblue.com', 587))
        ->setUsername('0110harold@gmail.com')
        ->setPassword('Q6rFpKD8nOAUGYJR')
        ;
        $mailer = new Swift_Mailer($transport);
        $message = (new Swift_Message('Application Sent to NHA'))
        ->setFrom(['housingassistance@nha.gov.ph' => 'National Housing Authority'])
        ->setTo([$_POST['email'], $_POST['email'] => $_POST['fname']." ".$_POST['lname']])
        ->setBody('Hi <b>'.$_POST['fname'].'</b>,
        <p>Thank you for submitting your application and requirements<br>
        <p>The team is now reviewing your application and will get back to you as soon as possible.</p>
        <p>Do not share this link with anyone. We take account security very seriously at NHA.<br>
        NHA Customer Care will never ask you for your account password, credit card, or banking account number.</p>
        <p>Kind regards,<br>
        <b>The NHA Team</b></p>')
        ;
        $result = $mailer->send($message);
        header('location: application-list.php?succ=asent1');
    } else {
        header('location: application-list.php?err=asent1');
    }
}

?>