<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!--Less styles -->
   <!-- Other Less css file //different less files has different color scheam
	<link rel="stylesheet/less" type="text/css" href="<?=base_url()?>assets/themes/less/simplex.less">
	<link rel="stylesheet/less" type="text/css" href="<?=base_url()?>assets/themes/less/classified.less">
	<link rel="stylesheet/less" type="text/css" href="<?=base_url()?>assets/themes/less/amelia.less">  MOVE DOWN TO activate
	-->
	<!--<link rel="stylesheet/less" type="text/css" href="<?=base_url()?>assets/themes/less/bootshop.less">
	<script src="<?=base_url()?>assets/themes/js/less.js" type="text/javascript"></script> -->
	
<!-- Bootstrap style --> 
    <link id="callCss" rel="stylesheet" href="<?=base_url()?>assets/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="<?=base_url()?>assets/themes/css/base.css" rel="stylesheet" media="screen"/>
<!-- Bootstrap style responsive -->	
	<link href="<?=base_url()?>assets/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
	<link href="<?=base_url()?>assets/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
<!-- Google-code-prettify -->	
	<link href="<?=base_url()?>assets/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
<!-- fav and touch icons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/themes/images/ico/apple-touch-icon-57-precomposed.png">
	<style type="text/css" id="enject"></style>
  </head>
<body>
<div id="header">
<div class="container">

<!-- Navbar ================================================== -->
<div id="logoArea" class="navbar">
<a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
</a>
  <div class="navbar-inner">
    <a class="brand" href="index.html"><img src="<?=base_url()?>assets/themes/images/logo.png" alt="Bootsshop"/></a>
		<form class="form-inline navbar-search" method="post" action="products.html" >
		<input id="srchFld" class="srchTxt" type="text" />
		  <button type="submit" id="submitButton" class="btn btn-primary">Go</button>
    </form>

  </div>
</div>
</div>
</div>
<!-- Header End====================================================================== -->
<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		  
		  <div class="item active">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="<?=base_url()?>assets/themes/images/carousel/1.png" alt="special offers"/></a>
			<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>
		  </div>

		  <div class="item">
		  <div class="container">
			<a href="register.html"><img style="width:100%" src="<?=base_url()?>assets/themes/images/carousel/2.png" alt=""/></a>
				<div class="carousel-caption">
				  <h4>Second Thumbnail label</h4>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
		  </div>

		  </div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<li><a href="#">- Program Diskon -</a></li>
			<li><a href="<?='/consume_commerce/index.php/Welcome/get_products_discount/get_one/100'?>">Buy One Get One Free</a></li>
			<li><a href="<?='/consume_commerce/index.php/Welcome/get_products_discount/end_year/100'?>">End Year</a></li>
			<li><a href="<?='/consume_commerce/index.php/Welcome/get_products_discount/free_sale/100'?>">Free Sale</a></li>
			<li><a href="<?='/consume_commerce/index.php/Welcome/get_products_discount/event/100'?>">Event</a></li>

		</ul>
		<br/>
		<!-- 
		  <div class="thumbnail">
			<img src="<?=base_url()?>assets/themes/images/products/panasonic.jpg" alt="Bootshop panasonoc New camera"/>
			<div class="caption">
			  <h5>Panasonic</h5>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
			</div>
		  </div><br/>
			<div class="thumbnail">
				<img src="<?=base_url()?>assets/themes/images/products/kindle.png" title="Bootshop New Kindel" alt="Bootshop Kindel">
				<div class="caption">
				  <h5>Kindle</h5>
				    <h4 style="text-align:center"><a class="btn" href="product_details.html"> <i class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">$222.00</a></h4>
				</div>
			  </div><br/>
			<div class="thumbnail">
				<img src="<?=base_url()?>assets/themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Payment Methods</h5>
				</div>
			  </div> -->
	</div>
