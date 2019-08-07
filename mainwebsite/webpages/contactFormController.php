<?php
## CONFIG ##
include("connectiondb.php");

# LIST EMAIL ADDRESS
$recipient = "order@paperhelpdesk.com";

# SUBJECT (Subscribe/Remove)
$subject = "Order Form Query";
// $ebpage = "App development";

# RESULT PAGE
$location = "/thankyou.php";

## FORM VALUES ##

# SENDER - WE ALSO USE THE RECIPIENT AS SENDER IN THIS SAMPLE
# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!
$sender = "support@paperhelpdesk.com";


if (isset($_POST['NDA'])) {

    $sNDA = "Required";

} else {

   $sNDA = "Not Required";

}



# MAIL BODY
$subscriber_email = $_REQUEST['Email'];
$subscriber_subject = "THANK YOU FOR CONTACTING Paperhelpdesk, ONE OF OUR CONSULTANTS WILL REACH YOU SOON.";
$subscriber_email_data = file_get_contents('http://www.paperhelpdesk.com/email/queryFormThankyou.html');





if(isset($_REQUEST['Name']) && $_REQUEST['Name'] != "" 
  && isset($_REQUEST['Email']) && $_REQUEST['Email'] != "" 
  && isset($_REQUEST['ctry']) && $_REQUEST['ctry'] != "" 
  && isset($_REQUEST['pc']) && $_REQUEST['pc'] != "" 
){
     


$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
$body .= "Country Name: ".$_REQUEST['ctry']." \n";
$body .= "Country code: ".$_REQUEST['pc']." \n";
$body .= "Number: ".$_REQUEST['Number']." \n";
$body .= "Comment: ".$_REQUEST['Comment']." \n";
$body .= "NDA Status: ".$sNDA." \n";
$body .= "Visitor IP: ".$_REQUEST['cip']." \n";
$checkService = implode(',', $_POST['Services']);
$body .= "Services: ".$checkService." \n";
if($_FILES["file"]["error"]>0)
{
    echo "FILE ERROR";
    die();
}
// $filename = "FOLDER/".$_FILES["file"]["name"];

$info = pathinfo($_FILES['wordfile']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = time().'.'.$ext; 

$target = '../Folder/'.$newname;
$sample='https://paperhelpdesk.com/Folder/'.$newname;

// move file to a folder
if (!move_uploaded_file($_FILES["wordfile"]["tmp_name"], $target)) { 
    //  echo "Sorry, there was an error uploading your file.";
    //  die();
    $target = 'No file attached';
 }

// $body .= "file: ".$target." \n";
$body .=$sample;

if (mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

else{ $sql = 'insert into orderForm(
cust_name,
cust_email,
cust_number,
service_type,
attachment,
countryName,
countryCode,
VisitorIP,
cust_message,
required_NDA
)
values ("'.$_REQUEST['Name'].'","'.$_REQUEST['Email'].'","'.$_REQUEST['Number'].'","'. implode(',',$_REQUEST['Services']).'","'.$sample.'","'.$_REQUEST['ctry'].'","'.$_REQUEST['pc'].'",
"'.$_REQUEST['cip'].'","'.$_REQUEST['Comment'].'","'.$sNDA.'")';

mysqli_query($con,$sql);

mysqli_close($con);
}


$headers = "From: " . $sender . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
# add more fields here if required
## SEND MESSGAE ##

mail( $recipient, $subject, $body,   "From: $sender" ) or die ("Mail could not be sent.");
mail( $subscriber_email, $subscriber_subject, $subscriber_email_data, $headers) or die ("Unable to send email to subscriber");

## SHOW RESULT PAGE ##
header( "Location: $location" );

  }






?>