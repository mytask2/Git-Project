<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>Mazegeek</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:700,300italic,400italic,700italic,300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Russo+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->    
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/elegant_font/css/style.css">
    <link rel="stylesheet" href="assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl.theme.css">
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="home-page">     
    <div class="header-wrapper header-wrapper-home">
        <!-- ******HEADER****** --> 
        <header id="header" class="header navbar-fixed-top">  
            <div class="container">       
                <h1 class="logo">
                    <a href="{{ URL::to('/')}}">
                     <img class="img-responsive" src="{{ asset('assets/images/logos/logo.png')}}" alt="" style="width:185px; height:94px !important; margin:10px 10px;" />
                    <!--<span class="highlight">Dev</span>Studio--></a>
                </h1><!--//logo-->
                <nav class="main-nav navbar-right" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->
                    <div id="navbar-collapse" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active nav-item"><a href="{{URL::to('/')}}">Home</a></li>
                            <li class="nav-item"><a href="{{URL::to('work')}}">Work</a></li> 
                            <!--<li class="nav-item dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="work.html">Work <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="work.html">Our Work</a></li>
                                           
                                </ul>
                            </li>//dropdown--> 
                            <li class="nav-item"><a href="{{URL::to('about')}}">About</a></li>                             
                            <li class="nav-item last"><a href="{{URL::to('contact')}}">Contact</a></li>
                        </ul><!--//nav-->
                    </div><!--//navabr-collapse-->
                </nav><!--//main-nav-->
            </div><!--//container-->
        </header><!--//header-->   
        <div class="bg-slider-wrapper">
            <div id="bg-slider" class="flexslider bg-slider">
                <ul class="slides">
                    <li class="slide slide-1"></li>
                    <li class="slide slide-2"></li>
                    <li class="slide slide-3"></li>
                </ul>
            </div>
        </div><!--//bg-slider-wrapper--> 
        <section id="home-promo" class="home-promo section">
            <div class="container text-center">                
                <h2 class="title">
                    <span class="upper">We build</span>
                    <span class="middle">Web and Mobile Apps</span>
                    <span class="bottom">for startups and agencies</span>
                </h2>
                <button class="btn btn-cta btn-cta-primary" type="button" data-toggle="modal" data-target="#modal-contact" data-backdrop="static">Talk to us</button>
            </div><!--//container-->
        </section><!--//promo-->
    </div><!--//header-wrapper-->
       
    <!-- ******Why Section****** -->
    <section id="who" class="who section">
        <div class="container text-center">
            <h2 class="title text-center">Who we are</h2>
            <p class="intro text-center">We are a small team of web developers and designers based in XYZ. We are specialised in JavaScript, AngularJS and Python. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
            <div class="row benefits text-center">
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe007;"></div>                        
                        <h3 class="sub-title">Skilled team</h3>
                        <div class="desc">
                            <p>Tell your potential client why they should choose your service and how you are different from your competitors.</p>
                        </div>                
                    </div>       
                </div><!--//item-->
                <div class="item col-md-3 col-sm-6 col-xs-12 sm-break">
                    <div class="item-inner">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe01c;"></div>
                        <h3 class="sub-title">Agile approach</h3>
                        <div class="desc">
                            <p>Tell your potential client why they should choose your service and how you are different from your competitors.</p>
                        </div>   
                    </div><!--//item-inner-->                    
                </div><!--//item-->
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe031;"></div>
                        <h3 class="sub-title">High quality code</h3>
                        <div class="desc">
                            <p>Tell your potential client why they should choose your service and how you are different from your competitors.</p>
                        </div>            
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-3 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="fs1" aria-hidden="true" data-icon="&#xe100;"></div>                        
                        <h3 class="sub-title">No overheads</h3>
                        <div class="desc">
                            <p>Tell your potential client why they should choose your service and how you are different from your competitors.</p>
                        </div>         
                    </div><!--//item-inner-->              
                </div><!--//item-->
            </div><!--//row-->
            <a class="btn btn-cta btn-cta-secondary" href="about.html">More about us</a>
        </div><!--//container-->
    </section><!--//who-->
    
    <!-- ******Latest work section****** -->
    <section id="latest-work" class="latest-work section">
        <div class="container-fluid text-center">
            <h2 class="title text-center">Our Latest Work</h2>
            <div id="work-carousel" class="items owl-carousel owl-theme">
                <div class="item item-1">
                    <div class="row">
                        <figure class="figure-container col-md-6 col-sm-12 col-xs-12">
                            <a href="http://wrapbootstrap.com/preview/WB0N38R04" target="_blank"></a>
                        </figure>
                        <div class="content col-md-6 col-sm-12 col-xs-12">
                            <div class="content-inner">
                                <h3 class="project-title">Velocity web application</h3>
                                <ul class="meta list-unstyled">
                                    <li><strong>Client:</strong> 3rd Wave Media</li>
                                    <li><strong>What we did:</strong> SaaS development, UX design</li>
                                </ul><!--//meta-->
                                <div class="desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales dolor ut ligula faucibus, nec mattis nibh eleifend. Duis et enim at lacus pharetra mollis molestie nec magna. Maecenas tristique laoreet tristique...</p>
                                </div><!--//desc-->
                                <p class="link" ><i class="fa fa-briefcase"></i> <a class="more-link" href="case-study-1.html">Read full case study</a></p>
                                <p class="link" ><i class="fa fa-external-link"></i> <a class="site-link" href="http://wrapbootstrap.com/preview/WB0N38R04" target="_blank">Website link</a></p>
                            </div><!--//content-inner-->
                        </div><!--//content-->
                    </div><!--//row-->
                </div><!--//item-->
                <div class="item item-2">
                    <div class="row">
                        <figure class="figure-container col-md-6 col-sm-12 col-xs-12">
                            <a class="img-link" href="http://wrapbootstrap.com/preview/WB09R23P8" target="_blank"></a>
                        </figure>
                        <div class="content col-md-6 col-sm-12 col-xs-12">
                            <div class="content-inner">
                                <h3 class="project-title">Delta mobile app </h3>
                                <ul class="meta list-unstyled">
                                    <li><strong>Client:</strong> App Startup</li>
                                    <li><strong>What we did:</strong> App development</li>
                                </ul><!--//meta-->
                                <div class="desc">
                                    <p>Mauris in vestibulum ex. Donec vel malesuada tortor. Etiam consequat semper pulvinar. Integer sit amet felis nisl. Proin leo metus, volutpat vel fringilla vel, faucibus et mi. Duis finibus erat erat, quis mollis...</p>
                                </div><!--//desc-->
                                <p class="link" ><i class="fa fa-briefcase"></i> <a class="more-link" href="case-study-2.html">Read full case study</a></p>
                                <p class="link" ><i class="fa fa-external-link"></i> <a class="site-link" href="http://wrapbootstrap.com/preview/WB09R23P8" target="_blank">Website link</a></p>
                            </div><!--//content-inner-->
                        </div><!--//content-->
                    </div><!--//row-->
                </div><!--//item-->
                <div class="item item-3">
                    <div class="row">
                        <figure class="figure-container col-md-6 col-sm-12 col-xs-12">
                            <a class="img-link" href="http://wrapbootstrap.com/preview/WB07364T3" target="_blank"></a>
                        </figure>
                        <div class="content col-md-6 col-sm-12 col-xs-12">
                            <div class="content-inner">
                                <h3 class="project-title">Tempo </h3>
                                <ul class="meta list-unstyled">
                                    <li><strong>Client:</strong> Startup Week</li>
                                    <li><strong>What we did:</strong> Site design &amp; development</li>
                                </ul><!--//meta-->
                                <div class="desc">
                                    <p>Sed ornare suscipit risus, sed elementum justo porta ac. Duis ultricies lobortis nibh sed facilisis. Etiam eu leo sapien. Integer gravida at urna ac bibendum. Nullam eu orci at felis fermentum lobortis...</p>
                                    <p class="link" ><i class="fa fa-briefcase"></i> <a class="more-link" href="case-study-1.html">Read full case study</a></p>
                                    <p class="link" ><i class="fa fa-external-link"></i> <a class="site-link" href="http://wrapbootstrap.com/preview/WB07364T3" target="_blank">Website link</a></p>
                                </div><!--//desc-->
                            </div><!--//conten-inner-->
                        </div><!--//content-->
                    </div><!--//row-->
                </div><!--//item-->
            </div><!--//owl-carousel-->
            <a class="btn btn-cta btn-cta-secondary" href="work.html">View all case studies</a>
        </div><!--container-fluid-->
    </section><!--//latest-work-->
    
    <!-- ******Testimonials Section****** -->
    <section id="testimonials" class="testimonials section">
        <div class="container">
            <h2 class="title text-center">Testimonials</h2>
            <p class="intro text-center">Don’t just take our word for it – see what our clients are saying</p>
            <div class="row">
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="quote-container">
                            <i class="fa fa-quote-left"></i> 
                            <blockquote class="quote">We had great experience working with Phasellus ut cursus tellus. Etiam ullamcorper varius diam, nec consequat dolor gravida non. Nullam commodo feugiat arcu, ut scelerisque nisl vulputate eget. Cras a euismod elit. 
                                
                            </blockquote><!--//quote-->                              
                        </div><!--//quote-->
                        <div class="meta">
                            <div class="profile">
                                <img class="img-circle" src="assets/images/client/client-profile-1.png" alt="" />
                                <p class="name">Katherine Hamilton<br />
                                    <span class="source-title">Product Manager</span>
                                </p>
                            </div><!--//profile-->
                            <div class="client-logo">
                                <img class="img-responsive" src="assets/images/client/client-logo-1.png" alt="" />
                            </div><!--//client-logo-->
                        </div><!--//meta-->        
                    </div><!--//item-inner-->        
                </div><!--//item-->
                
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="quote-container">
                            <i class="fa fa-quote-left"></i> 
                            <blockquote class="quote">Cras condimentum erat vel quam dignissim, eu venenatis velit porta. Praesent fermentum, mi sit amet mollis fringilla, ex risus condimentum mauris, at dapibus ipsum turpis non ipsum.                           
                            </blockquote><!--//quote-->                              
                        </div><!--//quote-->
                        <div class="meta">
                            <div class="profile">
                                <img class="img-circle" src="assets/images/client/client-profile-2.png" alt="" />
                                <p class="name">Aaron Brown<br />
                                    <span class="source-title">Marketing Director</span>
                                </p>
                            </div><!--//profile-->
                            <div class="client-logo">
                                <img class="img-responsive" src="assets/images/client/client-logo-2.png" alt="" />
                            </div><!--//client-logo-->
                        </div><!--//meta-->     
                    </div><!--//item-inner-->           
                </div><!--//item-->
                
                <div class="clearfix"></div>
                
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="quote-container">
                            <i class="fa fa-quote-left"></i> 
                            <blockquote class="quote">Pellentesque nec maximus justo, a ultrices ligula. Duis sollicitudin suscipit arcu eget interdum. Nullam et porttitor sem, id iaculis eros. Sed feugiat leo et ligula pulvinar, et lobortis velit pretium.                         
                            </blockquote><!--//quote-->                              
                        </div><!--//quote-->
                        <div class="meta">
                            <div class="profile">
                                <img class="img-circle" src="assets/images/client/client-profile-3.png" alt="" />
                                <p class="name">Phillip Perry<br />
                                    <span class="source-title">Product Manager</span>
                                </p>
                            </div><!--//profile-->
                            <div class="client-logo">
                                <img class="img-responsive" src="assets/images/client/client-logo-3.png" alt="" />
                            </div><!--//client-logo-->
                        </div><!--//meta-->  
                    </div><!--//item-inner-->              
                </div><!--//item-->
                
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="quote-container">
                            <i class="fa fa-quote-left"></i> 
                            <blockquote class="quote">We are impressed by lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tellus nisi, maximus vel risus vel, fermentum faucibus magna. Aliquam sed aliquet eros. Nunc nec aliquet ligula.
                            </blockquote><!--//quote-->                              
                        </div><!--//quote-->
                        <div class="meta">
                            <div class="profile">
                                <img class="img-circle" src="assets/images/client/client-profile-4.png" alt="" />
                                <p class="name">Victoria Simmons<br />
                                    <span class="source-title">Product Designer</span>
                                </p>
                            </div><!--//profile-->
                            <div class="client-logo">
                                <img class="img-responsive" src="assets/images/client/client-logo-4.png" alt="" />
                            </div><!--//client-logo-->
                        </div><!--//meta-->  
                    </div><!--//item-inner-->              
                </div><!--//item-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//testimonials-->          
    
    <!-- ******Logos Section****** -->
    <section id="logos" class="logos section">
        <div class="container text-center">
            <h2 class="title">Who we have worked with</h2>
            <p class="intro">SaaS / Mobile apps / Marketing sites / Internal apps</p>
            <ul class="logo-list list-inline row">
                <li class="col-md-3 col-sm-3 col-xs-6"><a href="#"><img class="img-responsive" src="assets/images/logos/logo-1.png" alt="" /></a></li>
                <li class="col-md-3 col-sm-3 col-xs-6 xs-break"><a href="#"><img class="img-responsive" src="assets/images/logos/logo-2.png" alt="" /></a></li>
                <li class="col-md-3 col-sm-3 col-xs-6"><a href="#"><img class="img-responsive" src="assets/images/logos/logo-3.png" alt="" /></a></li>                   
                <li class="col-md-3 col-sm-3 col-xs-6"><a href="#"><img class="img-responsive" src="assets/images/logos/logo-4.png" alt="" /></a></li> 
            </ul><!--//logo-list-->
            <ul class="logo-list list-inline row last">
                <li class="col-md-3 col-sm-3 col-xs-6"><a href="#"><img class="img-responsive" src="assets/images/logos/logo-5.png" alt="" /></a></li>
                <li class="col-md-3 col-sm-3 col-xs-6 xs-break"><a href="#"><img class="img-responsive" src="assets/images/logos/logo-6.png" alt="" /></a></li>
                <li class="col-md-3 col-sm-3 col-xs-6"><a href="#"><img class="img-responsive" src="assets/images/logos/logo-7.png" alt="" /></a></li>                   
                <li class="col-md-3 col-sm-3 col-xs-6"><a href="#"><img class="img-responsive" src="assets/images/logos/logo-8.png" alt="" /></a></li>                   
            </ul><!--//logos-list-->               
        </div><!--//container-->
    </section><!--//logos-->
    
    <!-- ******CTA Section****** -->
    <section id="cta-section" class="cta-section section text-center home-cta-section">
        <div class="container">
           <h2 class="title">Want to have a quick chat?</h2>
           <p class="phone contact-info">
               <span class="intro">We are only a phone call away</span>
               <span class="info"><a href="tel:+08001234567">0800 123 4567</a></span>
           </p><!--//phone-->
           <p class="email contact-info">
               <span class="intro">You can also email us</span>
               <span class="info"><a href="mailto:hello@yourdevstudio.com">hello@yourdevstudio.com</a></span>
           </p><!--//phone-->              
        </div><!--//container-->
    </section><!--//cta-section-->
    
    <!-- ******Latest blog Section****** -->
    <section id="latest-blog" class="latest-blog section">
        <div class="container">
            <h2 class="title text-center">Latest Blog Posts</h2>
            <div class="row">
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="blog-post.html"><img class="img-responsive" src="assets/images/blog/blog-thumb-1.jpg" alt="" /></a>
                        </figure>
                        <div class="content-wrapper text-center">
                            <h3 class="sub-title"><a href="blog-post.html">DevStudio helps XYZ launch</a></h3>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales dolor ut ligula faucibus, nec mattis nibh eleifend. Duis et enim at lacus pharetra mollis molestie nec magna. Maecenas tristique laoreet tristique. Ut pellentesque diam nec odio hendrerit euismod.</p>
                            </div><!--//desc-->
                        </div><!--//content-wrapper text-center-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="blog-post.html"><img class="img-responsive" src="assets/images/blog/blog-thumb-2.jpg" alt="" /></a>
                        </figure>
                        <div class="content-wrapper text-center">
                            <h3 class="sub-title"><a href="blog-post.html">devAid - Free Bootstrap Theme</a></h3>
                            <div class="desc">
                                <p>Mauris libero leo, dapibus a congue ut, mollis sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus augue nec nulla ultricies, <a href="http://themes.3rdwavemedia.com/website-templates/devaid-free-bootstrap-theme-developers/" target="_blank">Download now</a> vitae tincidunt lacus scelerisque.</p>
                            </div><!--//desc-->
                        </div><!--//content-wrapper text-center-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="blog-post.html"><img class="img-responsive"  src="assets/images/blog/blog-thumb-3.jpg" alt="" /></a>
                        </figure>
                        <div class="content-wrapper text-center">
                            <h3 class="sub-title"><a href="blog-post.html">DevStudio Team Lorem Ipsum</a></h3>
                            <div class="desc">
                                <p>In vel mauris consequat, ullamcorper diam id, eleifend tellus. Phasellus elementum facilisis eleifend. Nullam imperdiet odio massa, et blandit augue porta vehicula. Proin venenatis ullamcorper enim, in vulputate nisi luctus eget. Justo vitae tincidunt vestibulum. Cras consectetur lacinia massa.</p>
                            </div><!--//desc-->
                        </div><!--//content-wrapper text-center-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <figure class="figure">
                            <a href="blog-post.html"><img class="img-responsive" src="assets/images/blog/blog-thumb-4.jpg" alt="" /></a>
                        </figure>
                        <div class="content-wrapper text-center">
                            <h3 class="sub-title"><a href="blog-post.html">Our Consectetur Adipiscing</a></h3>
                            <div class="desc">
                                <p>Aenean eget molestie ipsum, in commodo felis. Sed vitae enim est. Nunc at eros id purus vulputate elementum in vel nisi. Donec tempus turpis et viverra semper. Curabitur facilisis sem elit, vitae condimentum enim auctor ac. Sed orci magna, euismod eu mi eu, fringilla tincidunt orci. Phasellus molestie.</p>
                            </div><!--//desc-->
                        </div><!--//content-wrapper text-center-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//latest-blog-->
    
    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-3 col-sm-4 links-col">
                        <div class="footer-col-inner">
                            <h3 class="sub-title">Quick Links</h3>
                            <ul class="list-unstyled">
                                <li><a href="{{URL::to('/about')}}">About us</a></li>
                                <li><a href="{{URL::to('/work')}}">Our work</a></li>
                                <li><a href="{{URL::to('/contact')}}">Contact</a></li>                                
                                
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                    <div class="footer-col col-md-6 col-sm-8 blog-col">
                        <div class="footer-col-inner">
                            <h3 class="sub-title">Latest From Our Blog</h3>
                            <div class="item">
                                <figure class="figure">
                                    <img class="img-responsive" src="assets/images/blog/blog-tiny-thumb-1.jpg" alt="" />
                                </figure>
                                <div class="content">
                                    <h4 class="post-title"><a href="blog-post.html">DevStudio helps XYZ launch</a></h4>
                                    <p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sodales dolor ut ligula faucibus...</p>
                                    <ul class="meta list-inline">
                                        <li>18 Feb 2015</li>
                                        <li>James Lee</li>
                                    </ul>
                                </div><!--//content-->
                            </div>  
                            <div class="item">
                                <figure class="figure">
                                    <img class="img-responsive" src="assets/images/blog/blog-tiny-thumb-2.jpg" alt="" />
                                </figure>
                                <div class="content">
                                    <h4 class="post-title"><a href="blog-post.html">devAid - Free Bootstrap Theme</a></h4>
                                    <p class="intro">Mauris libero leo, dapibus a congue ut, mollis sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempus augue nec nulla ultricies...</p>
                                    <ul class="meta list-inline">
                                        <li>21 Dec 2014</li>
                                        <li>Vincent Fowler</li>
                                    </ul>
                                </div><!--//content-->
                            </div>                                                     
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col--> 
                    <div class="footer-col col-md-3 col-sm-12 contact-col">
                        <div class="footer-col-inner">
                            <h3 class="sub-title">Get In Touch</h3>
                            <p class="intro"></p>
                            <div class="row">
                                <p class="adr clearfix col-md-12 col-sm-4">
                                    <span class="fs1" aria-hidden="true" data-icon="&#xe01d;"></span>        
                                    <span class="adr-group">       
                                        <span class="street-address">56 College Green Road</span><br />
                                        <span class="city">Bristol</span><br />
                                        <span class="postal-code">BS1 XR18</span><br />
                                        <span class="country-name">UK</span>
                                    </span>
                                </p>
                                <p class="tel col-md-12 col-sm-4"><span class="fs1" aria-hidden="true" data-icon="&#x77;"></span><a href="tel:+08001234567">0800 123 4567</a></p>
                                <p class="email col-md-12 col-sm-4"><span class="fs1" aria-hidden="true" data-icon="&#xe010;"></span><a href="#">hello@yourdevstudio.com</a></p> 
                            </div> 
                        </div><!--//footer-col-inner-->            
                    </div><!--//foooter-col-->   
                </div>   
            </div>        
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container center">                                   
                <ul class="social-icons list-inline">
                    <li><a href="https://twitter.com/3rdwave_themes"><i class="fa fa-twitter"></i></a></li>                        
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.facebook.com/3rdwavethemes"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li class="last"><a href="#"><i class="fa fa-google-plus"></i></a></li>                     
                </ul> 
                <small class="copyright text-center">Copyright @ 2015 <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>                 
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
    
    <!-- Contact Modal -->
    <div class="modal modal-contact" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 id="contactModalLabel" class="modal-title text-center">Start your project today</h4>
                    <p class="intro text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit laoreet tortor consequat nisi scelerisque commodo etiam justo sapien.</p>
                </div>
                <div class="modal-body">
                    <ul class="contact-info list-inline text-center">
                        <li class="tel"><span class="fs1" aria-hidden="true" data-icon="&#x77;"></span><br /> <a href="+0800123456">0800 123 4567</a></li>
                        <li class="email"><span class="fs1" aria-hidden="true" data-icon="&#xe010;"></span><br /> <a href="#">hello@yourdevstudio.com</a></li>
                    </ul>
                    <form id="contact-form" class="contact-form" method="post" action="#">                    
                        <div class="row text-center">
                            <div class="contact-form-inner">
                                <div class="row">                                                           
                                    
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <label class="sr-only" for="cname">Your name</label>
                                        <input type="text" class="form-control" id="cname" name="name" placeholder="Your name" minlength="2" required>
                                    </div>                    
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                        <label class="sr-only" for="cemail">Email address</label>
                                        <input type="email" class="form-control" id="cemail" name="email" placeholder="Your email address" required>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <label class="sr-only" for="cmessage">Your message</label>
                                        <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="12" required></textarea>
                                    </div>
                                     <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                        <button type="submit" class="btn btn-block btn-cta btn-cta-primary">Send Message</button>
                                    </div>                           
                                </div><!--//row-->
                            </div>
                        </div><!--//row-->
                        <div id="form-messages"></div>
                    </form><!--//contact-form-->
                </div><!--//modal-body-->
            </div><!--//modal-content-->
        </div><!--//modal-dialog-->
    </div><!--//modal-->
    
    <!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->  
   
 
    <!-- Main Javascript -->          
    <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="assets/plugins/bootstrap-hover-dropdown.min.js"></script>
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>             
    <script type="text/javascript" src="assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>                                                                  
    <script type="text/javascript" src="assets/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="assets/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    
    <!-- Flexslider -->    
    <script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script> 
    <script type="text/javascript" src="assets/js/flexslider-custom.js"></script>     
    
    <!-- Form Validation -->
    <script type="text/javascript" src="assets/plugins/jquery.validate.min.js"></script> 
    <script type="text/javascript" src="assets/js/form-validation-custom.js"></script>
    
    <!-- Form iOS fix -->
    <script type="text/javascript" src="assets/plugins/isMobile/isMobile.min.js"></script>
    <script type="text/javascript" src="assets/js/form-mobile-fix.js"></script>
    
    <!-- Owl Carousel -->
    <script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.js"></script> 
    <script type="text/javascript" src="assets/js/owl-custom.js"></script> 
    
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>
    
</body>
</html> 

