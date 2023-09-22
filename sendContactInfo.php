<?php
    include "contactus_email.php";
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $facility = $_POST['facility'];
    $questions = $_POST['questions'];
    $name = $fname . " " . $lname;

    if(empty($name) || empty($email) || empty($phone) || $facility == "Select Facility" || empty($questions)){
        echo "Please fill up all the fields";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email format";
    }else{
        $to = "faisalreza@hotmail.com";
        $subject = "Email From Gainesville Mini Storage Website";

        $message = emailHtml($name, $email, $phone, $facility, $questions);

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        if(mail($to,$subject,$message,$headers)){
            echo "Information Send Successfully";
        }else{
            echo "Mail send failed, please try again.";
        }
    }
?>
