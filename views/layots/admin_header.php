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
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
<style>
table, td, th {    
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}
</style>	

</head>

<body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

    <header class="navbar navbar-inverse navbar-fixed-top" style="padding: 20px 0;">
        <div class="container">
            <?php if(isset($_SESSION['lvl'])): ?>
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/admin">
					<p>Admin Panel</p>
				</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li <?php if($headerPage == 2): ?>class="active" <?php endif; ?>><a href="/admin/galery/">Gallery</a></li>
					<li <?php if($headerPage == 3): ?>class="active" <?php endif; ?>><a href="/admin/services/">Services</a></li>
                    <li <?php if($headerPage == 4): ?>class="active" <?php endif; ?>><a href="/admin/slides/">Slides</a></li>
                    <li <?php if($headerPage == 5): ?>class="active" <?php endif; ?>><a href="/admin/category/">Categories</a></li>
                    <li <?php if($headerPage == 6): ?>class="active" <?php endif; ?>><a href="/">Back to site</a></li>
                </ul>
            </div>
			<?php endif; ?>
        </div>
    </header><!--/header-->