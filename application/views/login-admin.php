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
		<style type="text/css" media="screen">
			@import url(https://fonts.googleapis.com/css?family=Roboto:300);

			.login-page {
			  width: 360px;
			  padding: 8% 0 0;
			  margin: auto;
			}
			.form {
			  position: relative;
			  z-index: 1;
			  background: #FFFFFF;
			  max-width: 360px;
			  margin: 0 auto 100px;
			  padding: 45px;
			  text-align: center;
			  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
			}
			.form input {
			  font-family: "Roboto", sans-serif;
			  outline: 0;
			  background: #f2f2f2;
			  width: 100%;
			  border: 0;
			  margin: 0 0 15px;
			  padding: 15px;
			  box-sizing: border-box;
			  font-size: 14px;
			}
			.form button {
			  font-family: "Roboto", sans-serif;
			  text-transform: uppercase;
			  outline: 0;
			  background: #4CAF50;
			  width: 100%;
			  border: 0;
			  padding: 15px;
			  color: #FFFFFF;
			  font-size: 14px;
			  -webkit-transition: all 0.3 ease;
			  transition: all 0.3 ease;
			  cursor: pointer;
			}
			.form button:hover,.form button:active,.form button:focus {
			  background: #43A047;
			}
			.form .message {
			  margin: 15px 0 0;
			  color: #b3b3b3;
			  font-size: 12px;
			}
			.form .message a {
			  color: #4CAF50;
			  text-decoration: none;
			}
			.form .register-form {
			  display: none;
			}
			.container {
			  position: relative;
			  z-index: 1;
			  max-width: 300px;
			  margin: 0 auto;
			}
			.container:before, .container:after {
			  content: "";
			  display: block;
			  clear: both;
			}
			.container .info {
			  margin: 50px auto;
			  text-align: center;
			}
			.container .info h1 {
			  margin: 0 0 15px;
			  padding: 0;
			  font-size: 36px;
			  font-weight: 300;
			  color: #1a1a1a;
			}
			.container .info span {
			  color: #4d4d4d;
			  font-size: 12px;
			}
			.container .info span a {
			  color: #000000;
			  text-decoration: none;
			}
			.container .info span .fa {
			  color: #EF3B3A;
			}
			body {
			  background: #e74c3c; /* fallback for old browsers */
			  background: -webkit-linear-gradient(right, #e74c3c, #2ecc71);
			  background: -moz-linear-gradient(right, #e74c3c, #2ecc71);
			  background: -o-linear-gradient(right, #e74c3c, #2ecc71);
			  background: linear-gradient(to left, #e74c3c, #2ecc71);
			  font-family: "Roboto", sans-serif;
			  -webkit-font-smoothing: antialiased;
			  -moz-osx-font-smoothing: grayscale;      
			}	
		</style>
	</head>
	<body>
		<div class="login-page">
			<div class="form">
				<form action="<?php echo base_url();?>logina" method="post" class="login-form">
					<input name="username" type="text" placeholder="username"/>
					<input name="password" type="password" placeholder="password"/>
					<button>login</button>
					<?php echo $this->session->flashdata('test');?>
				</form>
			</div>
		</div>
	</body>
</html>