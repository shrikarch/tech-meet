<?php

require 'twitteroauth.php';
$connection = new TwitterOAuth('uepVidV7eSTyI09YU1YOw', 'sEtpDCfCqwihkxOb9OcV5aUuZ1xJYIv1b5JuvzwU', '47271576-kCQwzwLocGDXSWq5KcQIfeFGoIdHxMPweMC2nA1cy', 'G7uS5RagbWQmS6HdhhCT47G4pGNmFktq7zNro7nc');
$connection_content = $connection->get("users/show",array('screen_name' => 'tech_meet'));

$followers = $connection_content->followers_count;
$status = $connection_content->statuses_count;

$url = 'http://graph.facebook.com/SMMinistries';
$facebook = json_decode(file_get_contents($url))->{'likes'};

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Tech Meet - where technology meets people</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="css/index.css">
        
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="@tech_meet">
        <meta name="twitter:title" content="Tech Meet">
        <meta name="twitter:description" content="Tech Meet - where technology meets people. A platform for knowledge sharing in Mumbai">
        <meta name="twitter:creator" content="@tech_meet">
        <meta name="twitter:image" content="">
        
        <!-- Open Graph data -->
        <meta property="og:title" content="Katrina's waiting" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://tech-meet.com" />
        <meta property="og:image" content="" />
        <meta property="og:description" content="Tech Meet - where technology meets people. A platform for knowledge sharing in Mumbai" /> 
        <meta property="og:site_name" content="tech_meet" />
        <meta property="fb:admins" content="100005079395625" />
        
        <script src="js/vendor/modernizr.js"></script>
        
        <style>
            .font{
                font-family:'Museo-slab',sans-serif;
            }
            form label, form{
                font-family:'Museo-slab',sans-serif;
                color:#fff;
            }
            form select{
                color:#fff;
            }
            .top-bar a{
                font-family:'Museo-slab',sans-serif;
            }
        </style>
    </head>
    <body>
        
        <div class="wrapper">
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <li class="name">
                        
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
                </ul>
                
                <section class="top-bar-section">
                    <ul class="right">
                        
                        <li><a href="#events" class="js_onPageLink">Events</a></li>
                        <li><a href="#speakers" class="js_onPageLink">Speakers</a></li>
                        <!--                        <li><a href="#">Location</a></li>-->
                        <li><a href="#tickets" class="js_onPageLink">Register</a></li>
                        <!--                        <li><a href="#">Team</a></li>-->
                        <!--                        <li><a href="#">Interns</a></li>-->
                    </ul>
                </section>
            </nav>
            
            <div class="part1">
                <div class="row topBanner">
                    <center>
                        <img src="img/tm.png" alt="">
                    </center>
                </div>
                <div class="row topSlider">
                    <ul class="sliderUl" data-orbit data-options="pause_on_hover: false; resume_on_mouseout: true; navigation_arrows: false; slide_number: false; bullets: false; timer: true; timer_speed: 3000;">
                        <li data-orbit-slide="slide1">
                            <center>
                                <div class="slidingHead"><p>Seminars  <br> & <br>Meetups</p></div>
                            </center>
                        </li> 
                        <li data-orbit-slide="slide2">
                            <center>
                                <div class="slidingHead"><p>For entrepreneurs <br>Startups <br>Developers <br>Students</p></div>
                            </center>
                        </li>                    
                    </ul>
                </div>            
            </div>
            
            <div class="part2 row sectionPadding bottomBor">
                <div class="large-6 medium-6 columns left"><h3>About Us</h3><p>Tech-meet was founded with a sole inspiration to establish a platform for knowledge sharing in Mumbai and all across India. 
                    We aim to be the enablers of learning, entrepreneurship and development of technology through development 
                    of knowledge sharing platforms. 
                    We wish to encourage budding entrepreneurs by encouraging them to come up with new ideas and plans. We wish to work closely with various small and big institutions
                    to create nurture and incubate business ideas.<br>
                    MOTTO – EDUCATE – ENGAGE – ENABLE - EMPOWER</p>
                    
                </div>
                
                <div class="large-6 medium-6 columns">
                    <h3 class="show-for-large-up">Founders</h3>
                    <center>
                        <h3 class="hide-for-large-up" style="margin-top:2em;">Founders</h3>
                    </center>
                    <ul class="row founders-slider" data-orbit  style="margin-top:0.5em;" data-options="timer_speed: 30000; pause_on_hover: true; resume_on_mouseout: true; slide_number: false;">
                        <li>
                            <div class="large-6 medium-6 small-4 columns">
                                <img src="img/robin.jpg" alt="">
                            </div>
                            <div class="large-6 medium-6 small-8 columns">
                                <h4>Robin Singh</h4>
                                <p>Robin is a Full Stack Web Developer and is working on Web Technologies since 10 years. He is currently working as Technology Lead with iContract and is also co founder of an online designing tools called as shirttools. He zeal to teach and share his knowledge have been the key reason for organizing Tech Meet in city of Mumbai
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="large-6 medium-6 small-4 columns">
                                <img src="img/harsh.jpg" alt="">
                            </div>
                            <div class="large-6 medium-6 small-8 columns">
                                <h4>Harsh Modi</h4>
                                <p>Harsh is an MBA in Finance and doctoral research professional with more than 9 years of training and mentoring experience. Harsh founded EDGEUCATERS in 2011. He played a vital role in helping many startups like white pigeon and isign.com to develop a market potential. He currently drives the networking and development at tech-meet.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="large-6 medium-6 small-4 columns">
                                <img src="img/vikas.jpg" alt="">
                            </div>
                            <div class="large-6 medium-6 small-8 columns">
                                <h4>Vikas Mishra</h4>
                                <p>Vikas is a Post Graduate with a wide range of experience working with MNC's. One of the most dynamic managers at his previous employers and handled a team of 60 people and territories under him. Currently the Chief Implementation Officer at Edgeucaters. He is the co – founder of tech-meet and handles networking roles for tech-meet.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="row bottomBorder sectionPadding whoWhat" style="margin-top:2.5em;">
                <div class="large-4 medium-4 columns justiCenter">
                    <h3>Who we are?</h3><p>We are a bunch of technology enthusiasts coming together from different professional fields with a common passion for making latest tech developments learn worthy and available to all as and when they happen.</p>
                </div>
                <div class="large-4 medium-4 columns justiCenter">
                    <h3>What we do?</h3>
                    <p>Organize Knowledge sharing platforms for technology. We aim to bring together professionals, entrepreneurs, start ups and college students on a common ground. Focus on nurturing entrepreneurial aspirations.</p>
                    
                </div>
                <div class="large-4 medium-4 columns justiCenter">
                    <h3>Our vision</h3>
                    <p>Build ecosystem centered on learning and adaptation of new technology. To create a think tank and technology monitoring centre for quick dissemination of information Motivate young enthusiasts to come forward and develop their own ideas. Build and nurture entrepreneurial cells.</p>
                </div>
                
            </div>
            
            <div class="row bottomBorder sectionPadding speakerInfo">
                <center>
                    <h2 style="margin-bottom:1.5em;" id="speakers">Speakers</h2>
                </center>
                <div class="large-3 medium-3 small-12 columns eachS"> 
                    <img class="centering show-for-medium-up" src="img/prashant.jpg" alt="">
                   <center class="show-for-small-only">
                         <img class="centering" src="img/prashant.jpg" alt="">
                    </center>
                    <h5 class="sInfo">Prashant Challapalli</h5>
                    <h6 class="sInfo">Sr. Vice President & Digital Head at iContract</h6>
                    <p class="sInfo">Prashanth heads iContract, the digital arm of Contract advertising and a full service integrated digital communications agency in its own right. He was also a founder employee of Jack in the Box Worldwide with the vision of creating content for brands across multiple platforms and geographies.</p>
                </div>
                <div class="large-3 medium-3 small-12 columns eachS">
                    <img src="img/akrit.jpg" alt="" class="show-for-medium-up">
                    <center class="show-for-small-only">
                        <img src="img/akrit.jpg" alt="">
                    </center>
                    <h5 class="sInfo">Aakrit Vaish</h5>
                    <h6 class="sInfo">Co-Founder & CEO, <br> Haptik Inc</h6>
                    <p class="sInfo">Aakrit Vaish is a technology entrepreneur and investor, currently CEO at Haptik, a company in the mobile customer support space he co-founded in Fall 2013. Before, he was at Flurry where he was instrumental in growing the company from a start up to a multi-million dollar business.</p>
                </div>
                <div class="large-3 medium-3 small-12 columns eachS">
                    <img src="img/qm.jpg" alt="" class="show-for-medium-up">
                    <center class="show-for-small-only">
                        <img src="img/qm.jpg" alt="" >
                    </center>
                    <center>
