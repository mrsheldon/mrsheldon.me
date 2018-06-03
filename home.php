

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 

<html class="no-js"> <!--<![endif]-->
    <head>
    <title>MrSheldon</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MrSheldon: Luki's Lead Developer | SysAdmin | Web Designer">
	<meta name="keywords" content="MrSheldon, MrSheldon#0001, Roy Lupo, Roee Lupo, Luki, Luki Bot, DeadlyForce" />
    <meta name="author" content="MrSheldon">    
    <link rel="shortcut icon" href="https://mrsheldon.me/assets/images/mrsheldon.png">  
    <meta name="twitter:card" value="summary" />
    <meta name="twitter:title" content="MrSheldon" />
    <meta name="twitter:description" content="MrSheldon: Luki's Lead Developer | SysAdmin | Web Designer" />
    <meta name="twitter:image" content="https://mrsheldon.me/assets/images/mrsheldon.png"> 
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <meta name="theme-color" content="#000000">
	<meta property="og:site_name" value="MrSheldon.me - Home">
    <meta property="og:title" content="MrSheldon" />
    <meta property="og:url" content="https://mrsheldon.me" /> 
    <meta property="og:description" content="MrSheldon: Luki's Lead Developer | SysAdmin | Web Designer" />
    <meta property="og:image" content="https://mrsheldon.me/assets/images/mrsheldon.png" /> 
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font_icon/css/pe-icon-7-stroke.css">
        <link rel="stylesheet" href="assets/font_icon/css/helper.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link href='https://mrsheldon.me/assets/images/mrsheldon.png' rel='stylesheet' type='text/css'>
        <script src="assets/js/modernizr.js"></script>
    </head>
    <body id="body">
        <!--[if lt IE 7]>
                <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header area -->
        <header id="header">
            <div class="center text-center">
                <h1 class="bigheadline">MrSheldon</h1>
				<h1 class="subheadline" class="undertitle">   ‍   <span class="txt-rotate" data-period="600" data-rotate='[ "Discord Developer", "Web Designer", "Luki`s Lead Developer", "Rick`s Lead Developer", "SysAdmin", "Discord HypeSquad Member", "Video Editor" ]'></span></h1>
				
				<script>
				var TxtRotate = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
};

TxtRotate.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];

  if (this.isDeleting) {
    this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
    this.txt = fullTxt.substring(0, this.txt.length + 1);
  }

  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

  var that = this;
  var delta = 300 - Math.random() * 100;

  if (this.isDeleting) { delta /= 2; }

  if (!this.isDeleting && this.txt === fullTxt) {
    delta = this.period;
    this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
    this.isDeleting = false;
    this.loopNum++;
    delta = 500;
  }

  setTimeout(function() {
    that.tick();
  }, delta);
};

window.onload = function() {
  var elements = document.getElementsByClassName('txt-rotate');
  for (var i=0; i<elements.length; i++) {
    var toRotate = elements[i].getAttribute('data-rotate');
    var period = elements[i].getAttribute('data-period');
    if (toRotate) {
      new TxtRotate(elements[i], JSON.parse(toRotate), period);
    }
  }
};
</script>
            </div>
            <div class="bottom">
                <a data-scroll href="#navigation" class="scrollDown animated pulse" id="scrollToContent"><i class="pe-7s-angle-down-circle pe-va"></i></a>
            </div>
        </header>

        <!-- Navigation area -->
        <section id="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-xs-6">
                    </div>
                    

                </div>
            </div>            
        </section>
        
        <!-- Content Area -->

        <!-- services section -->

         <section id="service" class="service-area">
            <div class="container">
                <h2 class="block_title">Services</h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="services">
                            <div class="service-wrap">    
                                <i class="pe-7s-science pe-dj pe-va"></i>
                                <h3>Web Design</h3>
                                <p>I can do websites for communities, companies, bots, projects and more.</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="services">
                            <div class="service-wrap">
                                <i class="pe-7s-monitor pe-dj pe-va"></i>
                                <h3>Software Development</h3>
                                <p>Knowledge of Java, Python, C, C++, C# and Swift.
								Development experience for Linux, Windows and MacOS.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="services">
                            <div class="service-wrap">
                                <i class="pe-7s-edit pe-dj pe-va"></i>
                                <h3>Maintenance</h3>
                                <p>With me, your product will never be down, I can maintenance your product 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="services">
                            <div class="service-wrap">
							                                <i class="pe-7s-config pe-dj pe-va"></i>

                                <h3>Setup</h3>
                                <p>Domains, Websites, Servers, Clouds I can setup everything for extremely small payment</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
        </section><!-- services -->
		  <section id="portfolio" class="portfolio-area">
            <div class="container">
                <h2 class="block_title">My Works</h2>
                <div class="row port cs-style-3">
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/mrsheldon.png" height="300" width="400" alt="img04">
                            <figcaption>
                                <h3>MrSheldon.me</h3>
                                <span>MrSheldon</span>
                                <a href="https://mrsheldon.me" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/luki.png" height="300" width="400" alt="img01">
                            <figcaption>
                                <h3>Luki</h3>
                                <span>MrSheldon</span>
                                <a href="https://luki.xyz" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 item-space">
                        <figure>
                            <img src="assets/images/rickbot.png" height="300" width="400" alt="img02">
                            <figcaption>
                                <h3>Rick</h3>
                                <span>MrSheldon</span>
                                <a href="https://rickbot.tk/" class="button" >Take a look</a>
                            </figcaption>
                        </figure>
                    </div>
                
                   
               
                </div>
            </div><!-- container -->
        </section><!-- portfolio -->
            <div id="social">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="scoialinks">
                                <h3><font color="white">To contact me please send me a message on Twitter</font></h3>
								 <style>
								.fab, .fas {
    padding-right: 10px;
    font-size: 35px;
    transition: all 0.25s ease;
}

.fab:hover, .fas:hover {
    font-size: 45px;
    text-shadow: 1px 1px 15px #000 !important
}
								.title, .wht {
    color: white
}

.blk {
    color: black;
}
								
.proj-logo {
    display: block;
    margin-left: auto;
    margin-right: auto;
    border-radius: 50%;
    transition: border-radius 0.25s ease
}

.proj-logo:hover {
    border-radius: 25%
}

								</style> 
								<div class="column"><a href="https://www.youtube.com/channel/UCroLHra28TO3Zalorw-uwqA"><i class="fab fa-youtube wht"></i></a><a href="https://twitter.com/MrSheldoNNN"><i class="fab fa-twitter wht"></i></a><a href="https://github.com/MrSheldon"><i class="fab fa-github wht"></i></a><a href="https://discord.gg/76PAmCv"><i class="fab fa-discord wht"></i></a><a href="http://blog.mrsheldon.me"><i class="fas fa-pencil-alt wht"></i></a></div>

                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- social -->
        </section><!-- contact -->

		      
        <!-- Footer Area -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright">Copyright © 2018 <a href="http://deadlyforce.net" targe="_blank">DeadlyForce</a> All Rights Reserved</p>

                    </div>
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </footer>

        <!-- Necessery scripts -->
        <script src="assets/js/jquery-2.1.3.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="assets/js/jquery.actual.min.js"></script>
        <script src="assets/js/smooth-scroll.js"></script>
        <script src="assets/js/owl.carousel.js"></script>
        <script src="assets/js/script.js"></script>

    </body>
</html>

