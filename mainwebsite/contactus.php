
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="robots" content="noindex, nofollow">
<title>Paper help Desk</title>


<?php
$srcurl = "includes/";
$basesurl = "assets/";
$urhere = "homepage";

$style = $_SERVER['HTTP_HOST']; 
$style = $srcurl."style.php"; 
include($style); 
?>

</head>

<body class="home-bg">

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."inner-header.php"; 
include($header); 
?>
<!-- Header End -->
<section class="banner-section order-banner"></section>

<section class="content-section">
  <div class="container">
      <div class="order-form-section trms-wrap">
          <div class="text-center">
              <h2>Get in touch with us</h2>
            </div>
            <div class="order-form-wrap">
              <h3>Contact Information</h3>
                <p>For any queries pertaining to your new assignments, kindly click on <a href="https://Paperhelpdesk.com/freequery">Free Enquiry</a> and get it confirmed by our expert.</p>
                <p>For any queries about an ongoing/completed order, kindly get in touch with your expert through message board by <a href="https://Paperhelpdesk.com/account/login">logging</a> into the order dashboard.</p>
                <p>For any questions related to ordering process, payments, general   terms or other, please feel free to connect to us on Live Chat. Our   support professionals are ready to assist you round the clock.</p>
                <p>For any suggestion/complain, you can mail us at <a href="mailto:feedback@papaperhelpdesk.com">feedback@papaperhelpdesk.com</a></p>
                <p>For any other assistance, you can reach us on <a href="mailto:support@papaperhelpdesk.com">support@papaperhelpdesk.com</a></p>
                <blockquote><em>Kindly add the email ID info@papaperhelpdesk.com in your mail contacts to avoid spamming of our emails regarding your orders.</em></blockquote>  
                
                <div class="bottom-links">
                  <h3>Business Enquiries</h3>
                  <ul class="contact-no">
                      <li><a href="tel:+19"><div class="flag"><img src="<?php echo $basesurl;?>/images/us-flag.png" alt="PenMyPaper"></div> +10000000000</a></li>
                      <li><a href="tel:+44"><div class="flag"><img src="<?php echo $basesurl;?>/images/uk-flag.png" alt="PenMyPaper"></div> +40000000000</a></li>
                      <li><a href="tel:+61"><div class="flag"><img src="<?php echo $basesurl;?>/images/aus-flag.png" alt="PenMyPaper"></div> +60000000000</a></li>
                      <li class="mail"><a href="mailto:support@papaperhelpdesk.com"> support@papaperhelpdesk.com</a></li>
                  </ul>
                  <div class="clearfix"></div>
              </div>            
            </div>
             
            </div>
        </div>
    </div>
</section>
<!-- End -->






<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>


</body>
</html>
