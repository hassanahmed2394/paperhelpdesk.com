
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
                    <h1>Find an exalted & upright essay writing service. <span>Let your grades upsurge.</span></h1>
                    <h4>Walk down the aisle of success with PenMyPaper</h4>
                    <h4>Apply the coupon code <strong>PPFEST20</strong> and get flat 20% discount, now!</h4>
                </div>
                <div class="banner-category">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-heart"></span></div> Have a break and leave it to the pros.  Click to <a href="javascript:;">Order now</a></li>
                                </ul>
                            </div>
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-cog"></span></div> Know the format before it’s written. Request a <a href="javascript:;">free outline</a></li>
                                </ul>
                            </div>
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-clock"></span></div> Rely only after testing the writing quality. Read  <a href="javascript:;">free paper</a></li>
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
                        <div class="feature-icon"><img src="<?php echo $basesurl;?>/images/icon-1.png" alt="PenMyPaper"></div> <h3>Unique contents in  <br><span>good time</span></h3>
                    </div>
                    <p>Feel the thrill of triumph with high-quality contents delivered on schedule. </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-box">
                    <div class="feature-tittle">
                        <div class="feature-icon"><img src="<?php echo $basesurl;?>/images/icon-2.png" alt="PenMyPaper"></div> <h3>Amendments <br><span>on the house</span></h3>
                    </div>
                    <p>Be frank with your requisites and we will revise the amends at ZERO cost.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-box">
                    <div class="feature-tittle">
                        <div class="feature-icon"><img src="<?php echo $basesurl;?>/images/icon-3.png" alt="PenMyPaper"></div> <h3>Round the clock <br><span>consultations </span></h3>
                    </div>
                    <p>Doubts are about to take flight with experts available just when you expect.</p>
                </div>
            </div>
        </div>
        <div class="text-center feature-txt">
            <p>We guarantee utmost satisfaction with our superior customer-centric service. Never in the process of assistance can you complain about quality, punctuality, and conduct.</p>
        </div>
    </div>
</section>
<!-- Feature Section End -->