<!--                        <h3 class="sInfo"><a href="" data-reveal-id="speakerForm">Become the speaker!!</a></h3>-->
                    <h3>TBD</h3>
                    </center>
                </div>
                <div class="large-3 medium-3 small-12 columns">
                     <img src="img/qm.jpg" alt="" class="show-for-medium-up">
                     <center class="show-for-small-only">
                        <img src="img/qm.jpg" alt="" >
                    </center>
                    <center>
<!--                        <h3 class="sInfo"><a href="" data-reveal-id="speakerForm">Become the speaker!!</a></h3>-->
                    <h3>TBD</h3>
                    </center>
                </div>
                <div id="speakerForm" class="reveal-modal" data-reveal>
                    <h3>Awesome. Please fill this form for us?</h3>
                    <form action="" data-abide>
                        <div class="row">
                            <div class="name-field large-4 medium-4 columns">
                                <small>All fields are mendatory</small>
                                <label>Your name</label>
                                <input type="text" required pattern="[a-zA-Z]+" placeholder="Name">
                                <small class="error">Name is mandatory</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="email-field large-4 medium-4 columns">
                                <label>Email</label>
                                <input type="email" required placeholder="Example@exmpl.com">
                                <small class="error">An email address is required.</small>
                            </div> 
                            
                            
                            <div class="num-field large-4 medium-4 columns">
                                <label>Contact Number</label>
                                <div class="row collapse inline">
                                    <div class="large-3 medium-3 small-3 columns"><span class="prefix">+91</span></div>
                                    <div class="large-9 medium-9 small-9 columns">
                                        <input type="tel" required placeholder="987-654-3210" pattern="integer">
                                        <small class="error">Please fill in valid contact number.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="large-4 medium-4 columns"></div>
                        </div>
                        <div class="row">
                            <div class="large-6 medium-6 column">
                                <label>Have anything to tell us?
                                    <textarea placeholder="Hint : About you."></textarea>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <button type="submit" class="tiny" style="margin-left:1.1em;" onclick="thnku()">Submit</button>
                            <div class="hid" id="thanku">
                            <p class="animated fadeIn" style="margin-left:1.2em;" >Thank you!</p>
                        </div>
                        </div>
                        
                    </form>
                    <a class="close-reveal-modal">&#215;</a>
                </div>
            </div>
            
            <div class="row sectionPadding timeline bottomBorder">
                <center>
                    <h5 id="events">Venue : Atharva College of Engineering, Malad West</h5>
                    <h2>Events - 22nd March, 2014</h2>
                    <img src="img/timeline.jpg" alt="">
                </center>
            </div>
            
            <div class="sectionPadding row">
                <center>
                    <h2 id="tickets">Tickets</h2>
                </center>
                <div class="priceTables" data-equalizer>
                    <div class=" large-3 medium-3 small-6 columns">
                        <ul class="pricing-table font">
                            <li class="title" style="font-family:'Museo-slab'">Early-Bird <br> Registration</li>
                            <li class="price" style="font-family:'Museo-slab'">Rs.700</li>
                            <li class="description font">Valid Till: <br> 10th March 2014</li>
                        </ul>
                    </div>
                    <div class=" large-3 medium-3 small-6 columns">
                        <ul class="pricing-table font">
                            <li class="title" style="font-family:'Museo-slab'">Regular <br> Registration</li>
                            <li class="price" style="font-family:'Museo-slab'">Rs.1000</li>
                            <li class="description font">Valid Till: <br> 21st March 2014</li>
                        </ul>
                    </div>
                    <div class=" large-3 medium-3 small-6 columns">
                        <ul class="pricing-table font">
                            <li class="title" style="font-family:'Museo-slab'">Student <br> Early-Bird</li>
                            <li class="price" style="font-family:'Museo-slab'">Rs.300</li>
                            <li class="description font">Valid Till: <br> 10th March 2014</li>
                            
                        </ul>
                    </div>
                    <div class=" large-3 medium-3 small-6 columns" data-equalizer-watch>
                        <ul class="pricing-table font">
                            <li class="title" style="font-family:'Museo-slab'">Student <br> Registration</li>
                            <li class="price" style="font-family:'Museo-slab'">Rs.500</li>
                            <li class="description font">Valid Till: <br> 21st March 2014</li>
                        </ul>
                    </div>
                    
                </div>   
                
            </div>
            <div class="row bottomBorder">
                <center>
                    <p>Valid college ID is mendatory for student registration at the venue.</p>
                   
