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
    
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 

<body class="about-page">   
    <div class="header-wrapper header-wrapper-about">
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
        <section class="promo section">
            <div class="container text-center">                
                <h2 class="title">About Us</h2>
                <p class="intro">We believe rhoncus lectus vehicula fermentum tincidunt. Nunc tincidunt felis pulvinar, mollis sapien ac, malesuada ante</p>
            </div><!--//container-->
        </section><!--//promo-->
    </div><!--//header-wrapper-->
    
    <!-- ******team Section****** -->
    <section id="team" class="team section">
        <div class="container">
            <h2 class="title text-center">Meet the team</h2>
            <p class="intro text-center">In vehicula accumsan vestibulum. Sed convallis massa ac nisi sodales, ac commodo nibh eleifend. Vivamus at vestibulum quam. Vivamus feugiat elit et elit viverra, et euismod lorem tincidunt. Suspendisse pharetra feugiat magna.</p>
            <div class="row">
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="row">
                            <figure class="figure col-md-5 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="assets/images/team/member-1.jpg" alt=""/>
                            </figure>
                            <div class="info col-md-7 col-sm-12 col-xs-12">
                                <h3 class="name">James Lee</h3>
                                <h4 class="role">Lead Developer</h4>
                                <p>Sed vel ultricies quam. Ut lacus odio, cursus in quam sit amet, gravida dapibus ante. Vestibulum viverra imperdiet diam vel condimentum. Nunc sit amet orci quis mauris mollis sodales. Sed sed massa non elit interdum porttitor.</p>
                            </div><!--//info-->
                        </div><!--//row-->
                        <div class="social text-center">
                            <ul class="social-list list-inline">
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github-alt"></i></a></li>
                            </ul>
                        </div><!--//social-->
                    </div><!--//item-inner-->                    
                </div><!--//item-->
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="row">
                            <figure class="figure col-md-5 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="assets/images/team/member-2.jpg" alt=""/>
                            </figure>
                            <div class="info col-md-7 col-sm-12 col-xs-12">
                                <h3 class="name">Jason Powell</h3>
                                <h4 class="role">Lead Developer</h4>
                                <p>Integer pretium auctor molestie. Nullam augue risus, suscipit a dictum ut, tincidunt id dolor. Nullam pulvinar metus a ante vestibulum bibendum.</p>
                            </div><!--//info-->
                        </div><!--//row-->
                        <div class="social text-center">
                            <ul class="social-list list-inline">
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github-alt"></i></a></li>
                            </ul>
                        </div><!--//social-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="row">
                            <figure class="figure col-md-5 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="assets/images/team/member-3.jpg" alt=""/>
                            </figure>
                            <div class="info col-md-7 col-sm-12 col-xs-12">
                                <h3 class="name">Sara Valdez</h3>
                                <h4 class="role">UX/UI Designer</h4>
                                <p>Vivamus a lectus in neque sagittis finibus. Ut consectetur ex eget eleifend pellentesque. Sed congue ligula eu diam lobortis tristique. Aenean ullamcorper dui quis ante posuere</p>
                            </div><!--//info-->
                        </div><!--//row-->
                        <div class="social text-center">
                            <ul class="social-list list-inline">
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div><!--//social-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="row">
                            <figure class="figure col-md-5 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="assets/images/team/member-4.jpg" alt=""/>
                            </figure>
                            <div class="info col-md-7 col-sm-12 col-xs-12">
                                <h3 class="name">Larry Fox</h3>
                                <h4 class="role">Full Stack Developer</h4>
                                <p>Pellentesque pharetra, ipsum a luctus condimentum, nulla urna sollicitudin augue, id pulvinar quam diam eget nisi. Vestibulum et tortor in turpis mattis hendrerit at vel ligula. Phasellus mi erat.</p>
                            </div><!--//info-->
                        </div><!--//row-->
                        <div class="social text-center">
                            <ul class="social-list list-inline">
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github-alt"></i></a></li>
                            </ul>
                        </div><!--//social-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="row">
                            <figure class="figure col-md-5 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="assets/images/team/member-6.jpg" alt=""/>
                            </figure>
                            <div class="info col-md-7 col-sm-12 col-xs-12">
                                <h3 class="name">Vincent Fowler</h3>
                                <h4 class="role">Front-end Developer</h4>
                                <p>Mauris at erat volutpat, consectetur tortor nec, dapibus purus. Cras semper, neque varius maximus egestas, quam neque interdum sem, non placerat felis nunc et nulla.</p>
                            </div><!--//info-->
                        </div><!--//row-->
                        <div class="social text-center">
                            <ul class="social-list list-inline">
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github-alt"></i></a></li>
                            </ul>
                        </div><!--//social-->
                    </div><!--//item-inner-->
                </div><!--//item-->
                <div class="item col-md-6 col-sm-6 col-xs-12">
                    <div class="item-inner">
                        <div class="row">
                            <figure class="figure col-md-5 col-sm-12 col-xs-12">
                                <img class="img-responsive" src="assets/images/team/member-5.jpg" alt=""/>
                            </figure>
                            <div class="info col-md-7 col-sm-12 col-xs-12">
                                <h3 class="name">Kathy Morgan</h3>
                                <h4 class="role">Interaction Designer</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor ante at massa iaculis volutpat. In hac habitasse platea dictumst. Nunc pharetra neque libero.</p>
                            </div><!--//info-->
                        </div><!--//row-->
                        <div class="social text-center">
                            <div class="social-inner">
                                <ul class="social-list list-inline">
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!--//social-inner-->
                        </div><!--//social-->
                    </div><!--//item-inner-->
                </div><!--//item-->
            </div><!--//row-->
        </div><!--//container-->
    </section><!--//team-section-->
    
    <!-- ******Job Section****** -->
    <section class="join-us section">
        <div class="container">
            <h2 class="title text-center">Join Our Team</h2>
            <p class="intro text-center">We love what we do vestibulum tincidunt tincidunt nisl et consectetur mauris sed dui non sapien rhoncus volutpat pellentesque</p>
            <div class="row">
                <div class="info col-md-7 col-sm-6 col-xs-12">
                    <p>You can use this section to advertise jobs or attract freelancers to join your team... Fringilla potenti morbi sociosqu dignissim sociis ridiculus. Magna parturient. Auctor convallis. Elementum adipiscing est. Rutrum. Viverra hac congue aliquam accumsan nam laoreet ut nascetur eu vulputate diam. Lacinia placerat ad lectus. Phasellus sit enim, metus quam hymenaeos fringilla venenatis natoque.</p>
                    <p>Sollicitudin hendrerit facilisis. Pretium quisque blandit justo massa condimentum varius lobortis, hymenaeos nec phasellus lectus Convallis convallis magnis pellentesque blandit Molestie sociosqu pede.</p>
                    
                    <p>If you are an iOS/Android developer interested in joining our team, please email your CV to <a href="#">jobs@devstudio.com</a></p>
                </div>
                <div class="partner col-md-4 col-sm-5 col-xs-12 col-md-push-1 col-sm-push-1 col-xs-push-0">
                    <h3 class="sub-title">Want to partner with us?</h3>
                    <p>If you are a development focused team you might want to attract design partners here...Vulputate sed Nostra elit consequat penatibus. Hac habitant inceptos scelerisque tempor dis purus orci. Risus porta. Arcu gravida, cubilia taciti, ultricies Nisi posuere magna penatibus non suspendisse in mus hendrerit.</p>
                    <a href="#" class="btn btn-cta btn-cta-primary">Contact us today!</a>
                </div><!--//partner-->
            </div><!--//row-->
        </div><!--//row-->
    </section><!--//job-->
                                
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
    
    <!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
    <script src="assets/js/demo/style-switcher.js"></script>
</body>
</html> 

