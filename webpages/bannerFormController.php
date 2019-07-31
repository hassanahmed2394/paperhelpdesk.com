<?php
## CONFIG ##
include("connectiondb.php");

# LIST EMAIL ADDRESS
$recipient = "order@paperhelpdesk.com";

# SUBJECT (Subscribe/Remove)
$subject = "Banner Form Query";
// $ebpage = "App development";

# RESULT PAGE
$location = "https://www.paperhelpdesk.com/thankyou.php";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = "support@paperhelpdesk.com";

# MAIL BODY
$subscriber_email = $_REQUEST['fEmail'];
$subscriber_subject = "Thankyou!! One of Our Consultant Will Get Back To you Shortly
";
$subscriber_email_data = file_get_contents('http://www.paperhelpdesk.com/email/queryFormThankyou.html');

if(isset($_REQUEST['hiddencapcha']) && $_REQUEST['hiddencapcha'] == "" ){
  if(isset($_REQUEST['fName']) && $_REQUEST['fName'] != "" 
  && isset($_REQUEST['fEmail']) && $_REQUEST['fEmail'] != "" 
  && isset($_REQUEST['fNumber']) && $_REQUEST['fNumber'] != ""){


$body .= "Name: ".$_REQUEST['fName']." \n";
$body .= "Email: ".$_REQUEST['fEmail']." \n";
$body .= "Number: ".$_REQUEST['fNumber']." \n";
$body .= "Phone Code: ".$_REQUEST['pc']." \n";
$body .= "Country Name: ".$_REQUEST['ctry']." \n";
$body .= "VisitorIP: ".$_REQUEST['cip']." \n";
$body .= "Message: ".$_REQUEST['fMessage']." \n";


// $body .= "Page: ".$ebpage." \n";

if (mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
else{ 
$sql = 'insert into bannerform (cust_name,customer_email,cust_phone,cust_message,countryName,countryCode,VisitorIp) 
	values ("'.$_REQUEST['fName'].'","'.$_REQUEST['fEmail'].'","'.$_REQUEST['fNumber'].'","'.$_REQUEST['fMessage'].'","'.$_REQUEST['ctry'].'","'.$_REQUEST['pc'].'","'.$_REQUEST['cip'].'")';
mysqli_query($con,$sql);
mysqli_close($con);
}

$headers = "From: " . $sender . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

# add more fields here if required
## SEND MESSGAE ##

mail( $recipient, $subject, $body,  "From: $sender" ) or die ("Mail could not be sent.");
mail( $subscriber_email, $subscriber_subject, $subscriber_email_data, $headers) or die ("Unable to send email to subscriber");

## SHOW RESULT PAGE ##
header( "Location: $location" );

 }

    
}

?>
