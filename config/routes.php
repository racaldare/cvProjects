<?php
return array(

	'phpmyadmin'					=> 'error/notfound',			  // actionNotfound in ErorController

	'admin/category/add'					=> 'adminCategory/add/4',	      // actionAdd in AdminCategoryController
	'admin/category/edit/([0-9]+)'			=> 'adminCategory/edit/4/$1',	  // actionEdit in AdminCategoryController
	'admin/category/delete/([0-9]+)'		=> 'adminCategory/delete/4/$1',	  // actionDelete in AdminCategoryController
	'admin/category'						=> 'adminCategory/index/5',	  	  // actionDelete in AdminCategoryController
	
	'admin/slides/delete/([0-9]+)'			=> 'adminSlides/delete/4/$1',	  // actionDelete in AdminSlidesController
	'admin/slides/edit/([0-9]+)'			=> 'adminSlides/edit/4/$1',		  // actionEdit in AdminSlidesController
	'admin/slides'							=> 'adminSlides/index/4',		  // actionIndex in AdminSlidesController

	'admin/services/delete/([0-9]+)'		=> 'adminServices/delete/3/$1',   // actionDelete in AdminServicesController
	'admin/services/edit/([0-9]+)'			=> 'adminServices/edit/3/$1',     // actionEdit in AdminServicesController
	'admin/services/add'					=> 'adminServices/add/3/',		  // actionAdd in AdminServicesController
	'admin/services'						=> 'adminServices/index/3',		  // actionIndex in AdminServicesController

	'admin/galery/block/add'				=> 'adminGaleryBlock/add/2',      // actionAdd in AdminGaleryBlockController
	'admin/galery/block/delete/([0-9+]+)'	=> 'adminGaleryBlock/delete/2/$1',// actionDelete in AdminGaleryBlockController
	'admin/galery/block/edit/([0-9+]+)'		=> 'adminGaleryBlock/edit/2/$1',  // actionEdit in AdminGaleryBlockController
	
	'admin/galery/delete/([0-9]+)/([0-9]+)'	=> 'adminGalery/delete/2/$1/$2',  // actionDelete in AdminGaleryController
	'admin/galery/edit/([0-9]+)/([0-9]+)'	=> 'adminGalery/edit/2/$1/$2',	  // actionEdit in AdminGaleryController
	'admin/galery/view/([0-9]+)'			=> 'adminGalery/view/2/$1',	      // actionView in AdminGaleryController
	'admin/galery/add/([0-9]+)'	 			=> 'adminGalery/add/2/$1',        // actionAdd in AdminGaleryController
	'admin/galery/([0-9]+)'	 				=> 'adminGalery/index/2/$1',	  // actionIndex in AdminGaleryController
	'admin/galery'  						=> 'adminGalery/index',			  // actionIndex in AdminGaleryController


	'admin/login'							=> 'admin/login',				  // actionLogin in AdminController
	'admin'									=> 'admin/index',				  // actionIndex in AdminController
	
	'galery/view/([0-9]+)/([0-9]+)'			=> 'galery/view/$1/2/$2',    	  // actionIndex in SiteController
	'galery/view/([0-9]+)' 					=> 'galery/view/$1/2',     	  	  // actionIndex in SiteController
	'galery/([0-9]+)'	 					=> 'galery/index/2/$1',	 		  // actionIndex in SiteController
	'galery'	 							=> 'galery/index/2',	 		  // actionIndex in SiteController
	
	'about'									=> 'about/index/3',            	  // actionIndex in AboutController
	
	'contact'								=> 'contact/index/5',			  // actionIndex in ContactController
	
	'services'								=> 'services/index/4',         	  // actionIndex in ServicesController
 	
	'/' 				    				=> 'site/index/1', 			  	  // actionIndex in SiteController

	'(^[a-zA-Z0-9_]{1,}$)'					=> 'error/notfound',			  // actionNotfound in ErorController
	
	'' 				    					=> 'site/index/1' 			  	  // actionIndex in SiteController
	);