<!--                    <a href="" class="button" data-reveal-id="stuForm">Book Your Seat!!</a>-->
                    <a href="http://em.explara.com/event/tech-meet" class="button" target="_blank">Book your seats now !</a>
                </center>
            </div> 
            <div id="stuForm" class="reveal-modal" data-reveal>
                <h3>Great. Please fill this form for us?</h3>
                <form action="" data-abide>
                    <div class="row">
                        <div class="name-field large-4 medium-4 columns">
                            <small>All fields are mendatory</small>
                            <label>Your name</label>
                            <input type="text" required pattern="[a-zA-Z]+" placeholder="Enter your full name.">
                            <small class="error">Name is mandatory</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="email-field large-4 medium-4 columns">
                            <label>Email</label>
                            <input type="email" required placeholder="Example@exmpl.com">
                            <small class="error">An email address is required.</small>
                        </div> 
                        
                        
                        <div class="num-field large-4 medium-4 columns">
                            <label>Contact Number</label>
                            <div class="row collapse inline">
                                <div class="large-3 medium-3 small-3 columns"><span class="prefix">+91</span></div>
                                <div class="large-9 medium-9 small-9 columns">
                                    <input type="tel" required placeholder="987-654-3210" pattern="integer">
                                    <small class="error">Please fill in valid contact number.</small>
                                </div>
                            </div>
                        </div>
                        <div class="num-field large-4 medium-4 columns">
                            <label>Twitter Username</label>
                            <div class="row collapse inline">
                                <div class="large-2 medium-2 small-2 columns"><span class="prefix">@</span></div>
                                <div class="large-10 medium-10 small-10 columns">
                                    <input type="text" placeholder="lostUser">
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="row inline inFormLine">
                        <div class="large-4 medium-4 columns">
                            <label>Occupation:</label>
                            <input type="radio" name="domainName" value="professional" onclick="showProfessional()"><label>Professional</label>
                            <input type="radio" name="domainName" value="student" onclick="showStudent()"><label>Student</label>
                        </div>
                        
                        <div id="compName" class="hid">
                            <div class="num-field large-4 medium-4 columns animated fadeIn">
                                <label>Company Name</label>
                                <input type="text" required>
                                <small class="error">Company name is mandatory</small>
                            </div>
                        </div>
                        <div id="collName" class="hid">
                            <div class="num-field large-4 medium-4 columns animated fadeIn">
                                <label>College Name <small> Valid college ID is mendatory.</small></label>
                                <input type="text" required>
                                <small class="error">College Name is mandatory</small>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="row inline">
                        <div class="large-4 medium-4 columns">
                            <label>City</label>
                            <select id="citySelector">
                                <option value="Mumbai">Mumbai</option>
                                <option value="Pune">Pune</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Other">Other</option>
                            </select>
                            
                        </div>
                        
                        <div class="hid" id="cityM">
                            
                            <div class="num-field large-4 medium-4 columns animated fadeIn">
                                <label>If other, then which city?</label>
                                <input type="text" placeholder="Tell us your city">
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="large-4 medium-4 columns">
                            <label>Gender:</label>
                            <input type="radio" name="gender" value="Female" ><label>Female</label>
                            <input type="radio" name="gender" value="Male"><label>Male</label>
                        </div>
                    </div>
                    
                    <div class="row inline inFormLine">
                        <div class="large-3 medium-3 columns">
                            <label>Have Smartphone?</label>
                            <input type="radio" name="phone" value="Yes!" onclick="osSelectOn()"><label for="">Yes!</label>
                            <input type="radio" name="phone" value="No" onclick="osSelectOff()"><label for="">No.</label>
                        </div>
                        
                        <div class="shw" id="selectOs">
                            <div class="large-3 medium-3 columns animated fadeIn">
                                <label for="">Select OS:
                                    <select>
                                        <option value="Android">Android</option>
                                        <option value="IOS">IOS</option>
                                        <option value="Windows">Windows</option>
                                        <option value="BlackBerry">BlackBerry</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="large-6 medium-6 columns"></div>
                    </div>
                    
                    <button type="submit" class="tiny" style="margin-left:3.2em;" onclick="redirect()">Register & Buy tickets</button>
                    <div class="hid" Id="redirection">
                        <p class="animated fadeIn" style="margin-left:3.2em;" >Thank you! You will be shortly redirected to buy the tickets. If not <a href="http://em.explara.com/event/tech-meet" target="_blank"> Click Here.</a></p>
                    </div>
                </form>
                
                <a class="close-reveal-modal">&#215;</a>
            </div>
            
            
            
            
            <div class="footer sectionPadding">
                <div class="row">
                    <center>
                        <h1 style="color:#fff; margin-bottom:2em;">Stats</h1>
                    </center>
                </div>
                <div class="row dynamicNum">
                    <div class="large-3 columns rightBord">
                        <h1><?php echo $followers?></h1>
                        <a href="https://twitter.com/tech_meet"><h4>TWITTER</h4></a>
                    </div>
                    <div class="large-3 columns rightBord">
                        <h1><?php echo $facebook?></h1>
                        <a href="https://www.facebook.com/techmeetdotcom"><h4>FACEBOOK</h4></a>
                    </div>
                    <div class="large-3 columns rightBord">
                        <h1>25</h1>
                        <a href="http://em.explara.com/event/tech-meet"><h4>PARTICIPANTS</h4></a>
                    </div>
                    <div class="large-3 columns">
                        <h1><?php echo $status?></h1>
                        <a href="https://twitter.com/tech_meet"><h4>TWEETS</h4></a>
                    </div>
                </div>
