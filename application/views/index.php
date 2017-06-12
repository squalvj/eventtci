<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Event Topcareer.id</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/css/css.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oxygen|Patua+One|Quicksand|Raleway|Righteous" rel="stylesheet">
	</head>
	<body>
		<div id="section1" class="container-fluid no-padding">
			<div class="parent-section1">
				<div class="row">
					<div class="col-md-2">
						<img class="logotci" src="<?php echo base_url(); ?>assets/img/logo.png">
					</div>
					<div class="col-md-8 col-md-offset-2">
						<div class="navigasi">
							<div class="item-nav">
								<button>What is</button>
							</div>
							<div class="item-nav">
								<button>Speaker</button>
							</div>
							<div class="item-nav">
								<button>Exhibitor</button>
							</div>
							<div class="item-nav">
								<button>Ticket Info</button>
							</div>
							<div class="item-nav">
								<button>Venus</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="jumbotron jumbo-1">
				<div class="wrapper-jumbotron">
					<h2>Memilih Perguruan Tinggi berdasarkan minat dan bakat</h2> 
					<p>Bidang pekerjaan dengan masa depan cerah</p>

					<div class="wrapper-detail-jumbotron">
						<h4>Saturday, Nov 25Th 2017</h4>
						<h4>10.00 am - 4.00 pm</h4>
						
						<button class="btn-jumbotron">Free Tickets</button>
						<button class="btn-jumbotron">Featured Speaker</button>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div id="section2">
				<h1 class="text-center">Connecting Stakeholders of Global Education</h1>
				<h4 class="text-center">Dihadiri oleh puluhan booth dibidang pendidikan yang berasal dari dalam dan luar negeri, directors of relevant government agencies and key influential figures in the industry, the Global Career & Education Fair 2017 aims to accelerate the growth of the countr's human resources by gathering key stakeholders and inspiring participants to grow their country</h4>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://cdn.rawgit.com/pixelcog/parallax.js/master/parallax.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/j.js"></script>
		<script type="text/javascript">
			$('.jumbo-1').parallax({imageSrc: '<?php echo base_url();?>assets/img/p.png'});
		</script>
	</body>
</html>