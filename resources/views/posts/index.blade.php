<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{config('title')}}</title>
</head>
<body>
	<a href="/laravelcrud/public/posts/create">Add Posts</a> <br>
	@foreach($posts as $post)
		<a href="/laravelcrud/public/posts/{{$post->id}}/edit">{{$post->title}}</a>
		<p>
			{{$post->content}}
		</p>
	@endforeach
</body>
</html>