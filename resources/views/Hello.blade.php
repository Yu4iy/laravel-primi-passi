<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hello World</title>
</head>
<body>
	<h1>TEST-1</h1>
<ul>
	@foreach ($tasks as $task)
		<li>{{$task}}</li>	
	@endforeach	
	
</ul>	
<nav>
	<ul>
		<li><a href="{{ route('page1') }}">PAGE 1</a></li> 
		<li><a href="{{ route('page2')}}">PAGE 2</a></li>    <!--{{ route('page1') NAME ROUTING (BP-sicuro)  -->
	</ul>	
</nav>
	</body>
</html>