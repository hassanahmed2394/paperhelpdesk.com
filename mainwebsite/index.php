
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
$header = $srcurl."header.php"; 
include($header); 
?>

<section class="banner-section main-banner">
    <div class="container">
      <div class="row">
          <div class="col-lg-8 col-sm-7">
              <div class="banner-caption">
                    <h1>Let your paper be in expert hands! Score high with a reliable <span>paper writing service</span></h1>
                    <h4>Academic success is on its way with PenMyPaper at your help</h4>
          <h4>Enjoy flat 20% discount on writing help with the code <strong>PPFEST20</strong></h4>
                </div>
                <div class="banner-category">
                  <div class="row">
                      <div class="col-sm-9">
                          <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-heart"></span></div> Immediate help with a fresh writing approach. Place your <a href="/order/neworder">Order now</a></li>
                                </ul>
                            </div>
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-cog"></span></div> Know your paper structure before paying for the order. Get a <a href="/freeoutline">free outline</a></li>
                                </ul>
                            </div>
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-clock"></span></div> Get conversant with our quality before payment. Download a <a href="/free-paper">free paper</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="graphics"><img src="<?php echo $basesurl;?>images/banner-graphics.png" alt="PenMyPaper"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-5">
              <div class="form-section">
          <form action="/order/neworder" method="post" name="frmcalculate" autocomplete="off" id="frmcalculate">
            <input type="hidden" name="apply" id="apply" value="1" />
            <input type="hidden" name="refhome" id="refhome" value="y" />
            <h3>Calculate Price</h3>
            <label class="select-box">
              <select name="paper_type" id="paper_type" class="form-control dropdown" tabindex="1">
                <option value="">Select Paper Type *</option>
                <option value="Annotated Bibliography">Annotated Bibliography</option>
                <option value="Article review">Article review</option>
                <option value="Article Writing">Article Writing</option>
                <option value="Assignment">Assignment</option>
                <option value="Case Study">Case Study</option>
                <option value="Course Work">Course Work</option>
                <option value="Dissertation">Dissertation</option>
                <option value="Dissertation Chapter - Abstract">Dissertation Chapter - Abstract</option>
                <option value="Dissertation Chapter - Conclusion">Dissertation Chapter - Conclusion</option>
                <option value="Dissertation Chapter - Findings & Analysis">Dissertation Chapter - Findings & Analysis</option>
                <option value="Dissertation Chapter - Introduction">Dissertation Chapter - Introduction</option>
                <option value="Dissertation Chapter - Literature Review">Dissertation Chapter - Literature Review</option>
                <option value="Dissertation Chapter - Research Methodology">Dissertation Chapter - Research Methodology</option>
                <option value="Dissertation Proposal">Dissertation Proposal</option>
                <option value="Essay">Essay</option>
                <option value="Personal Statement">Personal Statement</option>
                <option value="PPT with speaker notes">PPT with speaker notes</option>
                <option value="PPT without speaker notes">PPT without speaker notes</option>
                <option value="Report">Report</option>
                <option value="Research Paper">Research Paper</option>
                <option value="Research Proposal">Research Proposal</option>
                <option value="Term Paper">Term Paper</option>
                <option value="Thesis">Thesis</option>
              </select>
            </label>
            
            <label class="select-box">
              <select name="subject" id="subject" class="form-control dropdown" tabindex="2">
                <option value="">Select Subject/Domain *</option>
                <option value="MARKETING">MARKETING</option>
                <option value="FINANCE AND ACCOUNTING">FINANCE AND ACCOUNTING</option>
                <option value="CORPORATE FINANCE">CORPORATE FINANCE</option>
                <option value="BUSINESS STRATEGY">BUSINESS STRATEGY</option>
                <option value="INDUSTRY ANALYSIS">INDUSTRY ANALYSIS</option>
                <option value="COMPANY ANALYSIS">COMPANY ANALYSIS</option>
                <option value="HUMAN RESOURCE">HUMAN RESOURCE</option>
                <option value="GENERAL MANAGEMENT">GENERAL MANAGEMENT</option>
                <option value="SUPPLY CHAIN MANAGEMENT">SUPPLY CHAIN MANAGEMENT</option>
                <option value="OPERATIONS MANAGEMENT">OPERATIONS MANAGEMENT</option>
                <option value="PROJECT MANAGEMENT">PROJECT MANAGEMENT</option>
                <option value="E-COMMERCE">E-COMMERCE</option>
                <option value="ECONOMICS">ECONOMICS</option>
                <option value="MARKETING PLAN">MARKETING PLAN</option>
                <option value="BUSINESS PLAN">BUSINESS PLAN</option>
                <option value="MANAGEMENT CASE STUDY">MANAGEMENT CASE STUDY</option>
                <option value="INTERNATIONAL BUSINESS">INTERNATIONAL BUSINESS</option>
              </select>
            </label>
            
            
            <label class="select-box">
              <select name="level" id="level"  class="form-control dropdown" tabindex="3">
                <option value="" >Academic Level *</option>
                <option value="High School">High School</option>
                <option value="Undergraduate">Undergraduate</option>
                <option value="Masters">Masters</option>
                <option value="Phd">Phd</option>
              </select>
            </label>
            
            <label class="select-box">
              <select name="urgency" id="urgency" class="form-control dropdown"  tabindex="4">
                <option value="">Urgency *</option>
                                                      <option value="1">24 HOURS</option>
                                                                        <option value="2">48 HOURS</option>
                                                                        <option value="3">3 DAYS</option>
                                                                        <option value="4">4 DAYS</option>
                                                                        <option value="5">5 DAYS</option>
                                                                        <option value="6">6 DAYS</option>
                                                                        <option value="7">7 DAYS</option>
                                                                        <option value="8">8 DAYS</option>
                                                                        <option value="9">9 DAYS</option>
                                                                        <option value="10">10 DAYS</option>
                                                                        <option value="11">11 DAYS</option>
                                                                        <option value="12">12 DAYS</option>
                                                                        <option value="13">13 DAYS</option>
                                                                        <option value="14">14 DAYS</option>
                                                                        <option value="15">15 DAYS</option>
                                                                        <option value="16">16 DAYS</option>
                                                                        <option value="17">17 DAYS & ABOVE</option>
                                                </select>
            </label>
            
            <label class="select-box">
              <select name="num_page" id="num_page" class="form-control dropdown"  tabindex="5">
                <option value="">No. of Pages * (1 page=250 words)</option>
              </select>
            </label>
            <input type="hidden" name="word_count" id="wordcount" placeholder="Word Count" value="" readonly="readonly">
            <label>
              <input type="text" name="discount_code" id="discountcode" onclick="applycoupon();" class="form-control" placeholder="Discount code ( If any )"  tabindex="6">
              <span id="dcerror" style="color:#F00;"></span>
            </label>
            
            <div class="form-control discount-price">
              <h5>Discount</h5>
              <div class="price-wrap"><span id="discount">-</span></div>
            </div>
            
            <div class="form-control total-price">
              <h5><strong>Total Price</strong></h5>
              <div class="price-wrap"><span id="netprice">$00</span></div>
            </div>     
            
            <input type="submit" name="submitbutton" id="submitbutton" value="Order Now" class="form-control ordr-btn"> 
                    </form>         
                </div>
                  
            </div>
        </div>
    </div>
