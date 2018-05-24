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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
		<div id="mainBody">
			<div class="container">
				<div class="row">
					<!-- Sidebar ================================================== -->
					<div id="sidebar" class="span3">
						<div class="well well-small"><a id="myCart" href="<?='/consume_commerce/index.php/Welcome/mychart'?>"><img src="<?=base_url()?>assets/themes/images/ico-cart.png" alt="cart"><?=$chart_number ?> Items  <span class="badge badge-warning pull-right">Rp. <?=number_format($cost_all_chart+$cost_all_chart*0.1,0,',','.') ?></span></a></div>
						<ul id="sideManu" class="nav nav-tabs nav-stacked">
							<li><a href="#">- Program Diskon -</a></li>
							<li><a href="<?='/consume_commerce/index.php/Welcome/get_products_discount/get_one/100'?>">Buy One Get One Free</a></li>
							<li><a href="<?='/consume_commerce/index.php/Welcome/get_products_discount/end_year/100'?>">End Year</a></li>
							<li><a href="<?='/consume_commerce/index.php/Welcome/get_products_discount/free_sale/100'?>">Free Sale</a></li>
							<li><a href="<?='/consume_commerce/index.php/Welcome/get_products_discount/event/100'?>">Event</a></li>
							<li><a href="<?='/consume_commerce/index.php/Welcome/get_products_discount/event/100'?>">Event</a></li>
						</ul>
						<br/>

					</div>

					<!-- Sidebar end=============================================== -->
					<div class="span9">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Product</th>
									<th>Deskripsi</th>
									<th>Jumlah Item</th>
									<th>Price</th>
									<th>Tax</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$total_tax = 0;
								$total_item = 0;
								?>
								<?php foreach($items['products'] as $item){?>
								<tr>
									<td> 
										<?php $img = base_url().'/assets/img-items/'.$item['id'].'.jpg' ?>
										<img src="<?=$img?>" alt="" width='60'/>
									</td>
									<td><?=$item['name']?> <br> <small>Contoh deskripsi produk <?=$item['name']?></small></td>
									<td>
										<span><b><?=$item['amount'] ?></b></span>
									</td>
									<td>Rp. <?=number_format($item['price'],0,',','.')?></td>
									<td>Rp. <?=number_format($item['price']*0.1,0,',','.') ?></td>
									<td>Rp. <?=number_format($item['price']*$item['amount'],0,',','.') ?></td>
								</tr>
								<?php 
								$total_tax += $item['price']+$item['price']*0.1*$item['amount'];
								$total_item += $item['amount'];

								?>
								<?php } ?>
								<tr>
									<td colspan="6" style="text-align:right">Total Price:	</td>
									<td style="text-align:right"> <?=number_format($cost_all_chart,0,',','.') ?></td>
								</tr>
								
								<tr>
									<td colspan="6" style="text-align:right">Total Tax:	</td>
									<td style="text-align:right"><?=number_format($cost_all_chart*0.1,0,',','.') ?></td>
								</tr>
								<tr>
									<td colspan="6" style="text-align:right"><strong>TOTAL (<?=number_format($cost_all_chart,0,',','.') ?> + <?=number_format($total_tax,0,',','.') ?>) =</strong></td>
									<td class="label label-important" style="display:block;text-align:right"> <strong > Rp. <?=number_format($cost_all_chart+$cost_all_chart*0.1,0,',','.') ?> </strong></td>
								</tr>
							</tbody>
						</table>

						<table class="table table-bordered">
							<tbody><tr><th>ESTIMATE YOUR SHIPPING</th></tr>
								<tr> 
									<td>
										<form class="form-horizontal">
											<div class="control-group">
												<label class="control-label">Berat </label>
												<div class="controls">
													<?php $berat = $total_item/3 ?>
													<input type="text" name="weight" value="<?= (int)$berat ?> Kg" readonly>
												</div>
											</div>

											<?php $keys = array_keys($couriers) ?>
											<div class="control-group">
												<label class="control-label" for="inputCountry">Couriers </label>
												<div class="controls">
													<select name='courier' id="courier">
														<?php for ($i = 0; $i < count($keys) ; $i++) { ?>
														<option value="<?=$keys[$i] ?>"><?=$couriers[$keys[$i]] ?></option>
														<?php	} ?>
													</select>
												</div>
											</div>
											<div class="control-group">
												<label class="control-label" for="inputCountry">Provinces </label>
												<div class="controls">
													<select name='provine' id='province'>
														<?php foreach ($provinces as $province): ?>
															<option value="<?=$province->province_id ?>"><?=$province->province ?></option>						
														<?php endforeach ?>
													</select>
												</div>
											</div>

											<div class="control-group">
												<label class="control-label" for="inputCountry">Cities </label>
												<div class="controls">
													<select name='city' id="city">
														<?php foreach ($cities as $city): ?>
															<option value="<?=$city->city_id ?>"><?=$city->city_name ?></option>						
														<?php endforeach ?>
													</select>
												</div>
											</div>

											<div class="control-group">
												<label class="control-label" for="inputPost">Address</label>
												<div class="controls">
													<textarea class="form-control" name="address"></textarea>
													<!-- <input type="text" id="inputPost" placeholder="Postcode"> -->
												</div>
											</div>

											<!-- <div class="control-group">
												<label class="control-label" for="inputPost">Postal Code</label>
												<div class="controls">
													<select name='postal_code' id="postal_code">
														<option value="-">[Please, define province and city]</option>		
													</select>
												</div>
											</div> -->

											<div class="control-group">
												<label class="control-label" for="inputPost">Estimate</label>
												<div class="controls estimate">
													<p class="form-control">[Silahkan Tentukan Kurir dan Alamat anda!]</p>
												</div>
											</div>

											<div class="control-group">
												<div class="controls">
													<a onclick="get_list_cost()" class="btn">Continue To Checkout </a>
												</div>
											</div>
										</form>				  
									</td>
								</tr>
							</tbody>
						</table>

						<table class="table table-bordered">
							<tbody><tr><th>CHECKOUT INFO</th></tr>
								<tr>
									<td>
										<div class="control-group">
												<label class="control-label" for="inputPost">Total Tagihan</label>
												<div class="controls estimate">
													<p class="form-control">[Silahkan Tentukan Kurir dan Alamat anda!]</p>
												</div>
											</div>
									</td>
								</tr>
							</tbody>
						</table>
						
					</div>
				</div> </div>
			</div></body>
			<script type="text/javascript">
				// fungsi cari
				function cari(){
					search_key = $('.srchTxt').val();
					base_url = "<?=base_url() ?>";
					link = base_url+"/index.php/Welcome/search_product_by_name/"+search_key;
					window.location = link;
				}
				// # fungsi cari

				$('#city').change(function(){
					get_list_cost();
				});
				$('#courier').change(function(){
					get_list_cost();
				});
				// select Provinces
				$('#province').change(function(){
					province_id = $('#province :selected').val();
					url = "Welcome/ajax_get_city/"+province_id;
					$.ajax({
						type: "POST",
						url: url,
						dataType:"JSON",
						success: function(data){
					  	// cacah insert ke #city
					  	$('#city').html("");
					  	$('#postal_code').html("");
					  	$.each(data, function( index, value ) {
					  		$('#city').append("<option value="+value.city_id+">"+value.city_name+"</option>");
					  		$('#postal_code').append("<option value="+value.postal_code+">"+value.postal_code+"</option>");
					  	});
					  },error:function(data){
					  	console.log(data.responseText);
					  },
					});
					get_list_cost();
				});
				// # select Provinces

				// fungsi list estimasi harga
				function get_list_cost(){
					const city_id = $('#city').val();
					const courier = $('#courier').val();
					const weight = parseInt("<?=$total_item ?>")/3;
					const url = "Welcome/ajax_get_cost/23/"+city_id+"/"+parseInt(weight)+"/"+courier+"";
					console.log(url);

					// start ajax
					$.ajax({
						type: "POST",
						url: url,
						dataType:"JSON",
						success: function(data){
					  		// cacah insert ke #city
					  		$('.estimate').html("");
					  		$.each(data, function( index, value ) {
					  			append_select_ongkir(value);
					  		});
					  	},error:function(data){
					  		console.log(data.responseText);
					  	},
					  });
					// # end ajax

				}
				// # fungsi estimasi harga


				// tambahkan daftar ongkir
				function append_select_ongkir(value){
					const content = "<label class='radio'>"+
					"<input type='radio' name='optionsRadios' value='"+JSON.stringify(value)+"' checked=''>OKE"+
					"<p class='text-itaclic'>"+value.service+"</p>"+
					"<p class='text-itaclic'>Rp."+value.cost.toLocaleString()+" </p>"+
					"<p class='text-itaclic'>Estimasi Hari : "+value.etd+"</p>"+
					"</label>";
					
					$('.estimate').append(content);
				}
				//end tambahkan daftar ongkir
			</script>
			</html>