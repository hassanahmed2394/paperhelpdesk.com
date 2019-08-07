
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
                    <h1>"Who will write my essay?" End your quest with a <span>proficient writing service</span></h1>
                    <h4>Meet the mavens at PenMyPaper and treasure quality assistance</h4>
                    <h4>Use the code <strong>PPFEST20</strong> and grab a 20% discount on every essay</h4>
                </div>
                <div class="banner-category">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-heart"></span></div> Introducing new styles of composition. Place your<a href="javascript:;">Order now</a></li>
                                </ul>
                            </div>
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-cog"></span></div>  Appreciate the format before payment. Request a<a href="javascript:;">free outline</a></li>
                                </ul>
                            </div>
                            <div class="category-item">
                                <ul>
                                    <li><div class="category-icon"><span class="lnr lnr-clock"></span></div> Check the level of excellence before order. Read a <a href="javascript:;">free paper</a></li>
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
                        <div class="feature-icon"><img src="<?php echo $basesurl;?>/images/icon-1.png" alt="PenMyPaper"></div> <h3>Premium Service  <br><span>Modest Pricing</span></h3>
                    </div>
                    <p>Get finely composed supreme quality essays at money-spinning rates. Our tags will never go hard on your pocket.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-box">
                    <div class="feature-tittle">
                        <div class="feature-icon"><img src="<?php echo $basesurl;?>/images/icon-2.png" alt="PenMyPaper"></div> <h3>Safeguarding Client’s <br><span>Confidentiality </span></h3>
                    </div>
                    <p>Customer’s information remains well-concealed in our encrypted database. No third-party can eye through your privacy.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="feature-box">
                    <div class="feature-tittle">
                        <div class="feature-icon"><img src="<?php echo $basesurl;?>/images/icon-3.png" alt="PenMyPaper"></div> <h3>Zero-Cost  <br><span>Live Support </span></h3>
                    </div>
                    <p>You can find even the rarest amenities on our website. Our team is particularly designed to deliver plagiarism-free uniquely created content at just the right time.</p>
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
        <small>We are like a good neighbor</small>
        
        <div class="row sticky-height">
            <div class="row sticky-height">
            <div class="col-sm-7">
                <div class="panel-group" id="accordionMenu" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <span class="lnr lnr-question-circle"></span> What subjects do you write on?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          <p>We  write essays on various disciplines ensuring quality and originality in each  copy. Our comprehensive solution includes every possible management subjects  like Project Management, Corporate Business, Finance and Accounting, Human  Resource Management, General Management, Company Analysis, Industry Analysis  and <a href="/free-paper">more</a>.  On each of these domains, we offer a wide range of essay writing service along  with theses, research papers, dissertations, course works, term projects, and  other research assignments. </p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <span class="lnr lnr-question-circle"></span> Why should I choose you over the competitions?
                        </a>
                      </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          <p>High-end writing service at PenMyPaper reflects a name of trust and certainty. We have a decade longer footprint in the industry and has been catering to students of various academic levels. Every time you place an order with us, we make sure you end up being satisfied. Our professionals consult and compose for everyone as if you are the only customer. Our charges are even minimal compared to the competitors. Place an order with us and we will deliver the copy within the deadline, charging just a bit.</p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <span class="lnr lnr-question-circle"></span> I have already written my essay. Can you improve it? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          <p>Our  essay writing solution embraces a bigger sphere than you can ever imagine. We  not only write essays for students across the globe but also revise their  pre-written compositions. Simply, <a href="/account/register">register</a> or <a href="/account/login">log  in</a> to our site and go to the &ldquo;Order Now&rdquo; section. Attach the file to be revised  and submit the relevant requirements. Within the deadline, a notification will  be sent to your registered email address and the high-quality custom essay will  be uploaded in your order panel.</p>
                        </div>
                      </div>
                    </div>                    
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          <span class="lnr lnr-question-circle"></span> How will I know that you have received my payment? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          <p>Our cardinal working principle is designed exceptionally to entertain every customer with utmost enthusiasm. There isn’t a vacant space for confusion when you are placing the order with us. You will be notified through emails and also, you can check through the “order in progress” tab that appears in correspondence to your order number. The moment you make the payments a system-generated message automatically shows up in your inbox of the registered email address. Now, count on us and we will bring out the best for you.</p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                          <span class="lnr lnr-question-circle"></span> Can you write model answers for essay questions? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                          <p>PenMyPaper is best known for its exclusive custom essays. Our experts write unique contents with easy vocabulary to ensure high grades for you. Quality is always our priority. They author with excellence no matter how complex the topic is. We have provision for model answers, as well, if your requirement says so. We request you to submit the referential articles, PDFs, Doc files, and most importantly, the research questions.</p>
                        </div>
                      </div>
                    </div>
                    <!---->
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionMenu" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                          <span class="lnr lnr-question-circle"></span> Do you accept bigger projects with shorter deadlines? 
                        </a>
                      </h4>
                      </div>
                      <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                          <p>Being  in the business for long, we understand the intricacy of student life. Most of  the academic projects come with shorter deadlines and PenMyPaper knows how hard  it is to accomplish by the time. But our <a href="/ontime-delivery">unbeatable guarantees</a> promise to deliver within the time limit. If your project is somewhat bigger  and lengthier, we appoint multiple writers at your service. Together in action,  they achieve the goal of quality and deadline. </p>
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
             <h3>Time to improve your creative <span>writing skills</span></h3>
            <small>Modern Thoughts. New Ideas. Fresh Approach.</small>
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
                    <h2>Want your essay to be composed by experts?</h2>
                    <span>Our writers are exceedingly qualified</span>
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
                    <h2>"Don’t know how to write! Need a pro to write my essay for me."</h2>
                    
                    <p>Essay  writing seems an easy task if you go by the middle school thoughts but as the academic  level gets higher, this task becomes tougher. And, stresses start pouring in with  every single topic. Expert advice is the perfect remedies for those muddling up  with complicated topics and themes. And PenMyPaper has a dedicated team of  essayists, who prioritizes customer’s satisfaction over everything else. We  don’t trade quality for punctuality. </p>
                      <h3>Know a bit more about our essay  writers</h3>
                      <p>In  today’s world of competition, sustaining is a big question of concern. But we  have been leading the chart for years and our writers have much to do with it. In  a recent survey, PenMyPaper has been rated the number one research paper and  essay writing service provider. And, it wouldn’t have been possible if our  writers didn’t come up with supreme quality. <br />
                      <em>Here’re a few acmes of our writers  –  </em></p>
                    <ul class="bull">
                      <li>We hire an essayist after multi-level  skill assessment test</li>
                      <li>Only those having years of experience in  writing are elected</li>
                      <li>Each of our essay writers is subject  matter experts </li>
                      <li>All of them have definite knowledge  about university-guidelines</li>
                      <li>Our writers are native English speakers  and write affluently  </li>
                    </ul>
                    <h3>Introducing our high-class  proofreading </h3>
                     <p> Utmost  quality can never be ensured only with writing. Evidently, proofreading plays a  crucial role. PenMyPaper being aware of this notion has hired some qualified  editors for the task. The final file is submitted only after multiple checking  and revisions. We make sure there isn’t a single mistake in the delivered-copy. <br />
                      <em>Take a look at their attributive  highlights –</em></p>
                    <ul class="bull">
                      <li>Alike the writers, our editors are even  employed after skill tests</li>
                      <li>Each one of them is masters or  doctorates in English</li>
                      <li>Being educated from renowned  universities, they know about formats</li>
                      <li>Our editors cut out every grammatical  issue and punctuation mistakes</li>
                      <li>All of them have the finest wisdom of  contemporary vocabulary</li>
                    </ul>
                    <p>We  understand how important it is to perform well in colleges and universities and  therefore, maintain high-quality in all the articles. The whole credit goes to  our vigilant writers and proofreaders. With a plethora of knowledge and ample  amount of expertise, they bring out what looks best for your essay.  </p>
                    
                    <div class="clearfix"> </div>
                    <div class="testimonial_item">
                        <div  itemscope itemtype="http://schema.org/Product">
                        <p><span itemprop="name">Penmypaper</span> has been rated <span itemprop="aggregateRating"  itemscope itemtype="http://schema.org/AggregateRating"> <span itemprop="ratingValue"><b>4.8</b> out of 5 by our customers.</span><br>
                        Votes: <span itemprop="ratingCount">1856</span>,  
                        Reviews: <span itemprop="reviewCount">1856</span></span></p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="content-wrap pad-left">
                    <h2>Can you write my essay online? Yes, We Can!</h2>
                    <p>Digitalization  is wafting over the heads now, with every now and then new technologies coming  into a sphere. PenMyPaper is well-acquainted with the fact and thus, offers the  service solely online. We cater to different parts of the globe proffering  exclusive amenities for the distinct literary level. Till now, you have learned  the expertise we have in the house but here, we will introduce what makes us  stand ahead among the competitors.</p>
                    <h3>Google us! We show up on the &ldquo;Top&rdquo;</h3>
                     <p>Digitalization  is now waffling over the heads and there&rsquo;s no other way than going online.  Evidently, it applies even when you are searching for an essay writing service.  If you Google any relatable term like the following, our website appears among  the firsts. </p>
                    <ul class="bull">
                      <li>Need someone who can help me write my essay</li>
                      <li>I want a professional to write my essay for me</li>
                      <li>Can I get my essay written at affordable cost?</li>
                      <li>Write  my essay cheap with high-quality quality </li>
                      <li>Will you customize and write my essay online?</li>
                    </ul>
                    

                    <p>Along  with us, a few more names will also come up, but why will you opt us? Certainly,  because we offer comprehensive essay writing services, entailing every possible  niche.</p>
                    <h3>We embrace every single form of  essay </h3>
                     <p>Come  up with any type and we will write essay for you. Our subject matter experts  proficiently select a topic, study deeply and compose just the way you want it.  Here&rsquo;re the variabilities that we cover –  </p>
                    <ul class="bull">
                      <li><a href="/persuasive-essay">Persuasive Essay</a></li>
                      <li><a href="/expository-essay">Expository Essay</a></li>
                      <li><a href="/narrative-essay">Narrative Essay</a></li>
                      <li><a href="/descriptive-essay">Descriptive Essay</a></li>
                      <li><a href="/reflective-essay">Reflective Essay</a></li>
                      <li><a href="/argumentative-essay">Argumentative Essay</a></li>
                      <li><a href="/scholarship-essay">Scholarship Essay</a></li>
                    </ul>
                    <h3>Custom essays are composed virtually </h3>
                    <p>Professionals  writing on your topic is good enough, but think how will it be if you have the  chance to put your custom ideas. We know it&rsquo;s delighting! Thus, we offer the  same for students. Tell your preferences regarding word count, educational  level, type of content and how you want the professionals to write essay. Even  after the order, some more ideas can certainly pop up in your mind. Share the  details online through our special messenger. And, our mavens write preserving  all your demands. </p>
                    
        
                </div>
            </div>
        </div>
    </div>
