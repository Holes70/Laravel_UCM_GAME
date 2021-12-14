<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div id="app">
		<div class="container pt-5">
			<div class="card">
				<h5 class="card-header">Featured</h5>
				<div class="card-body">
					<p class="card-text">
						<form-vue></form-vue>
					</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</div>	
		</div>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>