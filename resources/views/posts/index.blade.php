<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Posts</h1>

	@foreach ($posts as $post)

		<li>{{ $post-> title }}</li>

	@endforeach
</html>