</section>



<section class="feedback-section">
    <div class="container">
        <div class="text-center">
           <h2>Customer <span>Feedback</span></h2>
            <small>Growing stronger with your responses</small>
        </div>
        <div class="owl-carousel" id="owl1">
            <div class="item">
                <div class="feedback-wrap">
                    <p>I was so puzzled with my assignment that even two days before the deadline I hardly had any clue about who will write essay for me. Lucky me! Found Penmypaper and shared my details with them. You won’t believe what I received. Experts here compose like mavens and entertain every custom choice. Every time, I will only ask you to write essay for my college projects. Thank you for the custom allowance. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Jane Nicole</h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>My brother told me that www.Paperhelpdesk.com but initially, I was skeptical about whether to seek help. It seemed unethical to me but after going through your website and feedbacks, I was thoroughly impressed. And the best part is my notions didn’t go wrong. You guys write wonderfully! Each of the requirements was preserved. There won’t be any second thought when I will again need someone to write custom cheap essays for me. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Presley Bernard </h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>Your free revision policy is so helpful. I wanted to include two or three more information in my article and it’s amazing that you entertained it without any additional charges. Very happy with the affordable price. Thanks that your experts write my essay for me. In fact, I am fond of this pattern of custom writing. Got a lot of appreciations from my professors. It wouldn’t have been possible if you didn’t write it so beautifully. Great cheap essays. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Laura Dallas </h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>Tried writing essays quite a few times but failed and failed. So, this time I have been looking for an expert essayist. After reading the feedbacks, Penmypaper seemed quite reliable. And it’s true. Your essayists think and write like expert writers and it had every custom choice that I demanded. Very happy and extremely satisfied. Surely, I will opt you as my service provider for further projects.</p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Ginny Marc </h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>Great work penmypaper! Wonder how you have managed such a critical topic. I am sure your experts have a plethora of knowledge and it reflects on how they write essay. It’s great that you have kept the rates minimal in spite of delivering highest quality custom compositions. I would like you to write all of my upcoming assignments. Thanks in advance. Indeed, great service. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Shawn Cooley</h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>Everyone is talking about quality and I have a no different opinion.  But I will highlight something else, as well. Like honestly, how do your experts nod to provide quality at such a low cost? I really wanna what’s the secret behind it. Your writers deserve a kudos for maintaining this level of writing standard. Thoroughly impressed. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Frank L. Aniston  </h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>I needed academic writing service at the dead hours of the night. Tried one but it was unavailable. Next in the list was Paperhelpdesk.com. I got an immediate response from a friendly-behaved consultant over the Live Chat. He listened to all my problems and guided me through the entire ordering process. And lastly, very happy with the custom practices and the way your experts write essay. Mine was great! </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Joe Turner </h4><small> </small></div>
                </div>
            </div>
            <div class="item">
                <div class="feedback-wrap">
                    <p>Normally, I write essays on my own, but this time, my exams are knocking on the door. So, had to approach penmypaper for cheap essay. I am impressed with the writing quality. Your pros create copies with utmost grace and that kind of speaks about their qualification and talent. Thank God I found such an amazing service provider. Please continue to write essays as amazingly as you do. </p>
                    <small> </small>
                </div>
                <div class="client-info">
                    <div class="client-img"><img src="<?php echo $basesurl;?>/images/user.jpg" alt="PenMyPaper"></div>
                    <div class="client-details"><h4>Henry Brett  </h4><small> </small></div>
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
