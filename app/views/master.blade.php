<!DOCTYPE html> 
<html>
	<head>
		<title>Help Me To See</title>
		
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		
		<link rel="stylesheet" href="css/demo.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/sky-forms.css">
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="css/sky-forms-ie8.css">
		<![endif]-->
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<!--[if lt IE 10]>
			<script src="js/jquery.placeholder.min.js"></script>
		<![endif]-->		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/sky-forms-ie8.js"></script>
		<![endif]-->
	</head>
	
	<body class="bg-cyan">
		<div>
			<div>
				<ul>
					@if(Auth::user())
					<li >{{ ucwords(Auth::user()->userName)}}</li>
					<li>{{Auth::user()->userName}}</li>
					<li>{{HTML::link('logout','Logout')}}</li>
					@else
					<li>{{HTML::link('login','Login')}}</li>
					@endif
				</ul>		
			</div>
			<div>
				@yield('content')
				
			</div>
		</div>
	</body>
</html>