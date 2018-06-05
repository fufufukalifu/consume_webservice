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
						<form class="form-inline navbar-search" method="post" action="<?=base_url()."index.php/Welcome/search_product_by_name/a" ?>" >
							<input id="srchFld" class="srchTxt" type="text" />
							<a type="submit" id="submitButton" class="btn btn-primary" onclick="cari()">Go</a>
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
							<div class="well well-small"><a id="myCart" href="<?='/consume_commerce/index.php/Welcome/mychart'?>"><img src="<?=base_url()?>assets/themes/images/ico-cart.png" alt="cart"><?=$chart_number ?> Items  <span class="badge badge-warning pull-right">Rp. <?=number_format($cost_all_chart+$cost_all_chart*0.1,0,',','.') ?></span></a></div>
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
			<h4>Info Tagihan</h4>
			<table class="table table-bordered">
				<tbody><tr><th>Info Tagihan</tr>
					<tr>
						<td width="120">total</td>
						<td width="10px">:</td>
						<td>Rp. <?=number_format($info['value'],0,',','.') ?></td>
					</tr>

					<tr>
						<td>Berat</td>
						<td>:</td>
						<td><?=$info['berat'] ?></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><?=urldecode($info['alamat']) ?></td>
					</tr>

					<tr>
						<td>Provinsi</td>
						<td>:</td>
						<td><?=urldecode($info['province']) ?></td>
					</tr>


					<tr>
						<td>Kota</td>
						<td>:</td>
						<td><?=urldecode($info['city']) ?></td>
					</tr>
					<tr>
						<td>Kurir</td>
						<td>:</td>
						<td><?=urldecode($info['courier']) ?></td>
					</tr>

				</table>

				
				<h4>Pembayaran</h4>
				<table class="table table-bordered">
					<tbody><tr><th>Daftar Bank Yang Tersedia</tr>
						<?php $action = base_url().'index.php/Welcome/do_payment/' ?>
					<form id='payment' action="<?=$action ?>" method='post'>
						<input type="hidden" name="berat" value="<?=$info['berat'] ?>">
						<input type="hidden" name="total" value="<?=$info['value'] ?>">
						<input type="hidden" name="alamat" value="<?=urldecode($info['alamat']) ?>">
						<input type="hidden" name="province" value="<?=urldecode($info['province']) ?>">
						<input type="hidden" name="city" value="<?=urldecode($info['city']) ?>">
						<input type="hidden" name="courier" value="<?=urldecode($info['courier']) ?>">
						<?php foreach ($bank as $value): ?>
							<tr>
								<td>
									<label class='radio'>
										<input type='radio' value='<?=$value->id ?>' onclick='bank_klik("<?=$value->id ?>")' name='bank' title='<?=$value->name ?>'>
										<p class='text-itaclic'><img src="<?=$value->link ?>" width="120px"></p>
									</label>
								</td>
							</tr>
						<?php endforeach ?>
					</table>
					<div class="controls">
						<!-- <a onclick="continue_payment()" class="btn">Lanjutkan Pembayaran </a> -->
						<button type="submit" class="btn">Lanjutkan Pembayaran </a>
					</div>
					</form>


				</div> 
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
<script type="text/javascript">
	function cari(){
		search_key = $('.srchTxt').val();
		base_url = "<?=base_url() ?>";
		link = base_url+"/index.php/Welcome/search_product_by_name/"+search_key;
		window.location = link;
	}

	function continue_payment(){
		data = $('#payment').serialize();
		console.log(data);
	}
</script>
</html>