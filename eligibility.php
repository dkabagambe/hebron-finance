<?php 
if(isset($_POST['submit'])){
    $to = 'info@hebronfinance.com'; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
 
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $age = $_POST['age'];
  $newDate = date('Y-m-d');
 
    $telephone= $_POST['telephone'];
    $telephon= $_POST['telephon'];
  

    $subject = 'Form submission';
    $message = $first_name . ' ' . $last_name .''. ' expressed interest   ' .''.' on '.''. $newDate .''. ' on '.''. $_POST['foster'] .''.' of a child aged btn '.$_POST['adopt'].' months '.''.    $last_name . 'is from '.''. $_POST['address'] .''.' aged '.$_POST['age'] .' years '.' is '.''. $_POST['marital'] .''.' emails are '. $_POST['email'] .' and '. $_POST['email1'] .''.' telephone numbers are : '. $telephone .' and '.  $telephon .'     motivation to Adopt : '.$_POST['subject1'] .''.'    where he had about adoption in uganda: '. $_POST['subject2'] .'      additional comments are: '. $_POST['subject3'];

    $headers = 'From:' . $from;
    mail($to,$subject,$message,$headers);
    echo 'Mail Sent. Thank you for showing interest in Dolphin' . $first_name . ', we will contact you shortly.';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>