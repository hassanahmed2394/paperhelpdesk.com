
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
<!-- Header End -->

<section class="banner-section main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-sm-7">
                <div class="banner-caption">
                    <h1>Bank on an entrusted assignment help <span>Your contentment is our concern</span></h1>
                    <h4>Join the community and rank higher using PenMyPaper </h4>
                    <h4>Enter the code <strong>PPFEST20</strong> for a flat 20% discount on your assignments </h4>
                </div>
                <div class="banner-category">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-heart"></span></div> Let specialists handle your assignment. Place your <a href="javascript:;">Order now</a></li>
                                </ul>
                            </div>
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-cog"></span></div> Know the format before order payment. Ask for a  <a href="javascript:;">free outline</a></li>
                                </ul>
                            </div>
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-clock"></span></div> Pay only if you like the quality standard. Download  <a href="javascript:;">free paper</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="graphics"><img src="<?php echo $basesurl;?>/images/banner-graphics.png" alt="PenMyPaper"></div>
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
                                <option value="2">48 HOURS</option>
                                <option>DAYS</option>
                                <option value="4">4 DAYS</option>
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
            <div class="wave waveTop" style="background-image:url(/images/wave-top.png);"></div>
          </div>
          <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url(/images/wave-bot.png);"></div>
          </div>
          <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url(/images/wave-bot.png);"></div>
          </div>
        </div>
    </div>
    <div class="container">
        <div class="text-center"><h3>Free features</h3></div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-box">
                    <div class="feature-tittle">
                        <div class="feature-icon"><img src="<?php echo $basesurl;?>/images/icon-1.png" alt="PenMyPaper"></div> <h3>100% Original  <br><span>Contents</span></h3>
                    </div>
                    <p>No breach of copyright as we pride in being bona fide and authenticated </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-box">
                    <div class="feature-tittle">
                        <div class="feature-icon"><img src="<?php echo $basesurl;?>/images/icon-2.png" alt="PenMyPaper"></div> <h3>Quick Complaint   <br><span>Resolution</span></h3>
                    </div>
                    <p>Voice your issue and let our customer care executives resolve in a blink </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-box">
                    <div class="feature-tittle">
                        <div class="feature-icon"><img src="<?php echo $basesurl;?>/images/icon-3.png" alt="PenMyPaper"></div> <h3>Zero-Cost  <br><span>Live Support </span></h3>
                    </div>
                    <p>All your queries will be answered immediately over Live Chat Communication</p>
                </div>
            </div>
        </div>
        <div class="text-center feature-txt">
            <p>Our unparalleled features not only guarantee high-quality delivered on time but also adheres by the academic standards and rules. Otherwise, get your money back.</p>
        </div>
    </div>
</section>
<!-- Feature Section End -->