</section>
<!-- Banner End -->

<section class="count-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="count-box">
                  <div class="box-item">
                      <div class="box-icon"><span class="lnr lnr-user"></span></div> <span id="reg-users-numbers">3246</span><br><small>Registered users</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="count-box">
                  <div class="box-item">
                      <div class="box-icon"><span class="lnr lnr-file-empty"></span></div> <span>31054</span><br><small>Downloaded papers</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="count-box">
                  <div class="box-item">
                      <div class="box-icon"><span class="lnr lnr-cloud-download"></span></div> <span>350</span><br><small>Experts on Our Team</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Count Section End -->

<section class="free-feature-section">
     <div class="banner">
        <div class="waveWrapper waveAnimation">
          <div class="waveWrapperInner bgTop">
            <div class="wave waveTop" style="background-image:url(<?php echo $basesurl;?>images/wave-top.png);"></div>
          </div>
          <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url(<?php echo $basesurl;?>images/wave-bot.png);"></div>
          </div>
          <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url(<?php echo $basesurl;?>images/wave-bot.png);"></div>
          </div>
        </div>
    </div>
  <div class="container">
      <div class="text-center"><h3>Free features</h3></div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="feature-box">
                  <div class="feature-tittle">
                      <div class="feature-icon"><img src="<?php echo $basesurl;?>images/icon-1.png" alt="PenMyPaper"></div> <h3>High Quality for <br><span>Affordable Prices</span></h3>
                    </div>
                    <p>Buy optimum papers at most economical rates. Our quality doesn’t ask for big investments.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="feature-box">
                  <div class="feature-tittle">
                      <div class="feature-icon"><img src="<?php echo $basesurl;?>images/icon-2.png" alt="PenMyPaper"></div> <h3>Free Revisions <br><span>Unlimited</span></h3>
                    </div>
                    <p>Get unlimited revisions, FREE, after submission. Send your requirements and lay back.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="feature-box">
                  <div class="feature-tittle">
                      <div class="feature-icon"><img src="<?php echo $basesurl;?>images/icon-3.png" alt="PenMyPaper"></div> <h3>Timely Delivery <br><span>Guaranteed </span></h3>
                    </div>
                    <p>Never miss out a deadline. We handover the final copy, long before the clock strikes.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </div>
            </div>
        </div>
        <div class="text-center feature-txt">
          <p>Success has hugged us for our exclusive amenities. We guarantee for quality in your papers, elite customization, on-time delivery, and round-the-clock consultation.</p>
        </div>
    </div>