<!--
                <div class="row">
                    <center>
                        <h3 style="color:#666666; font-size:1.8em; padding:2em 0em 1em 0em;">want to contact us?</h3>
                    </center> 
                </div>
                <div class="row">
                    <div class="large-3 columns">
                        <input type="text" placeholder="Name:" class="footerInputs radius">
                    </div>
                    <div class="large-3 columns">
                        <input type="text" placeholder="Email:" class="footerInputs radius" >
                    </div>
                    <div class="large-3 columns">
                        <input type="text" placeholder="Message:" class="footerInputs radius">
                    </div>
                    <div class="large-3 columns inline">
                        <span class="tiny button expand radius" id="contact_form">SUBMIT</span>
                    </div>
                </div>
-->
            </div>
            <div class="footer2" style="padding:2em 0em 1em 0em;">
                <div class="row">
                    <p>&copy; Tech Meet 2014</p>
                </div>
            </div>
            
            
            
        </div>
        
        
        <script src="js/vendor/jquery.js"></script>
        <script src="js/foundation.min.js"></script>
        <script src="js/foundation/foundation.equalizer.js"></script>
        <script src="js/custom.js"></script>
        <script>
            $(document).foundation();
        </script>
        
        <!--        Form script-->
        <script>
            function showForm(){
                document.getElementById("longForm").setAttribute("class","shw");
                $('#longForm').addClass('animated fadeInDown');
            }
        </script>
        <script>
            
            $("#citySelector").on("change", function() {
                if(this.value==="Other")
                {
                    document.getElementById("cityM").setAttribute("class","shw");
                }
                else{
                    // document.getElementById("cityM").setAttribute("class","hid");
                    $('#cityM').addClass('animated fadeOut');
                }
            });
            
            
            function osSelectOff(){
                $('#selectOs').addClass('animated fadeOut');
                //document.getElementById("selectOs").setAttribute("class","hid");
                
            }
            function osSelectOn(){
                document.getElementById("selectOs").setAttribute("class","shw");
                $('#selectOs').addClass('animated fadeIn');
            }
            
            function showProfessional(){
                document.getElementById("compName").setAttribute("class","shw");
                $('#compName').addClass('animated fadeIn');
                document.getElementById("collName").setAttribute("class","hid");
            }
            function showStudent(){
                document.getElementById("collName").setAttribute("class","shw");
                $('#collName').addClass('animated fadeIn'); 
                document.getElementById("compName").setAttribute("class","hid");
            }
            function redirect(){
                document.getElementById("redirection").setAttribute("class","shw");
                $('#redirection').addClass('animated fadeIn'); 
            }
            function thnku(){
                document.getElementById("thanku").setAttribute("class","shw");
                $('#thanku').addClass('animated fadeIn'); 
            }
            
        </script>
        <!-- ClickScroll -->
        
        <script type="text/javascript">
            
            $(function(){
                $("a.js_onPageLink").bind("click", function (event) {
                    event.preventDefault ? event.preventDefault() : event.returnValue = false;
                    var target = $(this).attr("href");
                    $("html, body").stop().animate({
                        scrollLeft: $(target).offset().left,
                        scrollTop: $(target).offset().top
                    }, 1200);
                });
            });
            
        </script>
        <!-- ClickScroll Ends -->
        
    </body>
</html>
