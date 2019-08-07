<?php 


  if ($_SERVER['HTTP_HOST'] == "localhost") {
      $folder_name = ""; $path = 'https://localhost/papaperhelpdeskfull'.$folder_name;
  } else {
    $folder_name = ""; $path = 'https://'.$_SERVER['HTTP_HOST'].''.$folder_name.'/mainwebsite';
  }

  ?>



<noscript>
<div id="jqcheck"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAB60lEQVQ4T2NkwAHePzrxf3ebL1jWp/0oA5egGiM2pVgFQQq31uj/N/ANZvj+8T3D7aNHGDwbTxNvwKtbO/9f3dLHYJ+axfDn5w+GI/NnMRhFtTEISJtjGIIh8Pv39/87ak0ZzCLiGMRUNMCufnLxDMOlrZsY3JtOMrCwsKPowTDg3tGZ/59f2sVgFRvPkO+bAzZgwsZJDEcXzWNQtIlikDGIwG3Az+9v/+9qsGOwTc1h4JeQhhswcfMUhrcP7zEcXzyXwb3xMAMbuwDcEBTTzi7P/s/M8IFB3zccbDPMBSADQODs2sUMzFwyDIah/ZgGfHt/7/+BvmAGm+RsBl4RMawGfHr5jOHowlkMjiUbGDj55MCGwE060Of1X0RZi0Hb2Q4e3eguAElc2X2A4e2DmwwOhVsRBnx6cfH/yXm5DFZxyQxcAoJ4Dfj24T3DsUVzGcwSJjLwSxkygk3ZVmv4X805gkHZRBNXwkQRv3/+NsP1nUsYvFvOMzI+PLXo/73DSxgsouIYOHj5UBRi8wJIwY8vnxlOLV/CIGcewsC4vkDhv01yLoOIoiqG7bgMACn88Owxw8HpvQyMGwqV/vs19TMwQnxDEthYW8DAeGCC3/9XN46TpBGmWEzDkoHx06dP/z9//kyWAby8vAwAcza2SBMOSCMAAAAASUVORK5CYII=" alt="No Script" /> Javascript is disabled. Please enable it for better working experience.</div>
</noscript>

<main class="app-container">