<section class="why-choose-section">
    <div class="container">
        <h3>Why choose us?</h3>
        <small>Designed for ultimate writing succor</small>
        
        <div class="row sticky-height">
            <div class="row sticky-height">
            <div class="col-sm-7">
                <div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <span class="lnr lnr-question-circle"></span> Why should I count on PenMyPaper’s assignment help?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                           <p>PenMyPaper is combination of quality and authenticity, catering across the globe for a decade now. Our exclusive facilities and customer-centric vision has taken us to the zenith of success, today. If you have been looking for a proficient service provider then you are just at the right place to be. We apprehend your needs and toil hard to fulfill them, within the promised hours. In addition, our charges are economic with high quality-standard of our custom academic assignments. So, count on us if you wish for guaranteed satisfaction.  </p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <span class="lnr lnr-question-circle"></span> How can I send my case-study materials/reference articles? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          <p>Among  many amenities from PenMyPaper, possibly, the best one is custom provisions. We  accept your references, cultivate them, and include those that fit in  perfectly. You can upload your reference materials and contents while filling  up the <a href="javascript:;">basic  order form</a>. Follow these simple steps, and there you are – </p>
                            <ul class="bull">
                              <li>Login/register to our website </li>
                              <li>Go to the &ldquo;Order Now&rdquo; section </li>
                              <li>Insert credentials and reference materials (PDF,  Doc, Excel, etc.) </li>
                              <li>Make the payment </li>
                            </ul>
                            <p><em>Note: The writer, in charge, starts working  within a couple of minutes from receiving funds.</em></p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <span class="lnr lnr-question-circle"></span> What if I forget my login password?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          <p>At the beginning  of your journey with PenMyPaper, you will be asked to submit some important  credentials for registering your identity. Enter your name, email address,  cellphone number, country code, and create a strong password of minimum 6  characters. Later, if you forget this password, go to the Login page and there,  you will find an option labeled as &ldquo;<a href="javascript:;">forgot your password?</a>&rdquo; Click  on the link and you will be redirected to the further procedure. Registering with  PenMyPaper is like a breeze.</p>
                        </div>
                      </div>
                    </div>                    
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          <span class="lnr lnr-question-circle"></span> How about if I just need help with the assignment structure? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          <p>You will get that free! Though assignment writing is one of our most sought-after services, there’re are some more exclusive amenities, as well. We are aware of the various other needs that a student can have, and therefore, kept the provision of getting free outlines. Yes, we are pleased to say that our experts prepare an anatomy of your assignment and lend it, before you make the payment and confirm the order. Past involvements with the other customers indicate that you will certainly end up being happy. </p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          <span class="lnr lnr-question-circle"></span> Can I pay after receiving the final custom assignment?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                          <p>We  hereby regret to offer you such a service in order to avoid fraudulent  activities. As per the <a href="javascript:;">terms  and conditions</a> of PenMyPaper, client needs to complete the full  payment procedure while placing the order. And keeping in mind your custom  choices, we start to write assignment, as soon as we are notified of your successful  transaction. Don’t forget to avail the running discounts. If you are unaware of  the current coupon code, we request you to visit the home page. Hope you will  end up being a happy member of this community.</p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          <span class="lnr lnr-question-circle"></span> Are you a socially responsible framework?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                         <p>Our  authenticity speaks of our social responsibility. We believe in client’s  perception and work on the feedbacks for recurring improvement. Besides, we  dedicatedly adhere to every possible social tenets and morals. PenMyPaper  prefers to stay away from controversial topics and avoids them in complete  sense. If your order indicates a breach of any social values, it will be  automatically cancelled.  Your payment  will be refunded in a few working days. Read our <a href="javascript:;">Refund Policies</a> for  more details.</p>
                        </div>
                      </div>
                    </div>
                    <!---->
                  </div>
            </div>
            <div class="col-sm-5">
                <div class="increase-height"><div class="right-graphics"><img src="<?php echo $basesurl;?>/images/why-choose-graphics.png" alt="PenMyPaper"></div></div>
            </div>
        </div>
    </div>
</section>
<!-- Why Choose Section End -->