<!-- Sidebar end=============================================== -->
		<div class="span9">		
			<div class="well well-small">
			<h4>Produk Paling Laris <small class="pull-right">10 produk paling laris</small></h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
			  	<!-- <?php print_r($favorites) ?>	 -->
			  <?php foreach($favorites['products'] as $favorite){?>
				<li class="span3">
				  <div class="thumbnail">
				  <i class="tag"></i>
				  	<?php $img2 = base_url().'/assets/img-items/'.$favorite['id'].'.jpg' ?>

					<a href="<?='/consume_commerce/index.php/Welcome/get_product_detail/'.$favorite['id']?>"><img src="<?=$img2?>" alt=""></a>
					<div class="caption text-center">
					  <h5><?=$favorite['name'] ?></h5>
					  
					  <center><h4 class="text-center">
					  	<span class="btn">Rp. <?=number_format($favorite['price'],0,',','.')?></span> 
					  	<span class="btn">Sold : <?=$favorite['sold']?> Units</span>
					  </h4></center>
					  					
					  					</div>

				  </div>
				</li>
			  <?php } ?>

			  </ul>
			  </div>
			  </div>
			  <!-- <a class="left carousel-control" href="#featured" data-slide="prev">‹</a> -->
			  <!-- <a class="right carousel-control" href="#featured" data-slide="next">›</a> -->
			  </div>
			  </div>
		</div>
		<h4>Produk <?=$head_product?></h4>
			  <ul class="thumbnails">
				<?php foreach ($items['products'] as $item){ ?>
				
				<li class="span3">
				  <div class="thumbnail">
				  	<!-- base_url()?>assets/themes/css/bootstrap-responsive.min.css -->
				  	<?php $img = base_url().'/assets/img-items/'.$item['id'].'.jpg' ?>
					<a  href="product_details.html"><img src="<?=$img?>" alt=""/></a>
					<div class="caption">
					  <h5><?=$item['name']?></h5>
					  <p> 
						contoh deskripsi produk saja
					  </p>
					 
					  <h4 style="text-align:center">
					  	<a class="btn" href="product_details.html">Stok: <?=$item['stok']?>
					  	</a> 
					  		<a class="btn" href="#">Sold :<?=$item['sold']?>
					  		</a>
					   <a class="btn btn-primary" href="#">Rp. <?=number_format($item['price'],0,',','.')?></a></h4>
					</div>
				  </div>
				</li>
				<?php } ?>
				
			  </ul>	

		</div>
		</div>
	</div>
</div>
<!-- Footer ================================================================== -->
	<div  id="footerSection">
	<div class="container">
		<div class="row">
			<div class="span3">
				<h5>ACCOUNT</h5>
				<a href="login.html">YOUR ACCOUNT</a>
				<a href="login.html">PERSONAL INFORMATION</a> 
				<a href="login.html">ADDRESSES</a> 
				<a href="login.html">DISCOUNT</a>  
				<a href="login.html">ORDER HISTORY</a>
			 </div>
			<div class="span3">
				<h5>INFORMATION</h5>
				<a href="contact.html">CONTACT</a>  
				<a href="register.html">REGISTRATION</a>  
				<a href="legal_notice.html">LEGAL NOTICE</a>  
				<a href="tac.html">TERMS AND CONDITIONS</a> 
				<a href="faq.html">FAQ</a>
			 </div>
			<div class="span3">
				<h5>OUR OFFERS</h5>
				<a href="#">NEW PRODUCTS</a> 
				<a href="#">TOP SELLERS</a>  
				<a href="special_offer.html">SPECIAL OFFERS</a>  
				<a href="#">MANUFACTURERS</a> 
				<a href="#">SUPPLIERS</a> 
			 </div>
			<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="#"><img width="60" height="60" src="<?=base_url()?>assets/themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="#"><img width="60" height="60" src="<?=base_url()?>assets/themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="#"><img width="60" height="60" src="<?=base_url()?>assets/themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>
		<p class="pull-right">&copy; Bootshop</p>
	</div><!-- Container End -->
	</div>