</section>
<!-- Feature Section End -->

<section class="why-choose-section">
  <div class="container">
      <h3>Why choose us?</h3>
        <small>Our conduct is our identity</small>
        
        <div class="row sticky-height">
          <div class="col-sm-7">
              <div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <span class="lnr lnr-question-circle"></span> Are there odds of plagiarism in completed order? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          <p>All our specialists perform thorough research, before writing, and include only original contents. Our writers have zero-tolerance against the breach of copyright, and write paper with detail citation. We check the final papers in Turnitin.com to guarantee <a href="/no-plagiarism">no plagiarism</a> against the open internet sources, papers stored in web-databases, and the copies that are indexed by Turnitin itself. Please note that we offer the plagiarism report, as well.</p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <span class="lnr lnr-question-circle"></span> How shall I check the progress of my order?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          <p>We understand that you may want to track your order or communicate with the writer, personally. Here’s a special messaging system on your order account page through which you can maintain a closer contact with the writer. Hereby, you can share feedbacks on each stage and can be assure whether the fragments are in full correspondence to your requirements, before the expert proceeds for the next. Once the order is complete, you will receive a notification email, containing the link to your personal order page. As it is encrypted with password protection, you will have to insert the credentials for logging in and then download the final file.</p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <span class="lnr lnr-question-circle"></span> Is there a secure payment procedure? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          <p>PenMyPaper liaises with PayPal to ensure collateral transactions for students. This online payment system is legally registered and sees through a thousands of money transfer operations, daily, without a fail. Once you fill in the <a href="/order/neworder">order form</a> and set up your mind, press "Continue". You will be redirected to the transaction site, containing reliable hints for easy payment. Within a couple of minutes from receiving funds, we start working on your assignment. </p>
                        </div>
                      </div>
                    </div>                    
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          <span class="lnr lnr-question-circle"></span> What if I am not satisfied with the custom paper? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          <p>We prioritize customer satisfaction and thus, prepare high-quality papers. Chances are less that you will dissatisfied, but still if you have some confusion, feel free to communicate with us. We request you to speak specifically of the modifications, while the order is still in progress. Free amendments are conducted if the writer has violated any instruction. Your entreaty for re-writing or editing are liable to charges if the intermediate time has crossed 180 days or if the comments varies with the initial instructions. Read our <a href="/revision-refund-policy">revision and refund policies</a> to understand which of the appeals are entertained. </p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          <span class="lnr lnr-question-circle"></span> What if I need consultation in an unusual hour? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                          <p>We take pride in our customer-centric service. Be it an eventful morning or late-night hours, you may need some assistance to write, at any time of the day. Probability says, some pupils ask for free outlines or sample services in unusual hours. Some even search for <a href="/contactus">customer support</a> after losing the login credentials. However, our consultants remain available 24*7 for 365 days just to guide you with the finest solutions for every writing issue.  </p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          <span class="lnr lnr-question-circle"></span> Is my personal data safe with you? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                          <p>Privacy is a big concern for students when they are hiring someone to write paper. While registering in our website, we ask to provide your name, email address, and phone number. Well, you must know that all the credentials, submitted to PenMyPaper academic writing service, remain well-concealed with 1024-bit encryption and SSL technology.  Besides, the data remain obscured to the search engines. We use this set of information only for a one-to-one communication. </p>
                        </div>
                      </div>
                    </div>
                    <!---->
                  </div>
            </div>
            <div class="col-sm-5">
              <div class="increase-height"><div class="right-graphics"><img src="<?php echo $basesurl;?>images/why-choose-graphics.png" alt="PenMyPaper"></div></div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Section End -->

