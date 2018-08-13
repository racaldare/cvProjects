<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LV Lion Company</title>

    <!-- Bootstrap Core CSS -->

    <!-- Custom CSS -->
	<link href="/template/css/main.css" rel="stylesheet">
    <link href="/template/css/custom.css" rel="stylesheet">
	
	<script src="//use.edgefonts.net/bebas-neue.js"></script>

    <!-- Custom Fonts & Icons -->
    <link href="/template/css/font.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="/template/css/icomoon-social.css">
	<link rel="stylesheet" href="/template/css/font-awesome.min.css">
	
    <link href="/template/css/bts.css" rel="stylesheet">
	
	<script src="/template/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
	

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class="navbar navbar-inverse navbar-fixed-top" role="banner" style="padding: 20px 0;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="margin-bottom: -20px; margin-top: -20px;" href="/">
					<img style=" width: 105px; height: 95px;" src="/template/img/logo.png" alt="Basica">
				</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if($headerPage == 1): ?>class="active" <?php endif; ?>><a href="/">Home</a></li>
					<li <?php if($headerPage == 2): ?>class="active" <?php endif; ?>><a href="/galery/">Galery</a></li>
                    <li <?php if($headerPage == 3): ?>class="active" <?php endif; ?>><a href="/about/">About Us</a></li>
                    <li <?php if($headerPage == 4): ?>class="active" <?php endif; ?>><a href="/services/">Services</a></li>
                    <li <?php if($headerPage == 5): ?>class="active" <?php endif; ?>><a href="/contact/">Contact</a></li>
                </ul>
            </div>
        </div>
    </header><!--/header-->