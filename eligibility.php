
<?php 
if(isset($_POST['submit'])){
    $to = 'info@hebronfinance.com'; // this is your Email address
    $from = $_POST['email-address']; // this is the sender's Email address
 
     $business_period = $_POST["business-period"];
    $loan_amount = $_POST["loan-amount"];
    $first_name = $_POST["first-name"];
    $last_name = $_POST["last-name"];
    $email_address = $_POST["email-address"];
    $phone_number = $_POST["phone-number"];
    $job_role = $_POST["job"];
    $hearing_source = $_POST["item-hearing-source"];
    $cname = $_POST["cname"];
    $business_type = $_POST["business_type"];
    $business_established = $_POST["established_date"];
    $business_address = $_POST["address_line_1"];
    $business_address1 = $_POST['address_line_2'];
    $business_city = $_POST["city"];
    $business_state = $_POST["state"];
    $business_zip = $_POST["zip_code"];
    $business_country = $_POST["country"];
    $annual_revenue = $_POST["annual_sales"];
    $time_in_business = $_POST["business_tenure"];
    $industry = $_POST["industry"];
    $number_of_employees = $_POST["employee_count"];
    $project_description=$_POST['project_description'];

   $subject = "Business Loan Request";
    $message = "A user has submitted a business loan request with the following details:
    
    Business Period: $business_period
    Loan Amount: $loan_amount
    First Name: $first_name
     Last Name: $last_name
     Email Address: $email_address
     Phone Number: $phone_number
     Job Role: $job_role
     How did you hear about Hebron Finance?: $hearing_source
     Company Name: $cname
     Business Type: $business_type
     Business Established: $business_established
     Business Address: $business_address
     Business Address1: $business_address1
     Business City: $business_city
     Business State: $business_state
     Business Zip: $business_zip
     Annual Revenue: $annual_revenue
     Time in Business: $time_in_business
     Industry: $industry
     Number of Employees: $number_of_employees
     Project_description:$project_description
     ";
    $headers = 'From:' . $from;
    mail($to,$subject,$message,$headers);
    echo 'Mail Sent. Thank you for showing interest in hebron finance' . $first_name . ', we will contact you shortly.';
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