<section class="student-tips-section">
  <div class="container">
      <div class="text-center">
            <h3>Smart tips for <span>efficient writing</span></h3>
            <small>Explore our catalog of blogs, articles, and papers</small>
        </div>
        
        <div class="guide-wrap desktop-view">
            <div class="row">
                <div class="col-sm-4">
                    <div class="guide-item">
                      <div class="guide-tittle"><h4>Advanced guide to citation </h4></div>
                        <div class="gude-links">
                            <ul>
                                <li><a href="/referencing-styles/apa-referencing-style">APA Referencing Formatting Style Guide</a></li>
                                <li><a href="/referencing-styles/harvard-referencing-style">Harvard Referencing Style Guide</a></li>
                                <li><a href="/referencing-styles/mla-referencing-style">MLA Style Formatting</a></li>
                                <li><a href="/referencing-styles/chicago-referencing-style">Chicago Referencing Formatting Style</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-sm-4 large-box">
                    <div class="guide-item">
                      <div class="guide-tittle"><h4>Read Contemporary Blogs</h4></div>
                        <div class="gude-links">
                            <ul>
                                <li><a href="https://penmypaper.com/blog/100-ideas-for-your-research-paper-topics/">100 Ideas for Your Research Paper Topics of 2019</a></li>
                                <li><a href="https://penmypaper.com/blog/how-to-write-a-research-paper/">How to Write a Winning Research Paper Worth of A+ Grades</a></li>
                                <li><a href="https://penmypaper.com/blog/essay-topics/">65 Brilliant College Essay Topics That Will Never Be Obsolete</a></li>
                                <li><a href="https://penmypaper.com/blog/how-to-write-a-flawless-research-methodology/">How to write a flawless Research Methodology</a></li>
                                <li><a href="https://penmypaper.com/blog/research-paper-outline-example/">Research Paper Outline Example: Create Your Own Today!</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="col-sm-4">
                    <div class="guide-item">
                      <div class="guide-tittle"><h4>Novel Educational Ideas</h4></div>
                        <div class="gude-links">
                            <ul>
                                <li><a href="/knowledge-base/apple-organizational-structure">Organizational Structure of Apple</a></li>
                                <li><a href="/knowledge-base/zara-business-model">Business Model of Zara</a></li>
                                <li><a href="/knowledge-base/tesco-competitive-advantage-analysis">Analysis of Competitive Strategies of Tesco</a></li>
                                <li><a href="/knowledge-base/wal-mart-business-model">Business Model of Wal-Mart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- -->
            </div>
        </div>
    <div class="guide-wrap mobile-view">
          <div class="owl-carousel" id="owl2">
              <div class="item">
                  <div class="guide-item">
                      <div class="guide-tittle"><h4>Advanced guide to citation</h4></div>
                        <div class="gude-links">
                            <ul>
                                <li><a href="/referencing-styles/apa-referencing-style">APA Referencing Formatting Style Guide</a></li>
                                <li><a href="/referencing-styles/harvard-referencing-style">Harvard Referencing Style Guide</a></li>
                                <li><a href="/referencing-styles/mla-referencing-style">MLA Style Formatting</a></li>
                                <li><a href="/referencing-styles/chicago-referencing-style">Chicago Referencing Formatting Style</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="item">
                  <div class="guide-item">
                      <div class="guide-tittle"><h4>Read Contemporary Blogs</h4></div>
                        <div class="gude-links">
                            <ul>
                                <li><a href="https://penmypaper.com/blog/100-ideas-for-your-research-paper-topics/">100 Ideas for Your Research Paper Topics of 2019</a></li>
                                <li><a href="https://penmypaper.com/blog/how-to-write-a-research-paper/">How to Write a Winning Research Paper Worth of A+ Grades</a></li>
                                <li><a href="https://penmypaper.com/blog/essay-topics/">65 Brilliant College Essay Topics That Will Never Be Obsolete</a></li>
                                <li><a href="https://penmypaper.com/blog/how-to-write-a-flawless-research-methodology/">How to write a flawless Research Methodology</a></li>
                                <li><a href="https://penmypaper.com/blog/research-paper-outline-example/">Research Paper Outline Example: Create Your Own Today!</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!---->
                <div class="item">
                  <div class="guide-item">
                      <div class="guide-tittle"><h4>Novel Educational Ideas</h4></div>
                        <div class="gude-links">
                            <ul>
                                <li><a href="/knowledge-base/apple-organizational-structure">Organizational Structure of Apple</a></li>
                                <li><a href="/knowledge-base/zara-business-model">Business Model of Zara</a></li>
                                <li><a href="/knowledge-base/tesco-competitive-advantage-analysis">Analysis of Competitive Strategies of Tesco</a></li>
                                <li><a href="/knowledge-base/wal-mart-business-model">Business Model of Wal-Mart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!---->
            </div>
        </div>
    </div>
