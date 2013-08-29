<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<h1>Main Template</h1>

	<ul>
		@foreach ($categories as $category)

			<li>{{ $category->name }}</li>

		@endforeach
	</ul>

	@yield('content')
	
</body>
</html>