<section class="student-tips-section">
    <div class="container">
        <div class="text-center">
             <h3>Cool tips for successful  <span>assignments</span></h3>
            <small>High-quality papers will aid you in mastering skills</small>
        </div>
        
        <div class="guide-wrap desktop-view">
            <div class="row">
                <div class="col-sm-4">
                    <div class="guide-item">
                        <div class="guide-tittle"><h4>Advanced guide to citation </h4></div>
                        <div class="gude-links">
                            <ul>
                                <li><a href="javascript:;">APA Referencing Formatting Style Guide</a></li>
                                <li><a href="javascript:;">Harvard Referencing Style Guide</a></li>
                                <li><a href="javascript:;">MLA Style Formatting</a></li>
                                <li><a href="javascript:;">Chicago Referencing Formatting Style</a></li>
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
                                <li><a href="javascript:;">100 Ideas for Your Research Paper Topics of 2019</a></li>
                                <li><a href="javascript:;">How to Write a Winning Research Paper Worth of A+ Grades</a></li>
                                <li><a href="javascript:;">65 Brilliant College Essay Topics That Will Never Be Obsolete</a></li>
                                <li><a href="javascript:;">How to write a flawless Research Methodology</a></li>
                                <li><a href="javascript:;">Research Paper Outline Example: Create Your Own Today!</a></li>
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
                                <li><a href="javascript:;">Organizational Structure of Apple</a></li>
                                <li><a href="javascript:;">Business Model of Zara</a></li>
                                <li><a href="javascript:;">Analysis of Competitive Strategies of Tesco</a></li>
                                <li><a href="javascript:;">Business Model of Wal-Mart</a></li>
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
                                <li><a href="javascript:;">APA Referencing Formatting Style Guide</a></li>
                                <li><a href="javascript:;">Harvard Referencing Style Guide</a></li>
                                <li><a href="javascript:;">MLA Style Formatting</a></li>
                                <li><a href="javascript:;">Chicago Referencing Formatting Style</a></li>
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
                                <li><a href="javascript:;">100 Ideas for Your Research Paper Topics of 2019</a></li>
                                <li><a href="javascript:;">How to Write a Winning Research Paper Worth of A+ Grades</a></li>
                                <li><a href="javascript:;">65 Brilliant College Essay Topics That Will Never Be Obsolete</a></li>
                                <li><a href="javascript:;">How to write a flawless Research Methodology</a></li>
                                <li><a href="javascript:;">Research Paper Outline Example: Create Your Own Today!</a></li>
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
                                <li><a href="javascript:;">Organizational Structure of Apple</a></li>
                                <li><a href="javascript:;">Business Model of Zara</a></li>
                                <li><a href="javascript:;">Analysis of Competitive Strategies of Tesco</a></li>
                                <li><a href="javascript:;">Business Model of Wal-Mart</a></li>
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
                    <h2>In quest for a professional assignment help?</h2>
                    <span>Flexible rates compatible with everyone’s budget</span>
                </div>
            </li>
            <li><a href="javascript:;" class="btn ordr-btn">Order Here</a></li>
        </ul>
    </div>
</section>


