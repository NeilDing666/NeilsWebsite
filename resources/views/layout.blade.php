<!DOCTYPE HTML>
<html>
	<head>
		<title>Neil's Website</title>

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="icon" href="images/bird.ico" type="imagex-icon" />
		<link rel="shortcut icon" href="images/bird.ico" type="imagex-icon" />
	</head>
	<body>
		<!-- <div id="example"></div> -->
		@yield ('content')

		@include('footer')

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<!-- <script src="{{mix('js/app.js')}}" ></script>
	</body>
</html>