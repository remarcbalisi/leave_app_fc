<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Log In Page</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
  <!-- Open Sans -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
 
  <style type="text/css">
  	
html,
body,
header {
	width: 100%;
	height: 100%;
	font-family: "Open Sans", sans-serif;
	transition: all 0.3s ease-in-out;
	line-height: 1.15;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
	-ms-overflow-style: scrollbar;
	-webkit-tap-highlight-color: transparent;
}

textarea:focus,
input:focus {
	outline: none;
}

.bgImg {
	background-image: url("images/wallhaven-371678.jpg");
	background-size: cover;
	display: block;
	filter: grayscale(75%);
	-webkit-filter: grayscale(75%);
	height: 100%;
	left: 0;
	position: fixed;
	right: 0;
	z-index: -999;
}

.card {
	width: 100%;
	height: 61%;
	border: 0;
	margin-bottom: 150px;
	margin-top: 150px;
	padding: 0px 15px 10px 15px;
	background-color: rgba(255, 255, 255, 0.8);
	-webkit-box-shadow: 5px 6px 20px -5px rgba(0, 0, 0, 0.75);
	-moz-box-shadow: 5px 6px 20px -5px rgba(0, 0, 0, 0.75);
	box-shadow: 5px 6px 20px -5px rgba(0, 0, 0, 0.75);
	border-radius: 6px !important;
}

.glowBox {
	background: linear-gradient(135deg, #00FF74, #00B251);
	margin-top: -40px;
	padding: 20px 0;
	width: 100%;
	margin-bottom: 15px;
	-webkit-box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.2),
		0 13px 24px -11px rgba(115, 103, 240, 0.6);
	box-shadow: 0 5px 20px 0 rgba(0, 0, 0, 0.2),
		0 13px 24px -11px rgba(115, 103, 240, 0.6);
	border-radius: 6px;
}

.title {
	margin-top: 0.625rem;
	margin-bottom: 0.75rem;
	font-size: 1.25rem;
	line-height: 1.5em;
	text-align: center;
	color: #fff;
}

.socialMedia {
	text-align: center;
	margin-top: 1rem;
	padding: 0;
}

.socialMedia i {
	color: #fff;
}

.desc {
	color: #888888;
	font-size: 14px;
	margin: 0 0 10px;
}

.form {
	display: block;
	width: 100%;
	padding: 0.4375rem 0;
	font-size: 1rem;
	line-height: 1.5;
	color: #495057;
	background-color: transparent;
	background-clip: padding-box;
	border: 0;
	border-bottom: 1px solid #d2d2d2;
	border-radius: 0;
	-webkit-box-shadow: none;
	box-shadow: none;
	-webkit-transition: border-color 0.15s ease-in-out,
		-webkit-box-shadow 0.15s ease-in-out;
	transition: border-color 0.15s ease-in-out,
		-webkit-box-shadow 0.15s ease-in-out;
	transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
	transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out,
		-webkit-box-shadow 0.15s ease-in-out;
	padding-bottom: 7px;
	margin: 27px 0 0 0;

	&:focus {
		outline: none;
	}
}

input::-webkit-input-placeholder {
	color: #aaa;
}

input:focus::-webkit-input-placeholder {
	color: #00FF74;
}

.form:focus + .underline {
	transform: scale(1);
}

.underline {
	background-color: #00FF74;
	display: inline-block;
	height: 2px;
	left: 0px;
	margin-top: -4px;
	position: relative;
	top: -18px;
	-webkit-transform: scale(0, 1);
	transform: scale(0, 1);
	-webkit-transition: all 0.25s linear;
	transition: all 0.25s linear;
	width: 100%;
}

.btn.btn-primary.btn-link {
	background: transparent;
	color: #00B251;
	-webkit-box-shadow: none;
	box-shadow: none;
	border: 1px solid #B3B7BD;
	cursor: pointer;
	text-decoration: none;
	padding: 1.125em 2.25em;
   font-size: 1em;
   font-weight: bold;
   line-height: 1.5;
   border-radius: .2em;
}

.create{
	color: #00B251;
	text-align:center;
	margin-top: 8%;
}

  </style>

</head>

<body>
  <div class="bgImg"></div>
  <div class="content">

    <!-- content here -->
    @yield('content')
    <!-- content end here -->

  </div>
</body>
<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>