<section class="content-section-main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-wrap">
                    <h2>Get flawless copies from our Help My Assignment service </h2>
                    <p>Today, students across the globe are in hunt for quality research paper assignment or essay writing service.  And, a large demographic end up seeking helps from PenMyPaper. The reason is nothing but our excellent content quality which prominences our status in the world map. Who doesn’t like a finest piece of writing! </p>
                    
                    <p>&nbsp;</p>
                    <p class="qte">Say what you want and we bring the best in it</p>
                    <p>&nbsp;</p>
                    
                    <p>Our exclusive writing service allows customization and preserves customer’s choices bit by bit. We furnish the thesis or essay assignments retaining high academic standards. Till date, we haven’t received a complaint on our quality or authenticity.  Before the paper reaches your hand, we confirm that it is a finely created plagiarism-free content. </p>

                    <h3>Quality is a priority at PenMyPaper</h3>
                    <p>Quality  comes effortlessly in our custom assignments and there’re no extra hardships in  achieving flawlessness. Once we receive the requirements, project managers  cultivate them in order to understand your prerequisites. We believe in  client’s perception and entertain their insight, as we offer the rare facility  of custom allowance. This paves the way for some brilliant creations. </p>
                    <p>Here, we  start with some initial research, note down the facts, organize the gens, make  a proper outline, and only after that commences with writing. The entire  process is a wholesome one, which ascertains a unique and original piece at the  end. And, we make sure that the client is satisfied with our content  development.</p>
                    <h3>No submission without proofreading </h3>
                    <p>Completion  of writing marks the beginning of editorial tasks, at PenMyPaper. Before  submission, we make certain that all our work is error-free and abide by the  given set of instruction. Our team of adept proofreaders read the assignments  carefully, and clarify that the paper is devoid of grammatical issues, faulty  referencing, wordiness, and more like that. </p>
                    <p>Though  the chances are minimal, but it may happen that you didn’t like a certain  portion in the assignment. In that case, do not hesitate to get in touch for amendments.  Our customer care executives remain at your service for 24*7. It’s just that  you need to speak of your modification choices, and if it is liable, we do it  for free. Otherwise, kindly request for a re-editing or writing service that may  include some minimal charges. </p>

                </div>
                <div class="clearfix"> </div>
                <div class="testimonial_item">
                    <div  itemscope itemtype="http://schema.org/Product">
                    <p><span itemprop="name">Penmypaper</span> has been rated <span itemprop="aggregateRating"  itemscope itemtype="http://schema.org/AggregateRating"> <span itemprop="ratingValue"><b>4.8</b> out of 5 by our customers.</span><br>
                    Votes: <span itemprop="ratingCount">1856</span>,  
                    Reviews: <span itemprop="reviewCount">1856</span></span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-wrap pad-left">
                    <h2>Can you do my assignments within deadline? Yes, we can! </h2>
                    
                    <p>We all know that excellently written assignment calls for a handsome amount of time, knowledge and patience. But with tight deadlines, students are left with nothing but extreme stresses. Many a times, they come up with some common queries, with a wish to find a reliable and trustworthy response. </p> 

                    <div class="content-img">
                        <img src="/images/new-hm-image3.png" alt="online assignment help" />
                    </div>
                    
                    <p align="center"><em>Do you have something similar in mind?</em></p>
                    <ul class="bull">
                      <li>Who will write my assignments within a strict  deadline?</li>
                      <li>Where can I find an adept and professional assignment  writer? </li>
                      <li>Is there anyone who offers assignment writing at  affordable price? </li>
                    </ul>
                    <p>Seeking  assistance from a professional to write assignments for you is indeed a smarter  thought. And, our custom assignment writing service is here to rid students of  those tough times and piles of writing tasks.</p>
                    <h3>Our assignment writers never miss a  deadline </h3>
                    <p>Scarce  of time to write assignment should never reflect in the paper quality or in  your grades. Simply, reach out to us, share your details, and we won&rsquo;t leave a  stone unturned in attaining maximum quality. No matter how complex the topics  are, our pros write assignments within the deadline. They are always ready to  take on your custom assignment writing in no time! </p>
                    <p>In  case, the deadline is too short, we engage more writers at your service in  order to accomplish the chore within the proposed date.  And, there won&rsquo;t be any sort of quality  compromise. Join our community of thousands of successful students, and be sure  of booming grades. </p>
                    <h3>We address the in-house writers as &ldquo;Experts&rdquo; </h3>
                    <p>The  expertise and experience of our writers have been raising the bar of excellence  since a decade, now. Each one of them is substantially qualified from renowned  universities, with an ample knowledge about the academic standards. Being  proficient in their own fields of study, they write exactly what you want,  within the allocated amount of time. </p>
                    <p>Firstly,  they assemble fresh data and evaluate the research problem in smallest details.  After comprehending the basics, our expert writers delve deeper into the matter  for a thorough analysis, then summarizes the general outcome, and finally,  write assignments. Our skillful specialists make use of thought-out  methodologies just to preserve a good sense of logics and perseverance while writing  assignments for academics. </p>

                </div>
                
                    
            </div>
        </div>
    </div>
</section>



