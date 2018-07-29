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

		<div id="mainBody">
			<div class="row">
				<div class="container">
					<section id="typography">

						<div class="hero-unit">
							<h2 class="text-center">Satu Langkah lagi barang akan segera dikirim !</h2>
							<p>Silahkan transfer ke nomor rekening <?=$bank->name ?> : <?=$bank->rec_number ?> 
								atas nama PT. Bootshop sebesar <span style="color: red;font-weight: bold;" class="text-danger">Rp. <?=number_format($total,0,',','.') ?></span> Dimohon untuk melakukan transfer sesuai dengan yang tertera agar otomatis terverifikasi oleh sistem secara otomatis. Silahkan track transaksi anda di <b><?=$ship[0]['no_transaksi'] ?></b> </p>
						<span>anda memiliki waktu : </span><span id="demo"></span>
						
						</div>

					</section>
				</div>
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
</script>

<script>
// Set the date we're counting down to
countDownDate = new Date();
var today = new Date();
today.setHours(today.getHours() + 24);

countDownDate=today;

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now an the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + " jam "
  + minutes + " menit " + seconds + " detik ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
</html>