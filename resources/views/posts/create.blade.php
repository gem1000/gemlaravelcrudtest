<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>{{config('title')}}</title>
</head>
<body>
	<form method="POST" action="/laravelcrud/public/posts">
		@csrf
		<input type="" name="title"> <br> <br>
		<textarea name="content">
			
		</textarea><br>
		<input type="submit" name="edit" value="update">
	</form>
</body>
</html>