<!-- Placed at the end of the document so the pages load faster ============================================= -->
	<script src="<?=base_url()?>assets/themes/js/jquery.js" type="text/javascript"></script>
	<script src="<?=base_url()?>assets/themes/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>assets/themes/js/google-code-prettify/prettify.js"></script>
	
	<script src="<?=base_url()?>assets/themes/js/bootshop.js"></script>
    <script src="<?=base_url()?>assets/themes/js/jquery.lightbox-0.5.js"></script>
	
	<!-- Themes switcher section ============================================================================================= -->
<div id="secectionBox">
<link rel="stylesheet" href="<?=base_url()?>assets/themes/switch/themeswitch.css" type="text/css" media="screen" />
<script src="<?=base_url()?>assets/themes/switch/theamswitcher.js" type="text/javascript" charset="utf-8"></script>
	<div id="themeContainer">
	<div id="hideme" class="themeTitle">Style Selector</div>
	<div class="themeName">Oregional Skin</div>
	<div class="images style">
	<a href="<?=base_url()?>assets/themes/css/#" name="bootshop"><img src="<?=base_url()?>assets/themes/switch/images/clr/bootshop.png" alt="bootstrap business templates" class="active"></a>
	<a href="<?=base_url()?>assets/themes/css/#" name="businessltd"><img src="<?=base_url()?>assets/themes/switch/images/clr/businessltd.png" alt="bootstrap business templates" class="active"></a>
	</div>
	<div class="themeName">Bootswatch Skins (11)</div>
	<div class="images style">
		<a href="<?=base_url()?>assets/themes/css/#" name="amelia" title="Amelia"><img src="<?=base_url()?>assets/themes/switch/images/clr/amelia.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="spruce" title="Spruce"><img src="<?=base_url()?>assets/themes/switch/images/clr/spruce.png" alt="bootstrap business templates" ></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="superhero" title="Superhero"><img src="<?=base_url()?>assets/themes/switch/images/clr/superhero.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="cyborg"><img src="<?=base_url()?>assets/themes/switch/images/clr/cyborg.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="cerulean"><img src="<?=base_url()?>assets/themes/switch/images/clr/cerulean.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="journal"><img src="<?=base_url()?>assets/themes/switch/images/clr/journal.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="readable"><img src="<?=base_url()?>assets/themes/switch/images/clr/readable.png" alt="bootstrap business templates"></a>	
		<a href="<?=base_url()?>assets/themes/css/#" name="simplex"><img src="<?=base_url()?>assets/themes/switch/images/clr/simplex.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="slate"><img src="<?=base_url()?>assets/themes/switch/images/clr/slate.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="spacelab"><img src="<?=base_url()?>assets/themes/switch/images/clr/spacelab.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="united"><img src="<?=base_url()?>assets/themes/switch/images/clr/united.png" alt="bootstrap business templates"></a>
		<p style="margin:0;line-height:normal;margin-left:-10px;display:none;"><small>These are just examples and you can build your own color scheme in the backend.</small></p>
	</div>
	<div class="themeName">Background Patterns </div>
	<div class="images patterns">
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern1"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern1.png" alt="bootstrap business templates" class="active"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern2"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern2.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern3"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern3.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern4"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern4.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern5"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern5.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern6"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern6.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern7"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern7.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern8"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern8.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern9"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern9.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern10"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern10.png" alt="bootstrap business templates"></a>
		
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern11"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern11.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern12"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern12.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern13"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern13.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern14"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern14.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern15"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern15.png" alt="bootstrap business templates"></a>
		
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern16"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern16.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern17"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern17.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern18"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern18.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern19"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern19.png" alt="bootstrap business templates"></a>
		<a href="<?=base_url()?>assets/themes/css/#" name="pattern20"><img src="<?=base_url()?>assets/themes/switch/images/pattern/pattern20.png" alt="bootstrap business templates"></a>
		 
	</div>
	</div>
</div>
<span id="themesBtn"></span>
</body>
</html>