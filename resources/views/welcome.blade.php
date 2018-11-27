@extends('layouts.master')

@section('content')
    @include('layouts.sidenav')
    @include('layouts.slider')

    <section class="tri-column-fluid">
    	<div class="tri-column-outer clearfix">
        	
            <!--Column-->
            <article class="column default-column">
            	<div class="pattern-layer"></div>
                
                <div class="column-inner">	
                    <h3>Help 10140 people for education</h3>
                    <h4>No one has ever become poor by giving</h4>
                    <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</div>
                    <div class="text-right link"><a href="#" class="theme-btn btn-style-one">BECOME A VOLUNTEER</a></div>
                </div>
            </article>
            
            <!--Carousel Column-->
            <article class="column carousel-column" style="background-image:url(images/background/carousel-bg.jpg);">
            	<div class="pattern-layer"></div>
                
                <div class="column-inner">
                	<h3>People need your help every day.</h3>
                    <h4>No one has ever become poor by giving</h4>
                    <div class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy 
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</div>
                    <div class="text-right link"><a href="#" class="theme-btn btn-style-one">Make a Donation</a></div>
                </div>
                
            </article>
            
            <!--Progress Column-->
            <article class="column progress-column">
            	<div class="pattern-layer"></div>
                
                <div class="column-inner">	
                    <h3>Our company served over</h3>
                    <h2>24121012</h2>
                    <h3 class="museo-font">children in 32 countries</h3>
                    <br><br>
                    <div class="text-right link"><a href="#" class="theme-btn btn-style-two">CHECK OUR PROGRAM</a></div>
                </div>
            </article>
            
        </div>
    </section>
    
    <!--Two Column-->
    <section class="two-column no-padd-bottom">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Text Column-->
                <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="text-column">
                    	<div class="sec-title">
                        	<h2>Become a part of <strong> the world</strong></h2>
                        </div>
                        <div class="text">
                        	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et 
                                justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor 
                                sit amet. <br>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo 
                                duo dolores et ea rebum.</p>
                        </div>
                        <br>
                        <div class="link text-right"><a href="#" class="theme-btn read-more"><span class="fa fa-angle-right"></span> &ensp;Read More</a></div>
                    </div>
                </div>
                
                <!--Video Column-->
                <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                	<div class="responsive-video">
                    	<iframe height="170" allowfullscreen="" src="http://player.vimeo.com/video/56999995?color=ffffff"></iframe>
                    </div>
                </div>
            
            
            </div>
        </div>
    </section>
    
    <!--Four Column / Current Projects-->
    <section class="four-column current-projects no-padd-top">
    	<div class="auto-container">
        	<div class="sec-title clearfix">
                <h2 class="pull-left">Our current <strong>projects</strong></h2>
                <div class="link pull-right"><a href="#"><span class="fa fa-angle-right"></span> See All</a></div>
            </div>
                        
        	<div class="row clearfix">
            	
                <!--Project Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/index.jpg" alt="" title="Volunteer"></a>
                        	<div class="icon-box"><a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a></div>
                        </figure>
                        <div class="lower-part">
                        	<div class="text">
                            	<h3>Help to get water in Africa</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
                                    labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                            </div>
                            <div class="proj-donation">
                            	<div class="info"><strong>Donation : </strong> $24,241 / $35,000</div>
                                <div class="bar-outer">
                                	<div class="bar-inner" data-don-total="35000" data-don-received="24241"></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Project Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/index2.jpg" alt="" title="Volunteer"></a>
                        	<div class="icon-box"><a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a></div>
                        </figure>
                        <div class="lower-part">
                        	<div class="text">
                            	<h3>Help for education of kids</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
                                    labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                            </div>
                            <div class="proj-donation">
                            	<div class="info"><strong>Donation : </strong> $17,241 / $25,000</div>
                                <div class="bar-outer">
                                	<div class="bar-inner" data-don-total="25000" data-don-received="17241"></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Project Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/index3.jpg" alt="" title="Volunteer"></a>
                        	<div class="icon-box"><a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a></div>
                        </figure>
                        <div class="lower-part">
                        	<div class="text">
                            	<h3>Spend food in Ughanda</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut l
                                    abore et dolore magna aliquyam erat, sed diam voluptua.</p>
                            </div>
                            <div class="proj-donation">
                            	<div class="info"><strong>Donation : </strong> $47241 / $50,000</div>
                                <div class="bar-outer">
                                	<div class="bar-inner" data-don-total="50000" data-don-received="47241"></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Project Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 column project-column wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/index4.jpg" alt="" title="Volunteer"></a>
                        	<div class="icon-box"><a href="#" class="heart-icon img-circle"><span class="flaticon-favorite21"></span></a></div>
                        </figure>
                        <div class="lower-part">
                        	<div class="text">
                            	<h3>Spend for houses in Africa</h3>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna 
                                    aliquyam erat, sed diam voluptua.</p>
                            </div>
                            <div class="proj-donation">
                            	<div class="info"><strong>Donation : </strong> $37001 / $77,000</div>
                                <div class="bar-outer">
                                	<div class="bar-inner" data-don-total="77000" data-don-received="37001"></div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            
            
            </div>
        </div>
    </section>
    
    <!--Parallax Section-->
    <section class="parallax-section" style="background-image:url(images/parallax/image-1.jpg);">
    	<div class="auto-container">
        	<div class="text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            	<h2>Are you ready to volunteer?</h2>
                <h3>start one of our programm today and help people in need</h3>
                <div class="line"></div>
                <a class="theme-btn light-btn" href="#">BECOME A VOLUNTEER</a>
                <a class="theme-btn light-btn" href="#">MAKE A DONATION</a>
                
            </div>
        </div>
    </section>
    
    <!--Four Column / Team Section-->
    <section class="four-column team-section">
    	<div class="auto-container">
        	<div class="sec-title">
                <h2>Our group of <strong>volunteers</strong></h2>
            </div>
                        
        	<div class="row clearfix">
            	
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/indexteam.jpg" alt="" title="Volunteer"></a>
                            <div class="tag-title"><span>Top</span></div>
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  
                                    <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/indexteam2.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  
                                    <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/indexteam3.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  
                                    <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                <!--Team Member-->
                <div class="col-md-3 col-sm-6 col-xs-12 column team-member">
                	<article class="column-inner hvr-float-shadow">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/indexteam4.jpg" alt="" title="Volunteer"></a>
                            
                        </figure>
                        <div class="lower-part">
                        	<h3>Jonathan Doe</h3>
                            <div class="info">
                            	<p><span class="icon flaticon-telephone114"></span> <strong>Mobile</strong> :  +49 123 456 789</p>
                                <p><span class="icon flaticon-letter110"></span> <strong>E-Mail</strong> :  
                                    <a href="mailto:johndoe@email.com">johndoe@email.com</a></p>
                            </div>
                            <div class="social-links">
                            	<a href="#" class="fa fa-facebook-f"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                            </div>
                        </div>
                    </article>
                </div>
                
                
            
            
            </div>
        </div>
    </section>
    
    <!--Our Programs-->
    <section class="programs-section no-padd-top">
    	<div class="auto-container">
        	<div class="sec-title">
                <h2>Our volunteer <strong>programs</strong></h2>
            </div>
                        
        	<div class="row clearfix">
            	
                <!--Program Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/indexteam5.jpg" alt="" title="Volunteer Program"></a>
                        	<a href="#" class="overlay-box">
                            	<h3 class="post-title">Free volunteering in Africa</h3>
                                <span class="icon-arrow flaticon-right11"></span>
                            </a>
                        </figure>
                        <div class="program-info">5411 volunteers / 1412 donations / location: <strong>Africa</strong></div>
                    </article>
                </div>
                
                <!--Program Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/indexteam6.jpg" alt="" title="Volunteer Program"></a>
                        	<a href="#" class="overlay-box bg-red">
                            	<h3 class="post-title">Join our volunteering team</h3>
                                <span class="icon-arrow flaticon-right11"></span>
                            </a>
                        </figure>
                        <div class="program-info">2411 volunteers / 5312 donations / location: <strong>USA</strong></div>
                    </article>
                </div>
                
                <!--Program Column-->
                <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                	<article class="column-inner hvr-float">
                    	<figure class="image-box">
                        	<a href="#"><img src="image/indexteam8.jpg" alt="" title="Volunteer Program"></a>
                        	<a href="#" class="overlay-box bg-green">
                            	<h3 class="post-title">Help children for a better education</h3>
                                <span class="icon-arrow flaticon-right11"></span>
                            </a>
                        </figure>
                        <div class="program-info">5314 volunteers / 3486 donations / location: <strong>Ughanda</strong></div>
                    </article>
                </div>
            
            
            </div>
        </div>
    </section>
    
    
    <!--Fact Counter-->
    <section class="fact-counter" style="background-image:url(images/parallax/image-2.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
        		
                <!--Counter Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn" data-wow-delay="0ms">
                    <div class="count-outer text-theme-clr">
                        <span class="icon flaticon-hospital35"></span> 
                        <span class="count-text" data-speed="2000" data-stop="12532">0</span>
                    </div>
                    <div class="counter-title">DONATIONS MADE</div>
                </div>
                
                <!--Counter Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn" data-wow-delay="0ms">
                    <div class="count-outer text-red">
                        <span class="icon flaticon-smiley3"></span> 
                        <span class="count-text" data-speed="3000" data-stop="54216">0</span>
                    </div>
                    <div class="counter-title">HAPPY CHILDREN</div>
                </div>
                
                <!--Counter Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn" data-wow-delay="0ms">
                    <div class="count-outer text-yellow">
                        <span class="icon flaticon-like80"></span>
                        <span class="count-text" data-speed="1500" data-stop="2342">0</span></div>
                    <div class="counter-title">VOLUNTEERING HELPERS</div>
                </div>
                
                <!--Counter Column-->
                <div class="col-md-3 col-sm-6 col-xs-12 counter-column wow fadeIn" data-wow-delay="0ms">
                    <div class="count-outer text-green">
                        <span class="icon flaticon-hand-1"></span> 
                        <span class="count-text" data-speed="2500" data-stop="32123">0</span>
                    </div>
                    <div class="counter-title">EDUCATED CHILDREN</div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!--Contact Us Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="sec-title">
                <h2>Contact <strong>us</strong></h2>
            </div>
            <div class="sec-text">
            	<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                     ut labore et dolore magna aliquyam erat, sed diam voluptua. <br>At vero eos et accusam et 
                     justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus 
                     est Lorem ipsum dolor sit amet.</p>
            </div>
        	<div class="form">
        		
                <form id="contact-form" method="post" action="http://world5.commonsupport.com/html/volunteer/sendemail.php">
                	<div class="row clearfix">
                    	<div class="form-group col-md-4 col-sm-6 col-xs-12">
                        	<div class="form-group-inner">
                                <div class="icon-box"><label for="your-name"><span class="icon flaticon-user168"></span></label></div>
                                <div class="field-outer">
                                    <input type="text" name="username" id="your-name" placeholder="Your Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                        	<div class="form-group-inner">
                                <div class="icon-box"><label for="your-email"><span class="icon flaticon-new100"></span></label></div>
                                <div class="field-outer">
                                    <input type="email" name="email" id="your-email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                        	<div class="form-group-inner">
                                <div class="icon-box"><label for="your-subject"><span class="icon flaticon-edition2"></span></label></div>
                                <div class="field-outer">
                                    <input type="text" name="subject" id="your-subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                        	<div class="form-group-inner">
                            	<textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-right">
                        	<button class="hvr-bounce-to-right" type="submit" name="submit-form">Send Message &ensp; 
                                <span class="icon flaticon-envelope32"></span>
                            </button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
    
    
    <!--Map Section-->
    <section class="map-section">
    	<div class="map-container" id="map-location"></div>
    </section>
    
    
    <!--Client Logos-->
    <section class="sponsors-section">
    	<div class="container">
        	<ul class="slider">
            	<li><a href="#"><img src="images/clients/logo-6.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-7.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-8.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-9.png" alt="" title=""></a></li>
                <li><a href="#"><img src="images/clients/logo-10.png" alt="" title=""></a></li>
            </ul>
        </div>
    </section>
@endsection