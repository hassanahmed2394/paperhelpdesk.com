<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/paperhelpdesk/'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/';
  }

  ?>



<noscript>
<div id="jqcheck"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII=" alt="No Script" /> Javascript is disabled. Please enable it for better working experience.</div>
</noscript>

<main class="app-container">




<header id="home">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
    <div class="container"> 
      <!-- Brand --> 
      <a class="navbar-brand" href="<?php echo $path;?>"><img src="<?php echo $basesurl;?>images/logo-paperhelpdesk.svg" alt="PaperHelpDesk" /></a> 
      
      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"> <i class="fas fa-bars"></i> </button>
      
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <div class="top-ratings">
              <div class="rate-box rate-point"><strong>4.8</strong></div>
                <div class="rate-box rate-icon">
                  <span>Excellent Service</span><br clear="all"/>
                    <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-half-empty"></i>
                </div>
            </div>
          </li>
          
          <li class="nav-item"> <a class="nav-link" href="tel:+19732615843"><i class="icon-phone"></i>+1-973-261-5843</a> </li>

          <li class="nav-item login"> <a class="nav-link nav-button" href="javascript:;" onclick="setButtonURL();">Live chat</a> </li>
          <li class="nav-item signup clickbutton"> <a class="nav-link nav-button" href="javascript:;">Order Now</a> </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<!-- Header End -->




<div class="floatbutton">
<!--     <div class="btns_wrap">
            
            <a href="javascript:;" class="chat_wrap" onclick="$zopim.livechat.window.toggle()">
              <span class="icoo"><i class="fa fa-comment"></i></span>
              <span>Chat With Us</span>
            </a>
            <a href="tel:+19252940089" class="call_wrap">
             <span class="icoo"><i class="fa fa-phone"></i></span>
              <span> +1 925 294 0089 </span>
            </a>
          </div> -->


      <div class="clickbutton"><div class="crossplus"> Avail 50% Discount</div></div>
      <div class="banner-form">
        <h3>Chat With Us to <br><Strong>Avail 50% Discount</Strong></h3>
        <div class="banform">
          <div class="container">
            <div class="row">
                <div class="ban-form">
                  <form class="cmxform" id="bannerform"  method="POST" action="webpages/bannerFormController.php">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="fldset">
                          <input id="username" name="fName" minlength="2" type="text" placeholder="Enter your name" required />
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="fldset">
                          <input id="cemail" type="email" name="fEmail" placeholder="Enter email here" required>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="fldset">
                          <input id="phone-coun" name="fNumber" type="text" placeholder="Phone Number" maxlength="10" onkeypress="return isNumberKey(event);" required />
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="fldset">
                          <textarea name="fMessage" id="" rows="7" placeholder="Talk About Your Project"></textarea>
                        </div>
                      </div>
                      
                      <div class="col-lg-12">
                        <div class="fldset">
                          <input name="submit" type="submit" placeholder="Connect With Us" required />
        
                        <input type="hidden" id="flocation" name="flocationURL" value="https://www.www.logodesignlabs.com/" />
                        <input class="" type="hidden" name="fctry" value=" ">
                        <input type="hidden" name="fpc" value="">
                         <input type="hidden" name="pc" value="">
                <input type="hidden" name="cip" value="">
                <input type="hidden" name="ctry" value="">
                      <input type="hidden" name="hiddencapcha" value="">
                      
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
          </div>
        </div>  
    </div>
    </div>


    <!-- <a href="javascript:;" onclick="setButtonURL();" target="_self"><span class="icon-sprite h-chat-icon"></span> Live Chat</a> -->

<a href="javascript:;" onclick="setButtonURL();"  target="_blank" class="whatsapp"><i class="icon-chat"></i></a>
<a href="tel:+442033554135" class="callusnow"><i class="icon-phone"></i></a>