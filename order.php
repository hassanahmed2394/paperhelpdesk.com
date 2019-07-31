
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

<body>

<?php
$header = $_SERVER['HTTP_HOST']; 
$header = $srcurl."header.php"; 
include($header); 
?>





<div class="mt-4">
<?php
$order = $_SERVER['HTTP_HOST']; 
$order = $srcurl."order-form.php"; 
include($order); 
?>

</div>
<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>


</body>
</html>
