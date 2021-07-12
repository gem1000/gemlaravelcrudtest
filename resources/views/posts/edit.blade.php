<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{config('title')}}</title>
</head>
<body>
	<form method="POST" action="/laravelcrud/public/posts/{{$post->id}}">
		@method('PUT')
		@csrf
		<input type="" name="title" value="{{$post->title}}"> <br> <br>
		<textarea name="content">
			{{$post->content}}
		</textarea><br>
		<input type="submit" name="edit" value="update">
		<a href="./"><input type="submit" name="back" value="Go Back"></a>
		<form action="/laravelcrud/public/posts/{{$post->id}}">
				@csrf
				@method('DELETE')
		<input type="submit" name="delete" value="delete">
	</form>
	</form>

</body>
</html>