</section>
<!-- Student Tips Section End -->
<section class="support-section">
  <div class="container">
      <ul>
          <li>
              <div class="support-text">
                  <h2>Worried about your academic assignments?</h2>
                  <span>Our dedicated team offers 24*7 quality customization</span>
                </div>
            </li>
            <li><a href="/order/neworder" class="btn ordr-btn">Order Now</a></li>
        </ul>
    </div>
</section>
<div id="myModal" class="modal fade coupone-code" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      
      <div class="modal-body">
        <button type="button" class="btn btn-default close-btn" title="Close" data-dismiss="modal"><span class="lnr lnr-cross"></span></button>
        <img src="<?php echo $basesurl;?>images/coupone-code.jpg" alt="PenMyPaper">
      </div>
      <div class="modal-footer">
        <a href="/order/neworder" class="btn btn-default">Order Now</a>
      </div>
    </div>

  </div>
</div>



<section class="content-section-main">
  <div class="container">
      <div class="row">
          <div class="col-sm-6">
              <div class="content-wrap">
              <h2>"Who will write my paper for me?"<br>Our experts are just a click away!</h2>
                <p>In many instances, pupils, just like you, strive to write paper retaining high-quality standard. Where some face challenges in interpreting the central theme or establishing the paper proposal, others are muddling up with outline and format. A smart solution is to hire a professional for consultation and who works better than PenMyPaper experts! </p>
          <p>&nbsp;</p>
          <p class="qte">PenMyPaper is where we Use the Pen as a Sword.</p>
          <p>&nbsp;</p>
                <h3>Handpicked after gagging and gauging</h3>
        
                <p>PenMyPaper has topped the chart in recent years, offering exclusive custom term paper writing service. The entire credit goes to our adept writers and proofreaders, whom we pick from the mass after a lot of assessment and evaluation. Further, we train the team, under the supervision of an in-charge with a motive to build an utmost efficient squad of writers. Our professional team is critically acclaimed to be superior in every aspect.</p> 
        <div class="content-img">
          <img src="<?php echo $basesurl;?>images/new-hm-image2.png" alt="write my essay" />
        </div>
        
        <h3>Each one is a subject matter expert</h3> 
        <p>Our range of scholastic writing service entails paper writing, custom report preparation, case studies and many more. Therefore, we employ subject matter experts, who are specialists in their own fields of interests and are capable to write paper in detail. Each of our pros possesses the expertise and knows how to write. With a plethora of knowledge and ample years of experiences, they write papers of optimum quality, allowing custom provisions.</p>
        <h3>All are in tangent to academic standards </h3> 
        <p>For years now, we are a leading paper writing service provider and the sole reason is our highly-qualified consultants. Being scholars from top business academies, our professional writers have a prior idea on how to write paper following university guidelines. Retaining every rubric and academic standards, they write paper of supreme quality. In other words, the authors, at PenMyPaper, write custom copies from scratch.</p>
        <h3>Possess ideas on every bit of composition </h3>
        <p>A well-documented custom created paper is what a student expects and that is possible, only if the writer is a veteran. With PenMyPaper, at your service, forget about the stresses and panics. Our writers take care of the custom paper, bit by bit, from an outline, development of the thesis, discussion, to formatting the references. Importance of referencing is not new for us. We know what values it contains and therefore, include every possible source.</p>
        <p>No matter whether it has big or small contribution in your paper, our experts list it maintaining the specific format. They are well-accustomed with all the referencing styles viz. APA, MLA, Harvard, Chicago, and others. Later, they proofread the papers using Turnitin and other online editing tools to write a well-structured dissertation studded with credible sources.</p>

                </div>
            </div>
            <div class="col-sm-6">
              <div class="content-wrap pad-left">
              <h2>Efficient customized support: We handle every possible niche</h2>
          
        <p>Standing today, you can find the internet consumed with mushroom-like writing service providers, but, not all of them are efficient enough. Unlike the contemporaries, PenMyPaper offers every possible paper writing assistance, be it writing paper, essay or case study. Check what makes us stand ahead in the crowd. </p>
          
                <div class="content-img"><img src="<?php echo $basesurl;?>images/content-img.jpg" alt="PenMyPaper"></div>
        <h3>Hassle-free research paper help  </h3>
        
        <p>Is your paper submission due soon? Find us and we will provide the entire paper writing service, till handing over the final research paper. Here’s how we operate –</p>
        <ul class="bull">
          <li>Starts with comprehensive research on the selected topic</li>
          <li>The expert always outline the structure and then write paper</li>
          <li>We will hone the abstract, introduction and conclusion</li>
          <li>An expert will work on the Title page, a vital section</li>
          <li>Crediting sources, the Bibliography part will be done cautiously </li>
        </ul>
        <p>Our vetted writers work vigorously just to ensure the final dissertation meets the utmost quality standard, preserving all your requirements and demands.   </p>
        <h3>Custom and quality essay assistance</h3>
        <p>Some students, just like you, hesitate in seeking writing assistance and one big reason is quality. At PenMyPaper, we assure excellent service and good grades. So, if you need help to write your custom essay assignment, today, get in touch with our service support staffs. Have a view of our working principle – </p>
        <ul class="bull">
          <li>You can consult about the topic selection</li>
          <li>Next, we will investigate the subject line</li>
          <li>The outline and the central argument will be written</li>
          <li>A veteran will match the essay type with writing style</li>
          <li>It will undergo necessary editing before submission </li>
        </ul>
        <h3>Real-time valuable case-study support</h3>
        <p>Are you one among those who muddle up if asked to write a case-study? Well, you are in luck, certainly! We perform analytical case-study for pupils across the globe and builds up the final report, exceptionally, worthy of submission. Know how you will be benefitted – </p>
        <ul class="bull">
          <li>First, we will choose a suitable brand name for your case study</li> 
          <li>You can suggest one as we have provision for custom help</li>
          <li>Our professional will draw detailed information about the firm</li>
          <li>The gen and data will then be assessed and evaluated for analysis</li>
          <li>We write the report maintaining compliance with guidelines</li>
        </ul>
        
                </div>
            </div>
        </div>
    </div>
