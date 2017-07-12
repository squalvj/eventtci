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
		<link href="<?php echo base_url(); ?>assets/bower_components/swiper/dist/css/swiper.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/bower_components/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url(); ?>assets/bower_components/izimodal/css/iziModal.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Oxygen|Patua+One|Quicksand|Raleway|Righteous|Montserrat|Rubik+Mono+One" rel="stylesheet">
	</head>
	<body>
		<div class="container text-center relative" style="height: 100vh">
			<h1 class="text-center">
				Silahkan Cek Email Anda untuk kode registrasi<br>
				redirect dalam...
			</h1>
			<h1 class="hugest" data-count="11" style="position: absolute;top: 30%;left: 50%;margin-right: -50%;transform: translate(-50%, -50%)">
				10
			</h1>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript">
				var n = $(".hugest").data('count');
				var tm = setInterval(countDown,1000);

				function countDown(){
				   n--;
				   $(".hugest").text(n);
				   if(n == 0){
			   			window.location = "<?php echo base_url();?>";
			   			//window.location = "<?php echo base_url();?>";
			      		clearInterval(tm);
			      		console.log("ASD");
				   }
				}
		</script>
	</body>
</html>