<section class="feedback-section">
    <div class="container">
        <div class="text-center">
            <h2>Customers <span>Feedback</span></h2>
            <small>Fostering a long-term relationship </small>
        </div>
        <div class="owl-carousel" id="owl1">
            <div class="item">
                <div class="feedback-wrap">
                    <p>I order from Penmypaper frequently and every time, their pros write unique and original term essay. Its team of writing experts are qualified with years of experiences and write essay with expertise. My essays are, always, well-created and gladly accepted in my university. Extremely satisfied with the service.</p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Martina</h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>Having hectic college schedule, I always seek assistance from academic essay writers to write my assignments but, there’s no match when it comes to this website. They always write essays that are unique, original and free from errors. I am banking on their service till the time I am into academics. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Kelvin</h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>In the first semester of my graduation, I was dreaded with the thought of who can help me in writing essay or articles. Getting the web address of penmypaper.com, from a close friend, got me a professional to write essay. They always write my term essay within deadline maintaining quality. Highly recommended!</p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Cruise</h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>This year, I got my essay approved without any trouble and all the credit goes to PenMyPaper’s write essay service. Its writers toiled hard to get my draft written on-time. Write-my-essay service is extremely satisfactory at PMP. Among the other writing help providers, PMP’s custom essayists offer the best help. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Mahima</h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>I want to thank the writers of penmypaper for helping me with the custom essay. They write essay of great quality at cheaper costs. Indeed, the essayists did a great job! Next time onwards, there will never be a second thought whenever I will be asked to write essay for university projects. Recommending this site to those who need some to write articles. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Ryan </h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>I cannot write essay and my previous year essay obtained the lowest marks due to the plagiarism issue. But this time things changed completely. On seeking writing assistance from PenMypaper.com, I scored an A+ in my essay. The team of writers and editors write excellent essays entertain custom opinions to a great extent. Very happy!</p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Rebecca </h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>Even after multiple attempts, I can never write essays, especially analytical ones, so amazingly. Penmypaper did a great job. I heard that they write flawless drafts and it came true in my case. I obtained A+ grades. Highly recommend this essay writing service provider for every pupil across the globe. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Meher</h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>Excellent work by the professional essayists! Initially, I thought Penmypaper writers won’t be able to write essay so perfectly. But, the perfect team of adept authors and proofreaders proved me wrong.  I was delighted on getting the custom essay in my hand and so was my university professors. I graduated with the highest marks in my essay. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Tanisha </h4><small> </small></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End -->
<script type="text/javascript">
    $('body').on('change', '#paper_type', function() {
        toggleSlidePages();
        getOrderPrice();
    });
    $('body').on('change', '#subject', function() {
        getOrderPrice();
    });
    $('body').on('change', '#num_page', function () {
        var wc = this.value;
        var pval = '250';
        $('#wordcount').val(wc * pval);
        getOrderPrice();
    });
    $('body').on('change', '#level', function () {
        getOrderPrice();
    });
    $('body').on('change', '#urgency', function () {
        getOrderPrice();
    });
    function getOrderPrice() {
        var paper_type=$('#paper_type').val();
        var subject=$('#subject').val();
        var num_page = $('#num_page').val();
        var level = $('#level').val();
        var urgency = $('#urgency').val();
        var discountcode = $('#discountcode').val();
        var apply = 1;
        if(paper_type!='' && subject!='' && num_page!='' && level!='' && urgency!=''){
            $.ajax({
                url: "/order/orderprice",
                type: 'post',
                dataType: 'json',
                data: {paper_type:paper_type,subject:subject,num_page: num_page, level: level, urgency: urgency, discountcode: discountcode, apply: apply},
                success: function (json) { 
                    //var discnt=json['discount'] * -1;
                    $('#discount').html("-$"+json['discount']);
                    $('#netprice').html("$"+json['netprice']);
                    $('#dcerror').text('');
                    if (json['dcerror'] != '') {
                        $('#dcerror').text(json['dcerror']);
                    }
                }
            })
        }
    }
    $('body').on('keyup', '#discountcode', function () {
        var ln = $.trim($('#discountcode').val()).length;
        if (ln > 0) {
            getOrderPrice();
        } else {
            getOrderPrice();
        }
    });
</script>
<script type="text/javascript" src="/js/slidepagesdropdown.js"></script>
<script type="text/javascript">
toggleSlidePages();
function loadVisitors() {
     var number = 1800 + Math.floor(Math.random() * 1000);
     // $('#reg-users-numbers').text(number);
}
//loadVisitors(); // for initial display
setInterval(function() {
     loadVisitors(); // it excutes every 5sec
  },5000);
</script>





<?php
$footer = $_SERVER['HTTP_HOST']; 
$footer = $srcurl."footer.php"; 
include($footer); 
?>


</body>
</html>
