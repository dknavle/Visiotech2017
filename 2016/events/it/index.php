﻿<!DOCTYPE html>
<html>
    <head>
	<title>VisioTech 2016 | MGMs College of Engineering Nanded.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="/static/js/jquery-1.11.1.js"></script>
	<script src="/static/js/bootstrap.min.js"></script>
	<link href="/static/css/bootstrap.min.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="../static/js/html5shiv.js"></script>
	<script src="../static/js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="/events/style.min.css">
	<link rel="stylesheet" href="/style2.min.css">
	<script src="/script.js"></script>
    </head>
    <body>
	<div class="container content-pane">
	    <div class="row">
		<div class="col-xs-12">
		    <div style="min-height: 50px"></div>
		    <img id="visiotech-logo-back-img" src="/images/visiotech.png" class="img-responsive center-block" alt="MGM College of Engineering">
		    <div style="min-height: 50px"></div>
		</div>
		<div class="col-xs-12 heading-page" align="center">INFORMATION TECHNOLOGY EVENTS</div>
	    </div>
	    <link rel="stylesheet" href="/css/style2.css">
	    <script type="text/javascript" src="/js/modernizr.custom.js"></script>
	    <div class="vt-content row">	
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
		    <a class="event-visit" href="/events/it/bugmunch">
			<div class="circle">
			    <img src="/events/it/images/bugmunch.jpg">
			</div>
		    </a>
		    <div align="center" class="heading-event">Bug Munch<br><a href="/events/it/bugmunch"><button class="btn btn-primary">View Details</button></a></div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
		    <a class="event-visit" href="/events/it/cstricker">
			<div class="circle">
			    <img src="/events/it/images/cstriker.jpg">
			</div>
		    </a>
		    <div align="center" class="heading-event">C Striker<br><a href="/events/it/cstricker"><button class="btn btn-primary">View Details</button></a></div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
		    <a class="event-visit" href="/events/it/querymania">
			<div class="circle">
			    <img src="/events/it/images/querymania.jpg">
			</div>
		    </a>
		    <div align="center" class="heading-event">Query Mania<br><a href="/events/it/querymania"><button class="btn btn-primary">View Details</button></a></div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
		    <a class="event-visit" href="/events/it/webmagic">
			<div class="circle">
			    <img src="/events/it/images/webmagic.jpg">
			</div>
		    </a>
		    <div align="center" class="heading-event">Web Magic<br><a href="/events/it/webmagic"><button class="btn btn-primary">View Details</button></a></div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
		    <a class="event-visit" href="/events/it/posterpresentation">
			<div class="circle">
			    <img src="/events/it/images/posterpresentation.jpg">
			</div>
		    </a>
		    <div align="center" class="heading-event">Poster Presentation<br><a href="/events/it/posterpresentation"><button class="btn btn-primary">View Details</button></a></div>
		</div>
	    </div>
	    <div class="row row-custom">
		<link rel="stylesheet" type="text/css" href="/css/default.css" />
		<link rel="stylesheet" type="text/css" href="/css/component.css" />
		<div class="container-new" style="margin-bottom: 10%">
		    <nav id="menu" class="nav">					
			<ul style="margin: 0 auto;color:white;">
			    <li>
				<a href="/">
				    <span class="icon">
					<i aria-hidden="true" class="glyphicon glyphicon-home"></i>
				    </span>
				    <span>Home</span>
				</a>
			    </li>
			    <li>
				<a href="/events">
				    <span class="icon"> 
					<i aria-hidden="true" class="glyphicon glyphicon-modal-window"></i>
				    </span>
				    <span>Events</span>
				</a>
			    </li>
			    <li>
				<a href="/venue">
				    <span class="icon">
					<i aria-hidden="true" class="glyphicon glyphicon-map-marker"></i>
				    </span>
				    <span>Venue</span>
				</a>
			    </li>
			    <li>
				<a href="/accommodation">
				    <span class="icon">
					<i aria-hidden="true" class="glyphicon glyphicon-cutlery"></i>
				    </span>
				    <span>Accommodation</span>
				</a>
			    </li>
			    <li>
				<a href="/aboutus">
				    <span class="icon">
					<i aria-hidden="true" class="glyphicon glyphicon-education"></i>
				    </span>
				    <span>About Us</span>
				</a>
			    </li>
			    <li>
				<a href="/contacts">
				    <span class="icon">
					<i aria-hidden="true" class="glyphicon glyphicon-phone"></i>
				    </span>
				    <span>Contacts</span>
				</a>
			    </li>
			</ul>
		    </nav>
		</div>
		<script>
		//  The function to change the class
		var changeClass = function(r, className1, className2) {
		    var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
		    if (regex.test(r.className)) {
			r.className = r.className.replace(regex, ' ' + className2 + ' ');
		    }
		    else {
			r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"), ' ' + className1 + ' ');
		    }
		    return r.className;
		};

		//  Creating our button in JS for smaller screens
		var menuElements = document.getElementById('menu');
		menuElements.insertAdjacentHTML('afterBegin', '<button type="button" id="menutoggle" class="navtoogle active" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

		//  Toggle the class on click to show / hide the menu
		document.getElementById('menutoggle').onclick = function() {
		    changeClass(this, 'navtoogle active', 'navtoogle');
		}

		// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
		document.onclick = function(e) {
		    var mobileButton = document.getElementById('menutoggle'),
			    buttonStyle = mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

		    if (buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
			changeClass(mobileButton, 'navtoogle active', 'navtoogle');
		    }
		}
		</script>
		<div class="footer">
		    <p class="copyright">© 2016 - MGM's College of Engineering, Nanded. | Designed and Developed By Web Committee VisioTech 2016</p>
		</div>
	    </div>	    
	</div>
    </div> <!-- container -->
</body>
</html>