<header class="inr-header">
<a href="/callback" class="call-back"><span>Request a Call Back</span></a>
    <nav class="navbar navbar-default mattblacktabs" id="mainmenu">
      <div class="container"> 
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> 
              <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
            </button>
            <a class="navbar-brand" href="<?php echo $path;?>"><img src="<?php echo $basesurl;?>images/logo-paperhelpdesk.svg" alt="Papaperhelpdesk" /></a> 
        </div>
          
        <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right main-menu">
            <li class="active"><a href="/"><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>
              <ul class="dropdown-menu multi-column columns-3">
                <div class="row">
                  <div class="col-sm-4">
                    <ul class="multi-column-dropdown">
                      <li><a href="<?php echo $path;?>/marketing">Marketing</a></li>
                      <li><a href="<?php echo $path;?>/finance">Finance</a></li>
                      <li><a href="<?php echo $path;?>/economics">Economics</a></li>
                      <li><a href="<?php echo $path;?>/hr">Human Resource</a></li>
                      <li><a href="<?php echo $path;?>/business-strategy">Business Strategy</a></li>
                <li><a href="<?php echo $path;?>/operations-management">Operations Management</a></li>
                <li><a href="<?php echo $path;?>/project-management">Project Management</a></li>
                <li><a href="<?php echo $path;?>/business-management">Business Management</a></li>
                <li><a href="<?php echo $path;?>/supply-chain-management">Supply Chain Management</a></li>
                <li><a href="<?php echo $path;?>/statistics">Statistics</a></li>
                
                <li><a href="<?php echo $path;?>/essays">Essays</a></li>
                <li><a href="<?php echo $path;?>/scholarship-essay">Scholarship Essay</a></li>
                <li><a href="<?php echo $path;?>/narrative-essay">Narrative Essay</a></li>
                <li><a href="<?php echo $path;?>/descriptive-essay">Descriptive Essay</a></li>
                
                
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <ul class="multi-column-dropdown">
                  <li><a href="<?php echo $path;?>/expository-essay">Expository Essay</a></li>
                <li><a href="<?php echo $path;?>/persuasive-essay">Persuasive Essay</a></li>
                <li><a href="<?php echo $path;?>/reflective-essay">Reflective Essay</a></li>
                <li><a href="<?php echo $path;?>/argumentative-essay">Argumentative Essay</a></li>
                
                  <li><a href="<?php echo $path;?>/admissions-essays">Admission Application/Essays</a></li>
                <li><a href="<?php echo $path;?>/term-papers">Term Papers</a></li>
                      <li><a  href="<?php echo $path;?>/essay-writing-service">Essay Writing Service</a></li>
                <li><a  href="<?php echo $path;?>/research-proposal">Research Proposal</a></li>
                <li><a  href="<?php echo $path;?>/research-papers">Research Papers</a></li>
                <li><a  href="<?php echo $path;?>/assignments">Assignments</a></li>
                <li><a  href="<?php echo $path;?>/coursework">Coursework</a></li>
                <li><a  href="<?php echo $path;?>/thesis">Thesis</a></li>
                <li><a  href="<?php echo $path;?>/dissertation-thesis-proposal">Dissertation/Thesis proposal</a></li>
                    </ul>
                  </div>
            <div class="col-sm-4">
                    <ul class="multi-column-dropdown">
                  <li><a  href="<?php echo $path;?>/dissertation">Dissertations</a></li>
                <li><a  href="<?php echo $path;?>/businessplan">Business Plans</a></li>
                <li><a  href="<?php echo $path;?>/powerpoint-presentations">PowerPoint Presentations</a></li>
                      <li><a  href="<?php echo $path;?>/editing-proofreading">Editing and Proofreading</a></li>
                <li><a  href="<?php echo $path;?>/annotated-bibliography">Annotated Bibliography</a></li>
                <li><a  href="<?php echo $path;?>/case-study">Case Study</a></li>
                
                <li><a  href="<?php echo $path;?>/book-movie-review">Book Review/Movie Review</a></li>
                <li><a  href="<?php echo $path;?>/reflective-papers">Reflective Paper</a></li>
                <li><a  href="<?php echo $path;?>/company-industry-analysis">Company/Industry Analysis</a></li>
                <li><a  href="<?php echo $path;?>/article-analysis">Article Analysis</a></li>
                <li><a  href="<?php echo $path;?>/custom-writing-service">Custom Writing Service</a></li>
                <li><a  href="<?php echo $path;?>/assignment-help">Assignment Help</a></li>
                <li><a  href="<?php echo $path;?>/write-my-essay">Write My Essay</a></li>
                    </ul>
                  </div>
                </div>
              </ul>
          </li>
            <!-- <li><a href="/free-paper">Free Papers</a></li>
      <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Free Outline <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="javascript:;">Free Enquiry</a></li>
                    <li><a href="javascript:;">Free Outline</a></li>
              </ul>
          </li> -->
            <li><a href="<?php echo $path;?>/contactus">Contact</a></li>
            <li class="nav-item"> <a class="nav-link" href="tel:+19732615843"><i class="icon-phone"></i>+1-973-261-5843</a> </li>
      
      
                        <!-- <li><a href="javascript:;">Login</a></li> -->
      <!-- <li><a href="javascript:;" class="signup">Sign Up</a></li> -->
      <li class="nav-item login"> <a class="nav-link nav-button" href="javascript:;" onclick="setButtonURL();">Live chat</a> </li>
                  <!-- <li><a href="javascript:;" class="login">Order Now</a></li> -->
                  <li class="nav-item signup clickbutton"> <a class="nav-link nav-button" href="javascript:;">Order Now</a> </li>
          </ul>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
      <!-- /.container-fluid --> 
    </nav>
    <!-- Nav Bar End -->
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
          <div class="">
            <div class="row">
                <div class="ban-form">
                  <form class="cmxform" id="bannerform"  method="POST" action="webpages/floatingFormController.php">
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

<a href="javascript:;" target="_blank" class="whatsapp"><i class="icon-whatsapp1"></i></a>
<a href="javascript:;" class="callusnow"><i class="icon-phone"></i></a>