<section class="why-choose-section">
    <div class="container">
        <h3>Why choose us?</h3>
        <small>Designed for ultimate writing succor</small>
        
        <div class="row sticky-height">
            <div class="col-sm-7">
                <div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <span class="lnr lnr-question-circle"></span> How does PenMyPaper work? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                           <p>Placing an order with PenMyPaper is  absolutely hassle-free. It’s just a two-step procedure –</p>
                            <ul class="bull">
                              <li>filling  the basic order form </li>
                              <li>making easy  payments</li>
                            </ul>
                            <p>A few minutes from receiving the rites,  our adroit team starts working on your project. Your essay will be assigned to one  of <a href="javascript:;">our top consultants</a>, who will evaluate your requirements  and write essay of high quality. The  completed essay then proceeds for detailed  proofreading, and finally, it will be uploaded in the dashboard with your order  id. </p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <span class="lnr lnr-question-circle"></span> Where will I get the printable version of the final draft?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          <p>Once the order is complete, you will  receive a machine-generated notification in your registered email address. It  will contain the link to your login page from where you can get inside the <a href="javascript:;">PenMyPaper  order panel</a> using  your credentials. Click on your order id and download the final file from the  labeled section. We write and send the file as per your desired format i.e. if  you ask for PDF, Word-doc, or Excel-sheet, the final custom copies are presented  in the identical layout.  </p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <span class="lnr lnr-question-circle"></span> What if I don’t receive the essay within the deadline?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          <p>Such instances haven’t been recorded  ever in the past ten years. We are extremely specific with our promises and  ensure that the essayists write essays within the proposed date. But in case  you are experiencing some delays, contact us right away. You can either get in  touch through Live Chat or send your complaint via email or message. Please  mention the exact cause and hindrance so that our executives can resolve the  matter immediately.<br />
                          <strong><em>Note:</em></strong><em> Before registering your complaint, ascertain that the problem isn’t from your  side. Sometimes, the delays occur if you provide wrong or spammed email  address. In other times, the writer may  be waiting for your reply and cannot continue working without a set of  information from you. Reasons vary from time to time.</em></p>
                        </div>
                      </div>
                    </div>                    
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          <span class="lnr lnr-question-circle"></span> What is a rewriting and editing service?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          <p>Be frank and vocal the improvements and research you want in the completed essay. Specify the portions where you need alterations, and our experts will write it for you. If you have some kind of references, kindly upload in the requirement section so that the professionals can get converse with your choices.  Once you serve the platter of desire, lay back and relax till we write the revised draft. The whole process of amendment is a treat from PenMyPaper; you don’t have to pay a single penny for revision.</p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          <span class="lnr lnr-question-circle"></span> Is there a money back guarantee?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                          <p>PenMyPaper being in the business for  quite a long is not oblivious of the complexity of some projects. And  therefore, we have a specialized team to write the composite ones. If you are  still unhappy with our custom writing, simply, inform the quality control  department and explain the dissatisfaction. The rest will be taken care of by  our support panel. If circumstances turn out to be multifaceted, we offer an <a href="javascript:;">easy refund policy</a>,  which is subject to certain regulations.   But we hope such discrepancies will never crop up. </p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          <span class="lnr lnr-question-circle"></span> Can I add something to my initial order requirements? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                         <p>Writing assistance from PenMyPaper is  one of its kind with unlimited amenities and custom  provisions. Suppose you have placed an order with all the requirements, and in  some time, more necessities have crept  up. Don’t worry as here you will get the advantage of affixing additional constraints  and referential files with the initial order prerequisites. Go to the <a href="javascript:;">Log  In</a> page, login with your credentials,  click on the order tag and send the needs through our special messenger. Under  the same panel, you will also find the options to add more file. Upload them  without any hesitation.</p>
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
            <h3>Shrewd tips for <span>smart writers</span></h3>
            <small>Appraise yourself with interesting pieces and papers</small>
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
                    <h2>Get Introduced To World-Class Writing Service</h2>
                    <span>We pride in being prompt, adept, and grander</span>
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
                    <h2>We lead the global flock of cheap essay writing services</h2>
                    <p>Besides  being a reliable firm, PenMyPaper is much popular as a cheap write my paper help  provider. Keeping the rates minimal, experts at PMP write some uniquely  formatted essays retaining quality and excellence.  Never on earth have we comprised with the essay  writing or research thesis standard, even if the deadline is tight.  Once you fill the palate of requirements, our  professional writers write a custom essay  from scratch. In the end, we ascertain that the copies have been written with  proficiency.</p>
                      <h3>Charges are lower than you think </h3>
                      <p>Since a  decade, we are climbing the ladder of success, and it seems, finally, we have reached  the zenith. Many wonders what makes us retain the constant base of clientele  and here’s the answer to that. We write cheap essays, serving just what you  wished for. Forget about the hidden charges, we don’t even cost redundantly.  The generated bills are transparent, specifically indicating each label. In case you fail to get hold of a  particular section, our customer care experts are there to answer each of your  qualms.</p>
                      <h3>Profit limitations are hemmed in  </h3>
                      <p>Sometimes,  students worry about the quality  standards after hearing the affordable price. Well, it is indeed tough to  sustain in this world of competition keeping the rates lower. But to your  surprise, we succeeded with our exclusive business plans. In other words,  PenMyPaper knows the tricks of the trade, and manage to provide superior  quality, at smaller outlays. For a reality check, you must be aware that PMP  binds the profit margin. Our mission is to help students with the least expense, as we understand the intricacies  of paying without earning.</p>
                      <h3>Free amendments as per your wish </h3>
                      <p>Till  now, we have been talking about lower expense, but PMP’s amenities rise above  it. Besides offering cheap essays and a cost-effective  research thesis, we provide Zero-cost amendments, as well. Suppose you aren’t  satisfied with some portions of your essay, or you wish for more additions, do  not hesitate to get in touch with us. Without paying a penny, procure the  modifications. Our website forecasts all the transaction policies.  We request you to research on them,  thoroughly, before placing the order. Rest will be taken care of by us.</p>
                    
                    <div class="clearfix"> </div>
                    <div class="testimonial_item">
                        <div  itemscope itemtype="<?php echo $basesurl;?>/images/new-hm-image3.png">
                        <p><span itemprop="name">Penmypaper</span> has been rated <span itemprop="aggregateRating"  itemscope itemtype="<?php echo $basesurl;?>/images/new-hm-image3.png"> <span itemprop="ratingValue"><b>4.8</b> out of 5 by our customers.</span><br>
                        Votes: <span itemprop="ratingCount">1856</span>,  
                        Reviews: <span itemprop="reviewCount">1856</span></span></p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="content-wrap pad-left">
                    <h2>&ldquo;Best Essay Writing  Service&rdquo; – That&rsquo;s what defines us! </h2>
                    <p>Competitions are high among the  academic helpers, but none can beat us.  We have been leading over the past years  and has held the position intact, without  a downfall. &ldquo;Professionalism&rdquo; and &ldquo;Proficiency&rdquo; succor us to be the best among  the contemporaries. If you scroll through the feedback section, some genuine  ratings and reviews will speak on behalf. With the completion of each essay assignment,  PenMyPaper is praised for its adept group of writers, reliable service, plagiarism-free  contents, and many more. </p>
                  <div class="content-img">
                        <img src="<?php echo $basesurl;?>/images/new-hm-image3.png" alt="online assignment help" />
                    </div>
                  <h3>Qualified  writers bring in exclusive essays </h3>
                  <p>Our unique range of facilities and  inimitable service has been the talk of  the town for long.  Many speculations have  been brewing about what makes us better among the bests. Well, the team of  adroit writers and editors draw the pleasant line of difference and write the  finest essays for students, like you.  From  the very beginning, PMP hires subject matter experts, after sessions of  scrutiny and evaluation.  Each of the mavens  possesses an ample amount of knowledge in  respective niches and years of experience in academic writing.  </p>
                  <h3>Allowance  of custom choices just for you  </h3>
                  <p>Seeking assistance from a reliable custom  essay writing assistance, certainly, a great idea indeed when you have a  constricted deadline. If you have a few one-off thoughts concerning your essay assignment,  share them with our essay writers. We listen to your custom choices and toil to  a great extent in accomplishing them. Apart from this, we have provisions for  free revision, even after submission. Reach our customer support staffs if you  have more modification ideas in mind. We ascertain of reverting back, almost  instantaneously.</p>
                    
                    <h3>Credentials  are kept private and confidential </h3>
                    <p>In many instances, students are found  querying whether their personal data is safe in the hands of writing service providers.  We understand this intricacy, and thus, assure the highest possible privacy. All the data like your name, email address,  cellphone number, order id, order type, and requirements, and payment  information are kept confidential in our personalized database. Our executive&rsquo;s  custom these records only for one-to-one communique, and obscure them from third-party  servers. </p>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="feedback-section">
    <div class="container">
        <div class="text-center">
            <h2>Customer <span>Feedback</span></h2>
            <small>Success is learning how to settle customer’s hitches</small>
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