</section>







<section class="feedback-section">
  <div class="container">
      <div class="text-center">
          <h2>Customer <span>Feedback</span></h2>
            <small>Your opinion is the keystone of our improvement</small>
        </div>
      <div class="owl-carousel" id="owl1">
          <div class="item">
              <div class="feedback-wrap">
                    <p>Though I had thought of seeking a custom writing service, I couldn’t afford it before. But now with penmypaper, I no more worry about who will write paper for me. It is quite cheaper and offers lucrative deals. Now, my every term paper is taken care by its team of pros and I get enough time to revise my lessons. Must call them to write your thesis!</p>
                    <small> </small>
                </div>
                <div class="client-info">
                  <div class="client-img"><img src="<?php echo $basesurl;?>images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Jonas</h4><small> </small></div>
                </div>
            </div>
            <div class="item">
              <div class="feedback-wrap">
                    <p>Excellent work by the pro writers! Penmypaper has the perfect team of adept authors and proofreaders, who write a term paper for students across the globe. I asked them to write my project and was delighted on getting the custom copy in my hand. I graduated with the highest marks in my thesis paper. Great service. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                  <div class="client-img"><img src="<?php echo $basesurl;?>images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>David</h4><small> </small></div>
                </div>
            </div>
            <div class="item">
              <div class="feedback-wrap">
                    <p>I want to thank the writers of penmypaper for helping me with the custom paper writing. I hired its proficient team to write my paper and the decision turned out to be amazing. They write paper of great quality in cheaper costs. Indeed, the writers did a great job! Next time onwards there will never be a second thought whenever I will be asked to write my university projects. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                  <div class="client-img"><img src="<?php echo $basesurl;?>images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Arnold</h4><small> </small></div>
                </div>
            </div>
      <div class="item">
              <div class="feedback-wrap">
                    <p>I must say, at PenMyPaper, every term paper writer is a pro! They write paper with an excellent flow of writing and deliver it a whole day before my submission date, providing enough time to read my paper thoroughly. I am happy to finish off my grad days with an A at my final semester. Highly recommend the service.</p>
                    <small> </small>
                </div>
                <div class="client-info">
                  <div class="client-img"><img src="<?php echo $basesurl;?>images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Elina</h4><small> </small></div>
                </div>
            </div>
      <div class="item">
              <div class="feedback-wrap">
                    <p>A few days back, I required someone to write paper on Finance within a deadline of 10 days. On approaching penmypaper, it left no stone unturned to get my paper written, before the said date. I am quite happy with their prompt service and highly recommend to others, who are in a similar circumstance as I was. Here, professionals write papers with utmost expertise. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                  <div class="client-img"><img src="<?php echo $basesurl;?>images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Parvej</h4><small> </small></div>
                </div>
            </div>
      <div class="item">
              <div class="feedback-wrap">
                    <p>Though selected as the captain of my business school football team, I used to miss all the training sessions for finishing the paper outlining and writing within the deadline. One of my friends said that Pen my paper write paper for college-goers. On seeking their service, my paper has been written in the best possible way. If you need someone to write your paper, choose PMP</p>
                    <small> </small>
                </div>
                <div class="client-info">
                  <div class="client-img"><img src="<?php echo $basesurl;?>images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Daniel</h4><small> </small></div>
                </div>
            </div>
      <div class="item">
              <div class="feedback-wrap">
                    <p>My custom dissertation had everything I demanded. Every paper writer at PenMyPaper are extremely helpful and write good quality papers. The writer prepared the best outline for my paper and drafted it with a smooth flow. My professors were extremely satisfied and I received an A+ in my Accountancy paper. Happy with your service!</p>
                    <small> </small>
                </div>
                <div class="client-info">
                  <div class="client-img"><img src="<?php echo $basesurl;?>images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Anindita</h4><small> </small></div>
                </div>
            </div>
      <div class="item">
              <div class="feedback-wrap">
                    <p>Being a part-time worker, it was difficult to manage my paper writing and job simultaneously. I heard that penmypaper.com offers writing service and hired them to write my thesis. Initially, I was scared about the security of my identity and the quality of the composition. Eventually, it eased off as they have written and delivered the finest custom made paper. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                  <div class="client-img"><img src="<?php echo $basesurl;?>images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Rishika</h4><small> </small></div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>


</body>
</html>
